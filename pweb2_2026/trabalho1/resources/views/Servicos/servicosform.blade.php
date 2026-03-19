@extends('main')
@section('titulo', 'Formulário Serviço')
@section('conteudo')

@include('header')

<h4>Formulário Serviço</h4>

@php
if (!empty($dado->id)) {
    $action = route('servicos.atualizar', $dado->id);
} else {
    $action = route('servicos.salvar');
}
@endphp

<form action="{{ $action }}" method="POST">
    @csrf

    @if (!empty($dado->id))
        @method('PUT')
    @endif

    <input type="hidden" name="id" value="{{ $dado->id ?? '' }}">

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

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Descrição</label>
            <input 
                class="form-control" 
                type="text" 
                name="descricao" 
                value="{{ old('descricao', $dado->descricao ?? '') }}">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('servicos.index') }}" class="btn btn-info">Listagem</a>
        </div>
    </div>

</form>

@stop