@extends('main')
@section('titulo', 'Formulário Sugestão')
@section('conteudo')

@include('header')

<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">{{ !empty($dado->id) ? 'Editar Sugestão' : 'Nova Sugestão' }}</h3>
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

                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Título</label>
                            <input class="form-control" type="text" name="titulo" value="{{ old('titulo', $dado->titulo ?? '') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" rows="4">{{ old('descricao', $dado->descricao ?? '') }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Palavras-chave</label>
                            <input class="form-control" type="text" name="palavras_chaves" placeholder="ao menos 1" value="{{ old('palavras_chaves', $dado->palavras_chaves ?? '') }}">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex gap-2 flex-wrap">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ route('sugestoes.index') }}" class="btn btn-secondary">Voltar à Lista</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop