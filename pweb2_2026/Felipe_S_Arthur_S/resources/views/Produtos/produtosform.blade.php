@extends('main')
@section('titulo', 'Formulário Produto')
@section('conteudo')

@include('header')

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">{{ !empty($dado->id) ? 'Editar Produto' : 'Novo Produto' }}</h3>
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
                        $action = route('produtos.atualizar', $dado->id);
                    } else {
                        $action = route('produtos.salvar');
                    }
                @endphp

                <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
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
                            <textarea class="form-control" name="descricao" rows="3">{{ old('descricao', $dado->descricao ?? '') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Categoria</label>
                            <select name="categoria_id" class="form-select">
                                <option value="">Selecione...</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" {{ old('categoria_id', $dado->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>
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
                                    <option value="{{ $mecanismo->id }}" {{ old('mecanismo_id', $dado->mecanismo_id ?? '') == $mecanismo->id ? 'selected' : '' }}>
                                        {{ $mecanismo->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="imagem">Imagem</label>
                            <input type="file" name="imagem" class="form-control">
                        </div>
                        @if(!empty($dado->imagem))
                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <p class="mb-2">Imagem atual</p>
                                    <img src="{{ asset('storage/' . $dado->imagem) }}" alt="Imagem de {{ $dado->nome }}" class="img-fluid rounded" style="max-height: 180px;">
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="row mt-4">
                        <div class="col d-flex gap-2 flex-wrap">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a href="{{ url('produtos') }}" class="btn btn-secondary">Voltar à Lista</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop