<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view(view: 'welcome');
});

Route::get('/ola', function () {
    echo 'Olá, Mundo!Faz o 67';
});