@extends('layouts.app')

@section('title', 'Купить Garand 101 - Градиометр-магнитометр')
@section('description', 'Закажите градиометр-магнитометр Garand 101. Официальная гарантия, доставка, консультация специалистов.')

@section('content')
<section class="py-20 hero-pattern">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="section-title">Купить Garand 101</h1>
            <p class="section-subtitle mx-auto">
                Оформите заказ и получите профессиональный инструмент для успешного поиска
            </p>
        </div>

        <div class="max-w-5xl mx-auto grid lg:grid-cols-2 gap-12 mb-16">
            <div class="card">
                <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-6 flex items-center justify-center">
                    <svg class="w-32 h-32 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Garand 101</h2>
                <p class="text-slate-600 mb-6">
                    Профессиональный градиометр-магнитометр с двухсенсорной системой, GPS-модулем и автономностью до 24 часов.
                </p>
                
                <div class="space-y-4 mb-8">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Глубина обнаружения до 2.5 метров</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Водонепроницаемость IP67</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Полная комплектация с чехлом</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Гарантия 2 года</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Бесплатная консультация</span>
                    </div>
                </div>

                <div class="border-t border-slate-200 pt-6">
                    <div class="flex items-baseline justify-between mb-6">
                        <span class="text-slate-600">Цена:</span>
                        <span class="text-3xl font-bold gradient-text">По запросу</span>
                    </div>
                </div>
            </div>

            <div class="card bg-white">
                <h3 class="text-2xl font-semibold text-slate-900 mb-6">Форма заказа</h3>
                
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-green-800">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-red-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div class="flex-1">
                                @foreach($errors->all() as $error)
                                    <p class="text-red-800">{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-2">
                            Ваше имя <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Иван Иванов"
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="ivan@example.com"
                        >
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-slate-700 mb-2">
                            Телефон
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="{{ old('phone') }}"
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="+375 29 123-45-67"
                        >
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700 mb-2">
                            Сообщение <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="4"
                            required
                            class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"
                            placeholder="Хочу заказать Garand 101. Интересует доставка и способы оплаты..."
                        >{{ old('message') }}</textarea>
                    </div>

                    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                    <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>

                    <button 
                        type="submit" 
                        class="w-full btn-primary py-4 text-lg"
                    >
                        Отправить заявку
                    </button>

                    <p class="text-sm text-slate-500 text-center">
                        Нажимая кнопку, вы соглашаетесь с обработкой персональных данных
                    </p>
                </form>
            </div>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Доставка</h3>
                    <p class="text-slate-600">
                        Доставка по всей Беларуси курьерской службой или почтой
                    </p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Оплата</h3>
                    <p class="text-slate-600">
                        Наличный и безналичный расчет, банковский перевод
                    </p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Гарантия</h3>
                    <p class="text-slate-600">
                        Официальная гарантия производителя 2 года
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8 text-center">Часто задаваемые вопросы</h2>
            
            <div class="space-y-4">
                <div class="card" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between text-left">
                        <h3 class="text-lg font-semibold text-slate-900">Какие способы оплаты доступны?</h3>
                        <svg class="w-5 h-5 text-slate-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-4 text-slate-600">
                        <p>Мы принимаем наличный и безналичный расчет, банковский перевод. Для юридических лиц возможна оплата по счету с НДС.</p>
                    </div>
                </div>

                <div class="card" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between text-left">
                        <h3 class="text-lg font-semibold text-slate-900">Сколько времени занимает доставка?</h3>
                        <svg class="w-5 h-5 text-slate-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-4 text-slate-600">
                        <p>Доставка по Минску - 1-2 дня, по Беларуси - 2-5 дней в зависимости от региона. Возможна срочная доставка.</p>
                    </div>
                </div>

                <div class="card" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between text-left">
                        <h3 class="text-lg font-semibold text-slate-900">Есть ли возможность обучения работе с прибором?</h3>
                        <svg class="w-5 h-5 text-slate-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-4 text-slate-600">
                        <p>Да, мы предоставляем бесплатную консультацию по работе с прибором. Также в комплекте идет подробное руководство пользователя на русском языке.</p>
                    </div>
                </div>

                <div class="card" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between text-left">
                        <h3 class="text-lg font-semibold text-slate-900">Что входит в гарантийное обслуживание?</h3>
                        <svg class="w-5 h-5 text-slate-400 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-4 text-slate-600">
                        <p>Гарантия 2 года покрывает все производственные дефекты. Бесплатный ремонт или замена неисправных компонентов. Техническая поддержка на протяжении всего срока эксплуатации.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endsection
