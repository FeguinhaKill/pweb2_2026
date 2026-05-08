@extends('main')
@section('titulo', 'Listagem de Produtos')
@section('conteudo')

@include('header')

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="card-title mb-1">Produtos</h2>
                    <p class="text-muted mb-0">Gerencie seus produtos, visualize imagens, categorias e acessórios.</p>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('produtos.form') }}" class="btn btn-success">Novo Produto</a>
                    <a href="{{ route('produtos.chartCategoria') }}" class="btn btn-info">Gráfico Categoria</a>
                    <a href="{{ route('produtos.chartMecanismo') }}" class="btn btn-info">Gráfico Mecanismo</a>
                    <a href="{{ url('produtos/report') }}" class="btn btn-secondary">Relatório</a>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('produtos.pesquisar') }}" method="post">
                    @csrf
                    <div class="row gy-3 gx-3 align-items-end">
                        <div class="col-12 col-md-3">
                            <label class="form-label">Tipo</label>
                            <select name="tipo" class="form-select">
                                <option value="nome">Nome</option>
                                <option value="categoria_id">Categoria</option>
                                <option value="mecanismo_id">Mecanismo</option>
                                <option value="preco">Preço</option>
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
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th>Mecanismo</th>
                                <th>QTD Acessórios</th>
                                <th>Acessórios</th>
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
                                        <img src="{{ asset('storage/' . $nome_imagem) }}" alt="Imagem {{ $item->nome }}" class="rounded-circle border" width="80" height="80">
                                    </td>
                                    <td>{{ $item->nome }}</td>
                                    <td>R$ {{ number_format($item->preco, 2, ',', '.') }}</td>
                                    <td>{{ $item->categoria->nome }}</td>
                                    <td>{{ $item->mecanismo->nome }}</td>
                                    <td>{{ $item->acessorios->count() }}</td>
                                    <td>
                                        @if($item->acessorios->count() > 0)
                                            <a href="{{ route('acessorios.index') }}?tipo=produto_id&valor={{ $item->id }}" class="btn btn-sm btn-info">Ver Acessórios</a>
                                        @else
                                            <span class="text-muted">Sem acessórios</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                                            <a href="{{ route('produtos.editar', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                            <form action="{{ route('produtos.deletar', $item->id) }}" method="post" class="m-0">
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