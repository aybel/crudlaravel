<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/requisiciones', 'App\Http\Controllers\RequisicionController@index')->name('requisiciones.index');
Route::get('/requisiciones/create', 'App\Http\Controllers\RequisicionController@create')->name('requisiciones.create');
Route::post('/requisiciones', 'App\Http\Controllers\RequisicionController@store')->name('requisiciones.store');
Route::get('/requisiciones/{requisicion}', 'App\Http\Controllers\RequisicionController@show')->name('requisiciones.show');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
