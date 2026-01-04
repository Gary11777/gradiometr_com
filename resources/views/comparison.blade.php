@extends('layouts.app')

@section('title', 'Сравнение Garand 101 с аналогами')
@section('description', 'Сравните Garand 101 с конкурентами и убедитесь в его превосходстве по ключевым характеристикам.')

@section('content')
<section class="py-20 hero-pattern">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="section-title">Сравнение с конкурентами</h1>
            <p class="section-subtitle mx-auto">
                Garand 101 превосходит аналоги по ключевым характеристикам
            </p>
        </div>

        <div class="max-w-6xl mx-auto mb-12">
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-2xl shadow-sm overflow-hidden">
                    <thead class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Характеристика</th>
                            <th class="px-6 py-4 text-center font-semibold bg-blue-700">Garand 101</th>
                            <th class="px-6 py-4 text-center font-semibold">Конкурент A</th>
                            <th class="px-6 py-4 text-center font-semibold">Конкурент B</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Глубина обнаружения</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">2.5 м</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">2.0 м</td>
                            <td class="px-6 py-4 text-center text-slate-600">1.8 м</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Количество датчиков</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">2</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">1</td>
                            <td class="px-6 py-4 text-center text-slate-600">1</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Время работы</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">24 ч</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">18 ч</td>
                            <td class="px-6 py-4 text-center text-slate-600">12 ч</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Вес устройства</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">1.8 кг</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">2.2 кг</td>
                            <td class="px-6 py-4 text-center text-slate-600">2.5 кг</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Тип дисплея</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">Цветной LCD 2.8"</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">Монохромный LCD</td>
                            <td class="px-6 py-4 text-center text-slate-600">Цветной LCD 2.4"</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Водонепроницаемость</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">IP67</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">IP54</td>
                            <td class="px-6 py-4 text-center text-slate-600">IP65</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">GPS модуль</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <svg class="w-6 h-6 text-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-6 h-6 text-red-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-6 h-6 text-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Профили настроек</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">5</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">3</td>
                            <td class="px-6 py-4 text-center text-slate-600">3</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Гарантия</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">2 года</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">1 год</td>
                            <td class="px-6 py-4 text-center text-slate-600">1 год</td>
                        </tr>
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-900">Цена</td>
                            <td class="px-6 py-4 text-center bg-blue-50">
                                <span class="font-bold text-blue-600">Конкурентная</span>
                            </td>
                            <td class="px-6 py-4 text-center text-slate-600">Выше</td>
                            <td class="px-6 py-4 text-center text-slate-600">Сопоставима</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                        1
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Лучшая глубина</h3>
                    <p class="text-slate-600">
                        Garand 101 обнаруживает объекты на 25% глубже, чем ближайший конкурент
                    </p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                        2
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Максимальная автономность</h3>
                    <p class="text-slate-600">
                        До 24 часов работы - на 33% дольше, чем у конкурентов
                    </p>
                </div>

                <div class="card text-center">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                        3
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-3">Легче на 20%</h3>
                    <p class="text-slate-600">
                        Вес всего 1.8 кг обеспечивает комфорт при длительной работе
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8 text-center">Почему профессионалы выбирают Garand 101?</h2>
            
            <div class="space-y-6">
                <div class="card-hover">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Градиометрическая конфигурация</h3>
                            <p class="text-slate-600">
                                Два датчика работают синхронно, обеспечивая точное определение глубины и размера объекта. Автоматическая компенсация минерализации грунта исключает ложные срабатывания.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-hover">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-lg bg-indigo-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Энергоэффективность</h3>
                            <p class="text-slate-600">
                                Современная электроника и оптимизированные алгоритмы обработки сигнала обеспечивают минимальное энергопотребление при максимальной производительности.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-hover">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900 mb-2">Надежность и долговечность</h3>
                            <p class="text-slate-600">
                                Качественные компоненты и продуманная конструкция гарантируют долгий срок службы. Каждый прибор проходит многоступенчатый контроль качества перед отправкой покупателю.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 mesh-gradient">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Убедитесь сами в превосходстве Garand 101</h2>
            <p class="text-xl text-slate-600 mb-10">
                Закажите прибор сегодня и получите профессиональный инструмент с лучшими характеристиками
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buy') }}" class="btn-primary inline-flex items-center justify-center text-lg px-8 py-4">
                    Купить Garand 101
                </a>
                <a href="{{ route('specifications') }}" class="btn-secondary inline-flex items-center justify-center text-lg px-8 py-4">
                    Все характеристики
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
