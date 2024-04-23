<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::controller(HomeController::class)->group(function() {
    Route::get('/inicio','inicio');
    Route::get('/login','login')->name('login');
    Route::get('/registro','registro');
    Route::post('/registrarse','store')->name('insert');
});

// Route::controller(LoginController::class)->group(function(){
//     Route::post('/validate', 'validarLogin')->name('validate');
// });


Route::controller(UserController::class)->group(function(){
    Route::get('/profile', 'profile')->middleware('auth');
    Route::get('/reservar', 'reservar');
    Route::get('/logout','logout');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin', 'admin');
    Route::get('/añadir', 'añadir');
    Route::post('nuevoSalon', 'guardarSalon')->name('nuevoSalon');
    Route::get('onDelete/{id}', 'deleteUser');
    Route::get('onEdit/{id}', 'editUser');
    Route::get('editar', 'toggleEditing');
});

Route::post('/login',[LoginController::class,'validateLogin'])->name('validate');