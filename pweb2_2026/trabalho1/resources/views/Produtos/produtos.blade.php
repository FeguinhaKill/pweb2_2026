@extends('main')
@section('titulo', 'Formulário Produto')
@section('conteudo')

@include('header')

<h4>Formulário Produto</h4>
@php
if (!empty($dado->id)) {
    $action = route('produtos.atualizar');
} else {
    $action = route('produtos.salvar');
}
@endphp

<form action="{{ $action }}" method="POST">
    @csrf
    @if (!empty($dado->id))
        @method('PUT')
    @endif

    <input type="hidden" name="id">

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Nome</label>
            <input 
                class="form-control" 
                type="text" 
                name="nome" 
                value="{{ old('nome', $dado->nome ?? '') }}">
        </div>

        <div class="col-md-6">
            <label class="form-label">Preço</label>
            <input 
                class="form-control" 
                type="number" 
                step="0.01" 
                name="preco" 
                value="{{ old('preco', $dado->preco ?? '') }}">
        </div>
        
    </div>
    <div class="row m">
            <label class="form-label">Descrição</label>
            <input 
                class="form-control" 
                type="text" 
                name="descricao" 
                value="{{ old('descricao', $dado->descricao ?? '') }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Categoria</label>
            <select name="categoria" class="form-select">
                <option value="">Selecione...</option>
                    <option value="pistolas">Pistolas</option>
                    <option value="revolveres">Revólveres</option>
                    <option value="rifles">Rifles</option>
                    <option value="carabinas">Carabinas</option>
                    <option value="submetralhadoras">Submetralhadoras</option>
                    <option value="espingardas">Espingardas</option>
                    <option value="municoes">Munições</option>
                    <option value="acessorios">Acessórios</option>
                    
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Tipo de Mecanismo</label>
            <select name="mecanismo" class="form-select">
                <option value=""></option>
                    <option value="aeg">AEG</option>
                    <option value="gas">Gás</option>
                    <option value="spring">Spring</option>
                    <option value="mecanica">Mecânica</option>
                    <option value="eletropneumatica">Eletropneumática</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>

</form>

@stop