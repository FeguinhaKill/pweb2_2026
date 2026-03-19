<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\SugestoesController;

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

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/criar', [ProdutosController::class, 'criar'])->name('produtos.criar');
Route::get('/produtos/{id}/editar', [ProdutosController::class, 'editar'])->name('produtos.editar');
Route::post('/produtos', [ProdutosController::class, 'salvar'])->name('produtos.salvar');
Route::put('/produtos/{id}', [ProdutosController::class, 'atualizar'])->name('produtos.atualizar');
Route::delete('/produtos/{id}', [ProdutosController::class, 'deletar'])->name('produtos.deletar');
Route::post('/produtos/pesquisar', [ProdutosController::class, 'pesquisar'])->name('produtos.pesquisar');

Route::post('/servicos', [ServicosController::class, 'salvar'])->name('servicos.salvar');
Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos.index');
Route::get('/servicos/criar', [ServicosController::class, 'criar'])->name('servicos.criar');
Route::get('/servicos/{id}/editar', [ServicosController::class, 'editar'])->name('servicos.editar');
Route::post('/servicos/{id}', [ServicosController::class, 'atualizar'])->name('servicos.atualizar');
Route::delete('/servicos/{id}', [ServicosController::class, 'deletar'])->name('servicos.deletar');
Route::post('/servicos/pesquisar', [ServicosController::class, 'pesquisar'])->name('servicos.pesquisar');


Route::post('/sugestoes', [SugestoesController::class, 'salvar'])->name('sugestoes.salvar');
Route::get('/sugestoes', [SugestoesController::class, 'index'])->name('sugestoes.index');
Route::get('/sugestoes/criar', [SugestoesController::class, 'criar'])->name('sugestoes.criar');
Route::get('/sugestoes/{id}/editar', [SugestoesController::class, 'editar'])->name('sugestoes.editar');
Route::post('/sugestoes/{id}', [SugestoesController::class, 'atualizar'])->name('sugestoes.atualizar');
Route::delete('/sugestoes/{id}', [SugestoesController::class, 'deletar'])->name('sugestoes.deletar');
Route::post('/sugestoes/pesquisar', [SugestoesController::class, 'pesquisar'])->name('sugestoes.pesquisar');