<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


use App\Mail\avisoTask;
use Illuminate\Support\Facades\Mail;

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

Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');
Route::view('/privada', "secret")->middleware('auth')->name('privada');
Route::view('/tasks', "task")->middleware('auth')->name('tasks');
Route::view('/user', "user")->middleware('auth')->name('user');
Route::view('/settings', "settings")->middleware('auth')->name('settings');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::resource('/tasks', taskController::class);
Route::resource('user', UserController::class);

Route::get('avisoTasks', function () {
    $correo = new avisoTask;
    Mail::to('angeldavidve@gmail.com')->send($correo);

    return view('secret');
});

