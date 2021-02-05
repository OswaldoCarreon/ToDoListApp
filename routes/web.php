<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComprasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\TareaController;

// Home/dashboard page
Route::get('/', [HomeController::class,'index'])->name('index');

/* Login */
Route::get('/login', [HomeController::class,'login'])->name('login'); //View
Route::post('/login/auth', [HomeController::class,'loginAuth'] )->name('login.auth');
/* Signup */
Route::get('/signup', [HomeController::class,'signup'])->name('signup'); //View
Route::post('/signup/auth', [HomeController::class,'signupAuth'])->name('signup.auth');

/* Logout */
Route::get('/logout', [HomeController::class,'logout'])->name('logout');



/* Rutas para rutina */
Route::get('rutinas', [RutinaController::class, 'index'])->name('rutinas');

/* Rutas para ideas */
Route::get('ideas', [IdeasController::class, 'index'])->name('ideas');

/* Rutas para compras */
Route::get('compras',[ComprasController::class, 'index'])->name('compras');


/* Rutas para tareas */
Route::get('tareas', [TareaController::class, 'index'])->name('tareas');
Route::post('tareas/newAjax', [TareaController::class, 'addTask']);

