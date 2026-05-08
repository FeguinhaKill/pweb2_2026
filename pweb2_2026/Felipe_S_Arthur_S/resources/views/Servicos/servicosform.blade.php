@extends('main')
@section('titulo', 'Formulário Serviço')
@section('conteudo')

@include('header')

<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">{{ !empty($dado->id) ? 'Editar Serviço' : 'Novo Serviço' }}</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

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

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome</label>
                            <input class="form-control" type="text" name="nome" value="{{ old('nome', $dado->nome ?? '') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Preço</label>
                            <input class="form-control" type="number" step="0.01" name="preco" value="{{ old('preco', $dado->preco ?? '') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" rows="4">{{ old('descricao', $dado->descricao ?? '') }}</textarea>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex gap-2 flex-wrap">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Voltar à Lista</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop