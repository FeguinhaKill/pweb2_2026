@extends('main')
@section('titulo', 'Formulário Produto')
@section('conteudo')

<h4>Formulário Produto</h4>
<button>
<a href="{{ url('login') }}" class="btn btn-primary">Login</a>
</button>
<button>
<a href="{{ url('servicos') }}" class="btn btn-primary">Produtos</a>
</button>
@php
    $action = url('/produtos');
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
                name="nome">
        </div>

        <div class="col-md-6">
            <label class="form-label">Preço</label>
            <input 
                class="form-control" 
                type="number" 
                step="0.01" 
                name="preco">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Categoria</label>
            <select name="categoria_id" class="form-select">
                <option value="">Selecione...</option>
                    <option value="t1">Tipo 1</option>
                    <option value="t2">Tipo 2</option>
                    <option value="t3">Tipo 3</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Tipo de Mecanismo</label>
            <select name="mecanismo_id" class="form-select">
                <option value="">Selecione...</option>
                    <option value="m1">Tipo 1</option>
                    <option value="m2">Tipo 2</option>
                    <option value="m3">Tipo 3</option>
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