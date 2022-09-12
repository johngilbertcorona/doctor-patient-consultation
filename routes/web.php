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


// return index.blade.php when accessing /
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/doctor-login', function () {
    return view('doctor-login');
})->name('doctor-login');

Route::get('/doctor-register', function () {
    return view('doctor-register');
})->name('doctor-register');

