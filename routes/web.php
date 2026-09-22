<?php

use Illuminate\Support\Facades\Route;

// Главная страница (заменили welcome на home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Страница "О нас"
Route::get('/about', function () {
    return view('about');
})->name('about');

// Страница "Контакты"
Route::get('/contacts', function () {
    $data = [
        'phone' => '+7 (999) 123-45-67',
        'email' => 'info@laraveltest.local',
        'address' => 'г. Москва, ул. Академика Королева, д. 12',
        'work_hours' => 'Пн-Пт: с 9:00 до 18:00'
    ];

    return view('contacts', ['contactInfo' => $data]);
})->name('contacts');
