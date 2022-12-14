<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('/employees', 'employeesController');
Route::get('/','employeesController@index');
Route::get('/employees', 'employeesController@index');

Route::get('/', function () {
    return view('welcome');
});
Route::resource('sisw',SiswaControllers::class);
Route::resource('employe',SiswaControllers::class);