@extends('main')
@section('titulo', 'Formulário Sugestão')
@section('conteudo')

@include('header')

<h4>Formulário Sugestão</h4>

@php
if (!empty($dado->id)) {
    $action = route('sugestoes.atualizar', $dado->id);
} else {
    $action = route('sugestoes.salvar');
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
            <label class="form-label">Titulo</label>
            <input 
                class="form-control"
                type="text"
                name="titulo"
                value="{{ old('titulo', $dado->titulo ?? '') }}">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea 
            class="form-control"
            name="descricao"
            rows="4">{{ old('descricao', $dado->descricao ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Palavras-chaves</label>
        <input 
            class="form-control"
            type="text"
            name="palavras_chaves"
            placeholder="ao menos 1"
            value="{{ old('palavras_chaves', $dado->palavras_chaves ?? '') }}">
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>

</form>

@stop