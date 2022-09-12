<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;

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

Route::get('doctor/dashboard', function () {
    return view('doctor/dashboard');
});

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('patient/dashboard', function () {
    return view('patient/dashboard');
});


Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});

Route::controller(UserController::class)->group(function () {
    Route::post('register', 'validate_registration');
    Route::post('login', 'validate_login');
    Route::get('logout', 'logoutUser')->name('logout');
});
