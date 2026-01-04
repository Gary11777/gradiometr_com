<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/advantages', function () {
    return view('advantages');
})->name('advantages');

Route::get('/specifications', function () {
    return view('specifications');
})->name('specifications');

Route::get('/comparison', function () {
    return view('comparison');
})->name('comparison');

Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
