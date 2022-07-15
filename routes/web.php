<?php

use App\Http\Controllers\NotasController;
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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/notas', [NotasController::class, 'index'])->name('index');

Route::get('notas/ver/{note}', [NotasController::class, 'ver'])-> name('notas/ver'); //criei variel note para ser recebida pela controller

Route::get('/notas/criar', [NotasController::class,'criar'])->name('notas/criar');

// Route::get('/', [NotasController::class, 'login'])->name('login');