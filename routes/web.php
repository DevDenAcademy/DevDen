<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PreciosController;

use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [PrincipalController::class, 'index'])->name('index');

Route::get('contacto', [ContactoController::class, 'show'])->name('contacto.mostrar');

Route::post('contactar', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('precios', [PreciosController::class, 'index'])->name('precios.mostrar');
