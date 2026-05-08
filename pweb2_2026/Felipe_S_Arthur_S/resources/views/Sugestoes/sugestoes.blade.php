@extends('main')
@section('titulo', 'Listagem de Sugestões')
@section('conteudo')

@include('header')

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="card-title mb-1">Sugestões</h2>
                    <p class="text-muted mb-0">Gerencie ideias e propostas enviadas pelos usuários.</p>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('sugestoes.form') }}" class="btn btn-success">Nova Sugestão</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('sugestoes.pesquisar') }}" method="post">
                    @csrf
                    <div class="row gy-3 gx-3 align-items-end">
                        <div class="col-12 col-md-3">
                            <label class="form-label">Tipo</label>
                            <select name="tipo" class="form-select">
                                <option value="titulo">Título</option>
                                <option value="descricao">Descrição</option>
                                <option value="palavras_chaves">Palavras-chave</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-5">
                            <label class="form-label">Valor</label>
                            <input type="text" class="form-control" name="valor" placeholder="Pesquisar...">
                        </div>
                        <div class="col-12 col-md-4 d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Palavras-chave</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dados as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->titulo }}</td>
                                    <td>{{ Str::limit($item->descricao, 80) }}</td>
                                    <td>{{ Str::limit($item->palavras_chaves, 40) }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                                            <a href="{{ route('sugestoes.editar', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                            <form action="{{ route('sugestoes.deletar', $item->id) }}" method="post" class="m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja remover o registro?')">Deletar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop