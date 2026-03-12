<?php

use Illuminate\Support\Facades\Route;

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