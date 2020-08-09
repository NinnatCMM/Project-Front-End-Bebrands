<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('news', function () {
    return view('news');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('promotion', function () {
    return view('promotion');
});

Route::get('service', function () {
    return view('service');
});

Route::get('shoppingcard', function () {
    return view('shoppingcard');
});

Route::get('login', function () {
    return view('login');
});