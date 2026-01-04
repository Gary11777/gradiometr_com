@extends('layouts.app')

@section('title', 'Фото Garand 101 - Градиометр-магнитометр')
@section('description', 'Фотографии градиометра-магнитометра Garand 101: внешний вид, комплектация, детали конструкции.')

@section('content')
<section class="py-20 hero-pattern">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="section-title">Фотогалерея Garand 101</h1>
            <p class="section-subtitle mx-auto">
                Детальный обзор устройства и его возможностей
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div class="card-hover group">
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-4 overflow-hidden flex items-center justify-center">
                        <svg class="w-24 h-24 text-slate-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Общий вид устройства</h3>
                    <p class="text-sm text-slate-600">Garand 101 в собранном виде с телескопической штангой</p>
                </div>

                <div class="card-hover group">
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-4 overflow-hidden flex items-center justify-center">
                        <svg class="w-24 h-24 text-slate-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Блок управления</h3>
                    <p class="text-sm text-slate-600">Цветной дисплей и органы управления</p>
                </div>

                <div class="card-hover group">
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-4 overflow-hidden flex items-center justify-center">
                        <svg class="w-24 h-24 text-slate-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Поисковая катушка</h3>
                    <p class="text-sm text-slate-600">Двухсенсорная система с защитным кожухом</p>
                </div>

                <div class="card-hover group">
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-4 overflow-hidden flex items-center justify-center">
                        <svg class="w-24 h-24 text-slate-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Комплектация</h3>
                    <p class="text-sm text-slate-600">Полный набор аксессуаров и защитный чехол</p>
                </div>

                <div class="card-hover group">
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-4 overflow-hidden flex items-center justify-center">
                        <svg class="w-24 h-24 text-slate-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">В работе</h3>
                    <p class="text-sm text-slate-600">Garand 101 в полевых условиях</p>
                </div>

                <div class="card-hover group">
                    <div class="aspect-square bg-gradient-to-br from-slate-100 to-slate-200 rounded-xl mb-4 overflow-hidden flex items-center justify-center">
                        <svg class="w-24 h-24 text-slate-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Детали конструкции</h3>
                    <p class="text-sm text-slate-600">Качество изготовления и материалы</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="card bg-gradient-to-br from-blue-50 to-indigo-50 border-blue-200">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-4">Особенности конструкции</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Эргономичная рукоятка с антискользящим покрытием</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Телескопическая штанга с фиксаторами</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Защищенная поисковая катушка диаметром 28 см</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Водонепроницаемый корпус блока управления</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-blue-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Разъемы для наушников и зарядки с защитными крышками</span>
                        </li>
                    </ul>
                </div>

                <div class="card bg-gradient-to-br from-purple-50 to-pink-50 border-purple-200">
                    <h3 class="text-2xl font-semibold text-slate-900 mb-4">Качество материалов</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Ударопрочный ABS-пластик премиум-класса</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Алюминиевая штанга с анодированным покрытием</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Усиленные соединительные элементы</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Резиновые уплотнители для защиты от влаги</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-purple-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-slate-700">Качественная электроника от проверенных производителей</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-700 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Хотите увидеть Garand 101 в действии?</h2>
            <p class="text-xl text-blue-100 mb-10">
                Свяжитесь с нами для демонстрации возможностей прибора или оформления заказа
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('buy') }}" class="px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Купить Garand 101
                </a>
                <a href="{{ route('about') }}" class="px-8 py-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-400 transition-all duration-200 border-2 border-white/20">
                    Связаться с нами
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
