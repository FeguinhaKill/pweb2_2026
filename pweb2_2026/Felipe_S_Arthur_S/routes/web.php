<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\SugestoesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/form', [ProdutosController::class, 'form'])->name('produtos.form');
Route::post('/produtos/pesquisar', [ProdutosController::class, 'pesquisar'])->name('produtos.pesquisar');
Route::post('/produtos', [ProdutosController::class, 'salvar'])->name('produtos.salvar');
Route::put('/produtos/{id}', [ProdutosController::class, 'atualizar'])->name('produtos.atualizar');
Route::delete('/produtos/{id}', [ProdutosController::class, 'deletar'])->name('produtos.deletar');
Route::get('/produtos/{id}/editar', [ProdutosController::class, 'editar'])->name('produtos.editar');

Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos.index');
Route::get('/servicos/form', [ServicosController::class, 'form'])->name('servicos.form');
Route::post('/servicos/pesquisar', [ServicosController::class, 'pesquisar'])->name('servicos.pesquisar');
Route::post('/servicos', [ServicosController::class, 'salvar'])->name('servicos.salvar');
Route::put('/servicos/{id}', [ServicosController::class, 'atualizar'])->name('servicos.atualizar');
Route::delete('/servicos/{id}', [ServicosController::class, 'deletar'])->name('servicos.deletar');
Route::get('/servicos/{id}/editar', [ServicosController::class, 'editar'])->name('servicos.editar');


Route::get('/sugestoes', [SugestoesController::class, 'index'])->name('sugestoes.index');
Route::get('/sugestoes/form', [SugestoesController::class, 'form'])->name('sugestoes.form');
Route::post('/sugestoes/pesquisar', [SugestoesController::class, 'pesquisar'])->name('sugestoes.pesquisar');
Route::post('/sugestoes', [SugestoesController::class, 'salvar'])->name('sugestoes.salvar');
Route::put('/sugestoes/{id}', [SugestoesController::class, 'atualizar'])->name('sugestoes.atualizar');
Route::delete('/sugestoes/{id}', [SugestoesController::class, 'deletar'])->name('sugestoes.deletar');
Route::get('/sugestoes/{id}/editar', [SugestoesController::class, 'editar'])->name('sugestoes.editar');
