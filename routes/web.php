<?php

use App\Http\Controllers\NotasController;
use App\Http\Controllers\UsuariosController;
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


Route::get('/', [NotasController::class, 'index']);

// Route::get('/notas/summernote', [NotasController::class, 'summernote']);

Route::get('/notas', [NotasController::class, 'index'])->name('notas');

Route::get('notas/ver/{note}', [NotasController::class, 'ver'])-> name('notas/ver'); //criei variel note para ser recebida pela controller

Route::get('/notas/criar', [NotasController::class,'criar'])->name('notas/criar');
Route::post('/notas/criar', [NotasController::class,'inserir'])->name('notas/inserir');

Route::get('/notas/editar/{note}', [NotasController::class, 'editar'])->name('notas/editar');
Route::put('/notas/editar/{note}', [NotasController::class, 'editarGravar']);

Route::delete('/notas/{note}', [NotasController::class], 'deletar')->name('notas/deletar');

Route::get('/login', [UsuariosController::class, 'index'])->name('usuario/index');
Route::post('/login', [UsuariosController::class, 'login'])->name('usuario/login');

Route::get('/logout', [UsuariosController::class, 'logout'])->name('usuario/logout');

