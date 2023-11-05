<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\PetsAdminController;
use App\Http\Controllers\SolicitanteController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/queroadotar', [PetsController::class, 'RetornaPets'])->name('queroadotar');

Route::get('/adotar', [PetsController::class, 'mostrar'])->name('adotar');

Route::prefix('formulario')->group(function () {
    Route::get('/', [SolicitanteController::class, 'index'])->name('formulario');
    Route::get('/enviar', [SolicitanteController::class, 'create'])->name('formulario-create');
    Route::post('/', [SolicitanteController::class, 'store'])->name('formulario-store');
});


Route::prefix('cadastrar')->group(function () {
    Route::get('/', [PetsAdminController::class, 'index'])->name('cadastrar')->middleware('auth');
    Route::get('/create', [PetsAdminController::class, 'create'])->name('cadastrar-create')->middleware('auth');
    Route::post('/', [PetsAdminController::class, 'store'])->name('cadastrar-store')->middleware('auth');
});

Route::prefix('painel')->group(function () {
    Route::get('/', [PetsAdminController::class, 'painelPets'])->name('painel')->middleware('auth');
    Route::get('/solicitantes', [PetsAdminController::class, 'painelSolicitacoes'])->name('painel-solicitacoes')->middleware('auth');
    Route::get('/filtrar', [PetsAdminController::class, 'filtrar'])->name('painel-filtrar')->middleware('auth');
    Route::get('/{id}/editar', [PetsAdminController::class, 'edit'])->where('id', '[0-9]+')->name('painel-editar')->middleware('auth');
    Route::put('/{id}', [PetsAdminController::class, 'update'])->where('id', '[0-9]+')->name('painel-update')->middleware('auth');
    Route::delete('/{id}', [PetsAdminController::class, 'destroy'])->where('id', '[0-9]+')->name('painel-destroy')->middleware('auth');
});

Route::view('/login', 'login')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');

Route::get('/recuperarsenha', function () {
    return view('recuperarsenha');
})->name('recuperarsenha');
