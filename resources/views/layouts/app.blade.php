<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Garand 101 - Градиометр-магнитометр')</title>
    <meta name="description" content="@yield('description', 'Garand 101 - современный градиометр-магнитометр для профессионального поиска')">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white text-slate-900">
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/50 transition-all duration-300" x-data="{ scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 20" :class="{ 'shadow-sm': scrolled }">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-lg flex items-center justify-center transform group-hover:scale-105 transition-transform duration-200">
                        <span class="text-white font-bold text-xl">G</span>
                    </div>
                    <span class="text-xl font-semibold text-slate-900 hidden sm:block">Garand 101</span>
                </a>

                <div class="hidden lg:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Главная</a>
                    <a href="{{ route('advantages') }}" class="nav-link {{ request()->routeIs('advantages') ? 'active' : '' }}">Преимущества</a>
                    <a href="{{ route('specifications') }}" class="nav-link {{ request()->routeIs('specifications') ? 'active' : '' }}">Характеристики</a>
                    <a href="{{ route('comparison') }}" class="nav-link {{ request()->routeIs('comparison') ? 'active' : '' }}">Сравнение</a>
                    <a href="{{ route('photos') }}" class="nav-link {{ request()->routeIs('photos') ? 'active' : '' }}">Фото</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">О нас</a>
                </div>

                <div class="hidden lg:flex items-center space-x-4">
                    <a href="{{ route('buy') }}" class="btn-primary">Купить</a>
                </div>

                <button @click="$store.mobileMenu.toggle()" class="lg:hidden p-2 rounded-lg hover:bg-slate-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!$store.mobileMenu.open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="$store.mobileMenu.open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div x-show="$store.mobileMenu.open" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 class="lg:hidden py-4 border-t border-slate-200"
                 @click.away="$store.mobileMenu.open = false">
                <div class="flex flex-col space-y-2">
                    <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Главная</a>
                    <a href="{{ route('advantages') }}" class="mobile-nav-link {{ request()->routeIs('advantages') ? 'active' : '' }}">Преимущества</a>
                    <a href="{{ route('specifications') }}" class="mobile-nav-link {{ request()->routeIs('specifications') ? 'active' : '' }}">Характеристики</a>
                    <a href="{{ route('comparison') }}" class="mobile-nav-link {{ request()->routeIs('comparison') ? 'active' : '' }}">Сравнение</a>
                    <a href="{{ route('photos') }}" class="mobile-nav-link {{ request()->routeIs('photos') ? 'active' : '' }}">Фото</a>
                    <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">О нас</a>
                    <a href="{{ route('buy') }}" class="mobile-nav-link bg-blue-600 text-white hover:bg-blue-700">Купить</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-16 lg:pt-20">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300 mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">G</span>
                        </div>
                        <span class="text-xl font-semibold text-white">Garand 101</span>
                    </div>
                    <p class="text-sm text-slate-400">
                        Современный градиометр-магнитометр для профессионального поиска металлов.
                    </p>
                </div>

                <div>
                    <h3 class="text-white font-semibold mb-4">Навигация</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Главная</a></li>
                        <li><a href="{{ route('advantages') }}" class="hover:text-white transition-colors">Преимущества</a></li>
                        <li><a href="{{ route('specifications') }}" class="hover:text-white transition-colors">Характеристики</a></li>
                        <li><a href="{{ route('comparison') }}" class="hover:text-white transition-colors">Сравнение</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold mb-4">Информация</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('photos') }}" class="hover:text-white transition-colors">Фото</a></li>
                        <li><a href="{{ route('buy') }}" class="hover:text-white transition-colors">Купить</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">О нас</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold mb-4">Контакты</h3>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <div x-data="obfuscatedPhone(['+375', '29 ', '636-35-97'])">
                                <button @click="call()" class="hover:text-white transition-colors flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span x-text="displayPhone"></span>
                                </button>
                            </div>
                        </li>
                        <li>
                            <button onclick="showEmail()" class="hover:text-white transition-colors flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>Написать нам</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 text-center text-sm text-slate-400">
                <p>&copy; {{ date('Y') }} Garand 101. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('mobileMenu', {
                open: false,
                toggle() {
                    this.open = !this.open;
                }
            });
        });
    </script>
</body>
</html>
