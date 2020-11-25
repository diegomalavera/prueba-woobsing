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
    return view('welcome');
});

Route::middleware(['auth:sanctum'])->get('/verificacion', function () {
    return view('verificacion');
})->name('verificacion');

Route::middleware(['auth:sanctum'])->get('/sesiones', function () {
    return view('sesiones');
})->name('sesiones');

Route::middleware(['email_verified', 'last_login'])->group(function () {

    Route::middleware(['auth:sanctum', 'verified'])->group(function() {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::post('verificar', 'App\Http\Controllers\MainController@verify')->name('verify');

        Route::resource('usuarios', App\Http\Controllers\UsuariosController::class);
    });
});
