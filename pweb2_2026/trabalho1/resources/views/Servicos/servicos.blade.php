@extends('main')
@section('titulo', 'Formulário Serviço')
@section('conteudo')

<h4>Formulário Serviço</h4>
<button>
<a href="{{ url('login') }}" class="btn btn-primary">Login</a>
</button>
<button>
<a href="{{ url('produtos') }}" class="btn btn-primary">Produtos</a>
</button>
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
            <label class="form-label">Duração</label>
            <input 
                class="form-control"
                type="text"
                name="duracao">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea 
            class="form-control"
            name="descricao"
            rows="4"></textarea>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ url('servico') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>

</form>

@stop