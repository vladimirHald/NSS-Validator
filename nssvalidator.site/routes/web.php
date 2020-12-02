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
    return view('home');
})->name('home');

Route::any('/nssValidate', 'App\Http\Controllers\CheckValidationController@checkValidation' )->name('nssValidate');


Route::post('/nssValidate/submit', 'App\Http\Controllers\NssCodeController@validateCode')->name('nsscode-form');
