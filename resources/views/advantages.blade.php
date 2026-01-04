@extends('layouts.app')

@section('title', 'Преимущества Garand 101 - Градиометр-магнитометр')
@section('description', 'Узнайте о ключевых преимуществах градиометра-магнитометра Garand 101: высокая чувствительность, надежность, простота использования.')

@section('content')
<section class="py-20 hero-pattern">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="section-title">Преимущества Garand 101</h1>
            <p class="section-subtitle mx-auto">
                Технологическое превосходство и практичность в каждой детали
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-12">
            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Двухсенсорная система</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Градиометрическая конфигурация с двумя датчиками обеспечивает максимальную точность обнаружения и минимизирует влияние помех от минерализации грунта. Система автоматически компенсирует фоновые магнитные поля.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Высокая чувствительность</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Обнаружение металлических объектов размером от 5 см на глубине до 2.5 метров. Прибор способен различать объекты разного размера и состава, предоставляя детальную информацию о находке.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Защита от внешних воздействий</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Водонепроницаемый корпус класса IP67 защищает прибор от дождя, снега и пыли. Ударопрочная конструкция выдерживает падения с высоты до 1 метра. Рабочий диапазон температур от -20°C до +50°C.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Автономность работы</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Литий-ионный аккумулятор емкостью 5000 мАч обеспечивает до 24 часов непрерывной работы. Быстрая зарядка за 3 часа. Индикация уровня заряда на дисплее. Возможность работы во время зарядки.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Интуитивный интерфейс</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Цветной LCD-дисплей 2.8" с подсветкой для работы в любых условиях освещения. Графическая визуализация сигнала и глубины залегания объекта. Настраиваемая звуковая и вибро-индикация.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Гибкие настройки</h3>
                        <p class="text-slate-600 leading-relaxed">
                            10 уровней чувствительности для адаптации к различным условиям поиска. Регулировка дискриминации для фильтрации нежелательных объектов. Сохранение пользовательских настроек в 5 профилей.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Эргономичная конструкция</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Общий вес всего 1.8 кг обеспечивает комфорт при длительной работе. Телескопическая штанга регулируется по высоте от 110 до 135 см. Мягкая рукоятка с антискользящим покрытием. Складная конструкция для удобной транспортировки.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-hover">
                <div class="flex items-start space-x-4">
                    <div class="feature-icon flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">Память и статистика</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Встроенная память для сохранения до 1000 точек GPS с привязкой к находкам. Статистика работы: время поиска, количество обнаруженных объектов, пройденное расстояние. Экспорт данных через USB.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-700 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Профессиональный инструмент для серьезных задач</h2>
            <p class="text-xl text-blue-100 mb-10">
                Garand 101 создан для тех, кто ценит качество, надежность и эффективность в работе
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buy') }}" class="px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Заказать Garand 101
                </a>
                <a href="{{ route('specifications') }}" class="px-8 py-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-400 transition-all duration-200 border-2 border-white/20">
                    Технические характеристики
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
