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
    return view('employee.layout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/employees', App\Http\Controllers\EmployeeController::class)->middleware('auth');

Route::get('/cookie/set', [App\Http\Controllers\CookieController::class, 'setCookie']);
Route::get('/cookie/get', [App\Http\Controllers\CookieController::class, 'getCookie']);

