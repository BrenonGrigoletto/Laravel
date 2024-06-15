<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/mensagem/{mensagem}', [MensagemController::class, 'mostrarMensagem']);

Route::resource('clientes', ClienteController::class);
Route::resource('produto', ProdutosController::class);

Route::get('/clientes/delete/{id}', [ClienteController::class, 'delete']);

Route::get('/produto/delete/{id}', [ProdutosController::class, 'delete']);
