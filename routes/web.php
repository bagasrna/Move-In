<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.welcomePage');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/home', function () {
    return view('pages.homePage');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/edit', function () {
    return view('feature.editProfile');
});

Route::get('/book/movin', function () {
    return view('feature.bookMovin');
});

Route::get('/book/packin', function () {
    return view('feature.bookPackin');
});

Route::get('/checkout', function () {
    return view('pages.date');
});