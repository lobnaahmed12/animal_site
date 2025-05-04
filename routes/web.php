<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\GeraProcedimentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\frontcontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::fallback(function () {
    return view('errors/404');
});


Route::get('/', [frontcontroller::class, 'home'])->name('home');
Route::get('/prod', [frontcontroller::class, 'prod'])->name('prod');
require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('/clientes', ClienteController::class)->name('clientes','*');

    Route::resource('/animais', AnimalController::class)->name('animals','*');

    Route::resource('/produtos', ProdutoController::class)->name('produtos','*');

    Route::get('/generate-pdf/{type}', [PdfController::class, 'generate'])->name('generate-pdf');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
