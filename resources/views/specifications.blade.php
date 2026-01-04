@extends('layouts.app')

@section('title', 'Технические характеристики Garand 101')
@section('description', 'Подробные технические характеристики градиометра-магнитометра Garand 101: глубина обнаружения, вес, время работы, размеры и другие параметры.')

@section('content')
<section class="py-20 hero-pattern">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="section-title">Технические характеристики</h1>
            <p class="section-subtitle mx-auto">
                Полная информация о возможностях и параметрах Garand 101
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="card">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        Основные параметры
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Тип прибора</span>
                            <span class="font-semibold text-slate-900">Градиометр-магнитометр</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Количество датчиков</span>
                            <span class="font-semibold text-slate-900">2 (градиометрическая конфигурация)</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Глубина обнаружения</span>
                            <span class="font-semibold text-blue-600">До 2.5 метров</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Минимальный размер объекта</span>
                            <span class="font-semibold text-slate-900">От 5 см</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-slate-600">Точность определения глубины</span>
                            <span class="font-semibold text-slate-900">±10%</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                        <div class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        Дисплей и индикация
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Тип дисплея</span>
                            <span class="font-semibold text-slate-900">Цветной LCD</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Размер дисплея</span>
                            <span class="font-semibold text-slate-900">2.8 дюйма</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Подсветка</span>
                            <span class="font-semibold text-slate-900">Регулируемая LED</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Звуковая индикация</span>
                            <span class="font-semibold text-slate-900">Настраиваемая, 10 уровней</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-slate-600">Вибро-индикация</span>
                            <span class="font-semibold text-slate-900">Да, 3 режима</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        Питание
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Тип аккумулятора</span>
                            <span class="font-semibold text-slate-900">Li-Ion встроенный</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Емкость</span>
                            <span class="font-semibold text-slate-900">5000 мАч</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Время работы</span>
                            <span class="font-semibold text-blue-600">До 24 часов</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Время зарядки</span>
                            <span class="font-semibold text-slate-900">3 часа</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-slate-600">Индикация заряда</span>
                            <span class="font-semibold text-slate-900">На дисплее, %</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                        <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                        Настройки и функции
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Уровни чувствительности</span>
                            <span class="font-semibold text-slate-900">10</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Дискриминация</span>
                            <span class="font-semibold text-slate-900">Настраиваемая</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Профили настроек</span>
                            <span class="font-semibold text-slate-900">5 пользовательских</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">GPS</span>
                            <span class="font-semibold text-slate-900">Встроенный модуль</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-slate-600">Память точек</span>
                            <span class="font-semibold text-slate-900">До 1000 точек</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                        <div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                            </svg>
                        </div>
                        Габариты и вес
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Общий вес</span>
                            <span class="font-semibold text-blue-600">1.8 кг</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Длина штанги</span>
                            <span class="font-semibold text-slate-900">110-135 см (регулируемая)</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Размер катушки</span>
                            <span class="font-semibold text-slate-900">28 см (диаметр)</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Размер в сложенном виде</span>
                            <span class="font-semibold text-slate-900">65 × 30 × 15 см</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-slate-600">Материал корпуса</span>
                            <span class="font-semibold text-slate-900">Ударопрочный ABS-пластик</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        Защита и условия работы
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Класс защиты</span>
                            <span class="font-semibold text-slate-900">IP67</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Водонепроницаемость</span>
                            <span class="font-semibold text-slate-900">Да (катушка и корпус)</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Рабочая температура</span>
                            <span class="font-semibold text-slate-900">-20°C до +50°C</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-slate-200">
                            <span class="text-slate-600">Ударопрочность</span>
                            <span class="font-semibold text-slate-900">Падение с 1 метра</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-slate-600">Гарантия</span>
                            <span class="font-semibold text-blue-600">2 года</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-gradient-to-br from-blue-50 to-indigo-50 border-blue-200">
                <h3 class="text-2xl font-semibold text-slate-900 mb-6">Комплектация</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Градиометр-магнитометр Garand 101</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Зарядное устройство USB Type-C</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Защитный чехол для транспортировки</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Наушники с разъемом 3.5 мм</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Руководство пользователя на русском языке</span>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-slate-700">Гарантийный талон</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Готовы приобрести Garand 101?</h2>
            <p class="text-xl text-slate-600 mb-10">
                Свяжитесь с нами для оформления заказа или получения консультации
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buy') }}" class="btn-primary inline-flex items-center justify-center text-lg px-8 py-4">
                    Купить сейчас
                </a>
                <a href="{{ route('comparison') }}" class="btn-secondary inline-flex items-center justify-center text-lg px-8 py-4">
                    Сравнить с аналогами
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
