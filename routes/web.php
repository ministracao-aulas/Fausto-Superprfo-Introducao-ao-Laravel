<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::match(['get', 'post'], 'logout', [LoginController::class, 'logout'])->name('logout');

Route::post('login', [LoginController::class, 'validateLogin']);

Route::get('users', [UserController::class, 'index'])->name('users.index')
    ->middleware('auth');

Route::view('termos-e-condicoes', 'static-pages.termos-e-condicoes')->name('static-pages.termos-e-condicoes');
