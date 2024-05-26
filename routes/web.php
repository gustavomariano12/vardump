<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContatoController::class, 'contact'])->name('contact');