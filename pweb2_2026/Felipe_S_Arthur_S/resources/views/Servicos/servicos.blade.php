@extends('main')
@section('titulo', 'Listagem de Serviços')
@section('conteudo')

@include('header')

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="card-title mb-1">Serviços</h2>
                    <p class="text-muted mb-0">Gerencie serviços, atualize preços e veja a lista completa.</p>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('servicos.form') }}" class="btn btn-success">Novo Serviço</a>
                    <a href="{{ route('servicos.report') }}" class="btn btn-secondary">Relatório</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('servicos.pesquisar') }}" method="post">
                    @csrf
                    <div class="row gy-3 gx-3 align-items-end">
                        <div class="col-12 col-md-3">
                            <label class="form-label">Tipo</label>
                            <select name="tipo" class="form-select">
                                <option value="nome">Nome</option>
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
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Descrição</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dados as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>R$ {{ number_format($item->preco, 2, ',', '.') }}</td>
                                    <td>{{ Str::limit($item->descricao, 80) }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                                            <a href="{{ route('servicos.editar', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                            <form action="{{ route('servicos.deletar', $item->id) }}" method="post" class="m-0">
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