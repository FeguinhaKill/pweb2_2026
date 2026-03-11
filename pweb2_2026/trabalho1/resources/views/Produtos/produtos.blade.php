@extends('main')
@section('titulo', 'Formulário Produto')
@section('conteudo')

<h4>Formulário Produto</h4>
@php
    $action = url('/produtos');
@endphp
@php
    if (!empty($dado->id)) {
        $action = route('produto.update', $dado->id);
    } else {
        $action = route('produto.store');
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
            <label class="form-label">Categoria</label>
            <select name="categoria_id" class="form-select">
                <option value="">Selecione...</option>

                @foreach ($categorias as $item)
                    <option 
                        value="{{ $item->id }}"
                        {{ old('categoria_id', $dado->categoria_id ?? '') == $item->id ? 'selected' : '' }}>
                        {{ $item->formato }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Tipo de Mecanismo</label>
            <select name="mecanismo_id" class="form-select">
                <option value="">Selecione...</option>

                @foreach ($tipomecanismo as $item)
                    <option 
                        value="{{ $item->id }}"
                        {{ old('mecanismo_id', $dado->mecanismo_id ?? '') == $item->id ? 'selected' : '' }}>
                        {{ $item->nome }}
                    </option>
                @endforeach

            </select>
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
            <a href="{{ url('produto') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>

</form>

@stop