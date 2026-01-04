@extends('layouts.app')

@section('title', 'Garand 101 - Профессиональный градиометр-магнитометр')
@section('description', 'Garand 101 - современный градиометр-магнитометр для профессионального поиска металлов. Высокая чувствительность, надежность и точность.')

@section('content')
<section class="relative overflow-hidden hero-pattern py-20 lg:py-32">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                    <span class="gradient-text">Garand 101</span><br>
                    Профессиональный градиометр-магнитометр
                </h1>
                <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                    Современное решение для профессионального поиска металлов с высокой чувствительностью и точностью обнаружения.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('buy') }}" class="btn-primary inline-flex items-center justify-center">
                        <span>Купить сейчас</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="{{ route('specifications') }}" class="btn-secondary inline-flex items-center justify-center">
                        <span>Характеристики</span>
                    </a>
                </div>
                <div class="mt-12 grid grid-cols-3 gap-6">
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-1">2.5м</div>
                        <div class="text-sm text-slate-600">Глубина обнаружения</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-1">24ч</div>
                        <div class="text-sm text-slate-600">Время работы</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-1">1.8кг</div>
                        <div class="text-sm text-slate-600">Вес устройства</div>
                    </div>
                </div>
            </div>
            <div class="relative lg:h-[600px] flex items-center justify-center">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-indigo-600/20 rounded-3xl blur-3xl"></div>
                <div class="relative bg-white rounded-2xl shadow-2xl p-8 transform hover:scale-105 transition-transform duration-500">
                    <div class="aspect-square w-full max-w-md bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl flex items-center justify-center">
                        <svg class="w-48 h-48 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="section-title">Почему выбирают Garand 101?</h2>
            <p class="section-subtitle mx-auto">
                Передовые технологии и надежность в одном устройстве
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card-hover">
                <div class="feature-icon mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Высокая чувствительность</h3>
                <p class="text-slate-600">
                    Обнаружение металлических объектов на глубине до 2.5 метров с высокой точностью определения размера и типа цели.
                </p>
            </div>

            <div class="card-hover">
                <div class="feature-icon mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Надежная конструкция</h3>
                <p class="text-slate-600">
                    Прочный водонепроницаемый корпус, устойчивый к механическим повреждениям и неблагоприятным погодным условиям.
                </p>
            </div>

            <div class="card-hover">
                <div class="feature-icon mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Длительная работа</h3>
                <p class="text-slate-600">
                    До 24 часов непрерывной работы от одного заряда аккумулятора. Быстрая зарядка и индикация уровня заряда.
                </p>
            </div>

            <div class="card-hover">
                <div class="feature-icon mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Интуитивный интерфейс</h3>
                <p class="text-slate-600">
                    Простое управление с цветным дисплеем и звуковой индикацией. Минимальное время на обучение работе с прибором.
                </p>
            </div>

            <div class="card-hover">
                <div class="feature-icon mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Точная настройка</h3>
                <p class="text-slate-600">
                    Гибкие настройки чувствительности и дискриминации для работы в различных условиях и типах грунта.
                </p>
            </div>

            <div class="card-hover">
                <div class="feature-icon mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Легкий вес</h3>
                <p class="text-slate-600">
                    Всего 1.8 кг общего веса устройства. Эргономичная конструкция обеспечивает комфорт при длительной работе.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 mesh-gradient">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="section-title mb-6">Готовы начать поиск?</h2>
            <p class="text-xl text-slate-600 mb-10">
                Закажите Garand 101 сегодня и получите профессиональный инструмент для успешного поиска
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buy') }}" class="btn-primary inline-flex items-center justify-center text-lg px-8 py-4">
                    <span>Купить Garand 101</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="btn-secondary inline-flex items-center justify-center text-lg px-8 py-4">
                    <span>Узнать больше</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
