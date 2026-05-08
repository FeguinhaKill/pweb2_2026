@extends('main')
@section('titulo', 'Listagem de Acessorios')
@section('conteudo')

@include('header')

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                    <div>
                        <h2 class="card-title mb-1">Acessórios</h2>
                        <p class="text-muted mb-0">Lista de acessórios com detalhes, produto associado e imagem.</p>
                    </div>
                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <a href="{{ route('acessorios.form') }}" class="btn btn-success btn-lg">Novo Acessório</a>
                        @if(request()->has('tipo') && request()->has('valor'))
                            <a href="{{ route('acessorios.index') }}" class="btn btn-outline-secondary btn-lg">Limpar filtros</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('acessorios.pesquisar') }}" method="post">
                    @csrf
                    <div class="row gy-3 gx-3 align-items-end">
                        <div class="col-12 col-md-3">
                            <label class="form-label">Tipo</label>
                            <select name="tipo" class="form-select">
                                <option value="nome">Nome</option>
                                <option value="produto">Produto</option>
                                <option value="preco">Preço</option>
                                <option value="descricao">Descrição</option>
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Descrição</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dados as $item)
                                @php
                                    $nome_imagem = $item->imagem_caminho;
                                @endphp
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('storage/' . $nome_imagem) }}" alt="Imagem de {{ $item->nome }}" class="rounded-circle border" width="80" height="80">
                                        </div>
                                    </td>
                                    <td>{{ $item->nome }}</td>
                                    <td>
                                        @if($item->produtos->isNotEmpty())
                                            <span class="badge bg-info text-dark">{{ $item->produtos->pluck('nome')->join(', ') }}</span>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                    <td>R$ {{ number_format($item->preco, 2, ',', '.') }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($item->descricao, 70) }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                                            <a href="{{ route('acessorios.editar', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                            <form action="{{ route('acessorios.deletar', $item->id) }}" method="post" class="m-0">
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