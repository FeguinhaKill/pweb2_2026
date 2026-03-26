    @extends('main')
@section('titulo', 'Formulário Produto')
@section('conteudo')

@include('header')

<h4>Formulário Produto</h4>
@php
if (!empty($dado->id)) {
    $action = route('produtos.atualizar', $dado->id);
} else {
    $action = route('produtos.salvar');
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
            <select name="categoria_id" class="form-select">
    <option value="">Selecione...</option>

    @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}"
            {{ old('categoria_id', $dado->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
            {{ $categoria->nome }}
        </option>
    @endforeach
</select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Tipo de Mecanismo</label>
            <select name="mecanismo_id" class="form-select">
    <option value="">Selecione...</option>

    @foreach ($mecanismos as $mecanismo)
        <option value="{{ $mecanismo->id }}"
            {{ old('mecanismo_id', $dado->mecanismo_id ?? '') == $mecanismo->id ? 'selected' : '' }}>
            {{ $mecanismo->nome }}
        </option>
    @endforeach
</select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
             <a href="{{ url('listprodutos') }}" class="btn btn-info">Listagem</a>
        </div>
    </div>

</form>


@stop