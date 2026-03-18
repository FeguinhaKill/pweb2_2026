<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('Login.login');
})->name('login');
Route::get('/produtos', function () {
    return view('Produtos.produtos');
})->name('produtos');
Route::get('/servicos', function () {
    return view('Servicos.servicos');
})->name('servicos');
Route::get('/sugestoes', function () {
    return view('Sugestoes.sugestoes');
})->name('sugestoes');

Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');
Route::post('/produtos', [ProdutosController::class, 'salvar'])->name('produtos.salvar');