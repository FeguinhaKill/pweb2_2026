@extends('main')
@section('titulo', 'Formulário Sugestão')
@section('conteudo')

<h4>Formulário Sugestão</h4>
<button>
<a href="{{ url('login') }}" class="btn btn-primary">Login</a>
</button>
<button>
<a href="{{ url('produtos') }}" class="btn btn-primary">Produtos</a>
</button>
<button>
<a href="{{ url('servicos') }}" class="btn btn-primary">Serviços</a>
</button>
<button>
<a href="{{ url('sugestoes') }}" class="btn btn-primary">Sugestões</a>
</button>
@php
    $action = url('/sugestoes');
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
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea 
            class="form-control"
            name="descricao"
            rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Palavras-chave</label>
        <input 
            class="form-control"
            type="text"
            name="palavras_chave"
            placeholder="Separe por vírgulas">
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ url('sugestoes') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>

</form>

@stop
