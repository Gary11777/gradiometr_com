<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Rate limiting - prevent abuse (5 attempts per minute per IP)
        $key = 'contact-form:' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'rate_limit' => "Слишком много попыток. Пожалуйста, попробуйте через {$seconds} секунд."
            ])->withInput();
        }

        // Honeypot check - catches simple bots
        if ($request->filled('website')) {
            Log::warning('Honeypot triggered', ['ip' => $request->ip()]);
            return back()->with('success', 'Спасибо! Ваше сообщение отправлено.');
        }

        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
            'cf-turnstile-response' => 'required',
        ], [
            'name.required' => 'Пожалуйста, укажите ваше имя.',
            'email.required' => 'Пожалуйста, укажите ваш email.',
            'email.email' => 'Пожалуйста, укажите корректный email адрес.',
            'message.required' => 'Пожалуйста, введите сообщение.',
            'cf-turnstile-response.required' => 'Пожалуйста, пройдите проверку безопасности.',
        ]);

        // Verify Cloudflare Turnstile
        $turnstileResponse = $request->input('cf-turnstile-response');
        $turnstileVerified = $this->verifyTurnstile($turnstileResponse, $request->ip());

        if (!$turnstileVerified) {
            return back()->withErrors([
                'turnstile' => 'Проверка безопасности не пройдена. Пожалуйста, попробуйте снова.'
            ])->withInput();
        }

        // Increment rate limiter
        RateLimiter::hit($key, 60);

        // Send email
        try {
            Mail::send('emails.contact', [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? 'Не указан',
                'messageContent' => $validated['message'],
            ], function ($message) use ($validated) {
                $message->to(config('mail.from.address'))
                    ->subject('Новое сообщение с сайта Gradiometr.com')
                    ->replyTo($validated['email'], $validated['name']);
            });

            Log::info('Contact form submitted', [
                'name' => $validated['name'],
                'email' => $validated['email'],
            ]);

            return back()->with('success', 'Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.');
        } catch (\Exception $e) {
            Log::error('Contact form email failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'],
            ]);

            return back()->withErrors([
                'email_error' => 'Произошла ошибка при отправке сообщения. Пожалуйста, попробуйте позже или свяжитесь с нами по телефону.'
            ])->withInput();
        }
    }

    private function verifyTurnstile(string $token, string $ip): bool
    {
        $secretKey = config('services.turnstile.secret_key');

        if (empty($secretKey)) {
            Log::warning('Turnstile secret key not configured');
            return true;
        }

        try {
            $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret' => $secretKey,
                'response' => $token,
                'remoteip' => $ip,
            ]);

            if ($response->successful()) {
                $result = $response->json();
                return $result['success'] ?? false;
            }

            return false;
        } catch (\Exception $e) {
            Log::error('Turnstile verification failed', ['error' => $e->getMessage()]);
            return false;
        }
    }
}
