@extends('main')
@section('titulo', 'Formulário Serviço')
@section('conteudo')

<h4>Formulário Serviço</h4>
@php
    $action = url('/servicos');
@endphp
@php
    if (!empty($dado->id)) {
        $action = route('servico.update', $dado->id);
    } else {
        $action = route('servico.store');
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
        <div class="col-md-6">
            <label class="form-label">Duração</label>
            <input 
                class="form-control"
                type="text"
                name="duracao"
                value="{{ old('duracao', $dado->duracao ?? '') }}">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea 
            class="form-control"
            name="descricao"
            rows="4">{{ old('descricao', $dado->descricao ?? '') }}</textarea>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ url('servico') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>

</form>

@stop