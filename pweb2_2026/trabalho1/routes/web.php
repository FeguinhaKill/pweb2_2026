<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('Login.login');
});
Route::get('/produtos', function () {
    return view('Produtos.produtos');
});
Route::get('/servicos', function () {
    return view('Servicos.servicos');
});
Route::get('/sugestoes', function () {
    return view('Sugestoes.sugestoes');
});

Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');
Route::post('/produtos', [LoginController::class, 'salvar'])->name('produtos.salvar');