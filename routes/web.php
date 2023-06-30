<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/car', function () {
    return view('car');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/loginregister', function () {
    return view('loginregister');
});

Route::get('/booking', function () {
    return view('halamanbook');
});

Route::get('/details', function () {
    return view('car-single');
});
