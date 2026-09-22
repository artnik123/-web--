<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Страница "О нас"
Route::get('/about', function () {
    return view('about');
});

// Страница "Контакты" с массивом данных
Route::get('/contacts', function () {
    // Создаем массив данных
    $contacts = [
        [
            'name' => 'Перетрутов Никита Артемович',
            'phone' => '+7 (800) 555 35 35',
            'email' => 'artnik6002@gmail.com',
            'position' => 'CEO'
        ],
        [
            'name' => 'Марк Цукерберг Олегович',
            'phone' => '+7 (993) 993 10 07',
            'email' => 'petrov@example.com',
            'position' => 'Уборщик'
        ],
        [
            'name' => 'Илон Маск Максимович',
            'phone' => '+7 (999) 111-22-33',
            'position' => 'Доставщик пицыы'
        ]
    ];
    
    // Передаем данные в представление
    return view('contacts', ['contacts' => $contacts]);
});