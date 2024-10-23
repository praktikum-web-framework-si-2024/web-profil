<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/form', [FormController::class, 'index']);

Route::post('/form', [FormController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/pesan', [PesanController::class, 'index']);
Route::post('/pesan', [PesanController::class, 'store'])->name('pesan.store');

Route::delete('/pesan/{id}', [PesanController::class, 'destroy'])->name('pesan.destroy');