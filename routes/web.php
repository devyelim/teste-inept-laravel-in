<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('en');
});

// Rota para a versão em inglês
Route::get('/en', function () {
    return view('en');
})->name('en');

// Rota para a versão em português
Route::get('/pt', function () {
    return view('pt');
})->name('pt');