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

Route::get('doctor', function () {
    // if (auth()->user()->role == '1') {
    //     return view('patientdashboard');
    // } elseif (auth()->user()->role == '2') {
    //     return view('doctordashboard');
    // }
    return view('doctor');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('patient', function () {
    return view('patient');
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
