<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// 4. Tiga route custom yang mengembalikan Blade view
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    // 5. Data dinamis berupa array yang dikirim dari route ke view
    $skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'];
    return view('about', ['skills' => $skills]);
});

Route::get('/contact', [PageController::class, 'contact']);