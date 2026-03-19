@extends('main')
@section('titulo', 'Listagem de Serviços')
@section('conteudo')

@include('header')

<h4>Listagem de Serviços</h4>

<div class="row">
    <div class="col">
        <form action="{{ route('servicos.pesquisar') }}" method="post">
            @csrf
            <div class="row">

                <div class="col-md-3">
                    <label class="form-label">Tipo</label>
                    <select name="tipo" class="form-select">
                        <option value="nome">Nome</option>
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

                <div class="col-md-3">
                    <a href="{{ route('servicos.criar') }}" class="btn btn-success">Novo</a>
                </div>

            </div>
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->preco }}</td>
                        <td>{{ $item->descricao }}</td>

                        <td>
                            <a href="{{ route('servicos.editar', $item->id) }}" class="btn btn-warning">
                                Editar
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('servicos.deletar', $item->id) }}" method="post">
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