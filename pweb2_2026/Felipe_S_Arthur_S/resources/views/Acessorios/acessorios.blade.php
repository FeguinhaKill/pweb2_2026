@extends('main')
@section('titulo', 'Listagem de Acessorios')
@section('conteudo')

@include('header')
<div class="row">
    <div class="col">
        <form action="{{ route('acessorios.pesquisar') }}" method="post">
            @csrf
            <div class="row">

                <div class="col-md-3">
                    <label class="form-label">Tipo</label>
                    <select name="tipo" class="form-select">
                        <option value="nome">Nome</option>
                        <option value="produto">Produto</option>
                        <option value="preco">Preço</option>
                        <option value="descricao">Descrição</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Valor</label>
                    <input type="text" class="form-control" name="valor" placeholder="Pesquisar...">
                </div>

                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>

                @if(request()->has('tipo') && request()->has('valor'))
                <div class="col-md-3">
                    <a href="{{ route('acessorios.index') }}" class="btn btn-secondary">Limpar Filtros</a>
                </div>
                @endif

            </div>
        </form>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <a href="{{ route('acessorios.form') }}" class="btn btn-success">Novo</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->produtos->pluck('nome')->join(', ') ?: 'N/A' }}</td>
                        <td>{{ $item->preco }}</td>
                        <td>{{ $item->descricao}}</td>


                        <td>
                            <a href="{{ route('acessorios.editar', $item->id) }}" class="btn btn-warning">Editar</a>
                        </td>

                        <td>
                            <form action="{{ route('acessorios.deletar', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Deseja remover o registro?')">
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop