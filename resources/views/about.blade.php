@extends('layouts.app')

@section('title', 'О нас - Garand 101')
@section('description', 'Узнайте больше о производителе градиометра-магнитометра Garand 101. Наша миссия, ценности и контактная информация.')

@section('content')
<section class="py-20 hero-pattern">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="section-title">О нас</h1>
            <p class="section-subtitle mx-auto">
                Создаем профессиональное оборудование для успешного поиска
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">Наша миссия</h2>
                    <p class="text-lg text-slate-600 mb-4 leading-relaxed">
                        Мы разрабатываем и производим высокотехнологичное оборудование для поиска металлов, которое сочетает в себе передовые технологии, надежность и простоту использования.
                    </p>
                    <p class="text-lg text-slate-600 mb-4 leading-relaxed">
                        Garand 101 - результат многолетних исследований и разработок в области магнитометрии. Наша цель - предоставить профессионалам и энтузиастам инструмент, который превосходит аналоги по всем ключевым характеристикам.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Каждый прибор проходит строгий контроль качества и тестирование в реальных условиях, что гарантирует его надежность и долговечность.
                    </p>
                </div>
                <div class="aspect-square bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-48 h-48 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Качество</h3>
                    <p class="text-slate-600">
                        Используем только проверенные компоненты и материалы премиум-класса
                    </p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Инновации</h3>
                    <p class="text-slate-600">
                        Постоянно совершенствуем технологии и внедряем новые решения
                    </p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Поддержка</h3>
                    <p class="text-slate-600">
                        Всегда готовы помочь с выбором, настройкой и эксплуатацией
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Свяжитесь с нами</h2>
                <p class="text-xl text-slate-600">
                    Мы всегда рады ответить на ваши вопросы и помочь с выбором оборудования
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="card">
                        <h3 class="text-xl font-semibold text-slate-900 mb-6">Контактная информация</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-slate-600 mb-1">Телефон</div>
                                    <div x-data="obfuscatedPhone(['+375', '29 ', '636-35-97'])">
                                        <button @click="call()" class="text-lg font-semibold text-slate-900 hover:text-blue-600 transition-colors">
                                            <span x-text="displayPhone"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-slate-600 mb-1">Email</div>
                                    <button onclick="showEmail()" class="text-lg font-semibold text-slate-900 hover:text-blue-600 transition-colors">
                                        Написать нам
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-slate-600 mb-1">Время работы</div>
                                    <div class="text-lg font-semibold text-slate-900">Пн-Пт: 9:00 - 18:00</div>
                                    <div class="text-sm text-slate-600">Сб-Вс: выходной</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-gradient-to-br from-blue-50 to-indigo-50 border-blue-200">
                        <h3 class="text-xl font-semibold text-slate-900 mb-4">Почему выбирают нас?</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Официальная гарантия 2 года</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Бесплатная консультация специалистов</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Доставка по всей Беларуси</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Техническая поддержка 24/7</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-slate-700">Гибкие условия оплаты</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-xl font-semibold text-slate-900 mb-6">Напишите нам</h3>
                    
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
                                placeholder="Ваше сообщение..."
                            >{{ old('message') }}</textarea>
                        </div>

                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                        <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}"></div>

                        <button 
                            type="submit" 
                            class="w-full btn-primary py-4 text-lg"
                        >
                            Отправить сообщение
                        </button>

                        <p class="text-sm text-slate-500 text-center">
                            Нажимая кнопку, вы соглашаетесь с обработкой персональных данных
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endsection
