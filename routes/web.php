<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\CoworkerController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;




use App\Mail\avisoTask;
use Illuminate\Support\Facades\Mail;

use App\Jobs\Logger;

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

Route::view('/',"index")->name('taskweb');
Route::view('/login', "login")->name('login');
Route::view('/register', "register")->name('register');
Route::view('/privada', "secret")->middleware('auth')->name('privada');
Route::view('/tasks', "task")->middleware('auth')->name('tasks');
Route::view('/user', "user")->middleware('auth')->name('user');
Route::view('/settings', "settings")->middleware('auth')->name('settings');
Route::view('/category', "category")->middleware('auth')->name('category');
Route::view('/client', "client")->middleware('auth')->name('client');
Route::view('/contrato', "contrato")->middleware('auth')->name('contrato');
Route::view('/coworker', "coworker")->middleware('auth')->name('coworker');
Route::view('/espacio', "espacio")->middleware('auth')->name('espacio');
Route::view('/reserva', "reserva")->middleware('auth')->name('reserva');




Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::resource('/tasks', taskController::class);
Route::resource('/user', UserController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/client', ClientController::class);
Route::resource('/contrato', ContratoController::class);
Route::resource('/coworker', CoworkerController::class);
Route::resource('/espacio', EspacioController::class);
Route::resource('/reserva', ReservaController::class);


 Route::get('/avisoTasks', function () {
     $correo = new avisoTask;
    Mail::to('angeldavidve@gmail.com')->send($correo);

    return view('secret');
 });

Route::get('get-session',[SessionController::class,'getSession']);
Route::get('store-session',[SessionController::class,'storeSession']);


