<?php

use App\Http\Controllers\IPAController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('guest.login');
})->middleware('guest');

Route::post("/login", [LoginController::class, 'authenticate']);

Route::get("/signout", [LoginController::class, 'signout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get("/dashboard", [LoginController::class, 'dashboard'])->middleware('auth');

Route::resource('siswa-ipa', IPAController::class)->middleware('auth');