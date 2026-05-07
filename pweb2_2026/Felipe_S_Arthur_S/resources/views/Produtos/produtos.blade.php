@extends('main')
@section('titulo', 'Listagem de Produtos')
@section('conteudo')

@include('header')

<h4>Listagem de Produtos</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('produtos.update', $dado->id);
        } else {
            $action = route('produtos.salvar');
        }
    @endphp

    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (!empty($dado->id))
            @method('PUT')
        @endif
<div class="row">
    <div class="col">
        <form action="{{ route('produtos.pesquisar') }}" method="post">
            @csrf
            <div class="row">

                <div class="col-md-3">
                    <label class="form-label">Tipo</label>
                    <select name="tipo" class="form-select">
                        <option value="nome">Nome</option>
                        <option value="categoria_id">Categoria</option>
                        <option value="mecanismo_id">Mecanismo</option>
                        <option value="preco">Preço</option>
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
                    <a href="{{ route('produtos.form') }}" class="btn btn-success">Novo</a>
                </div>

                <div class="col-md-3">
                    <a href="{{ url('produtos/report') }}" class="btn btn-secondary"> Relatório Produtos</a>
                </div>

            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Mecanismo</th>
                    <th>QTD </th>
                    <th>Acessorios</th>
                    <th>Editar</th>
                    <th>Deletar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                    @php
                        $nome_imagem = !empty($item->imagem) ? $item->imagem : 'nerd.png';
                    @endphp
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td> <img src="/storage/{{ $nome_imagem }}" class="rounded-circle" width="150px"
                            height="150px" alt="imagem">
                        </td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->preco }}</td>
                        <td>{{ $item->categoria->nome}}</td>
                        <td>{{ $item->mecanismo->nome}}</td>
                        <td>
                            {{ $item->acessorios->count() }}
                        </td>
                        <td>
                            @if($item->acessorios->count() > 0)
                                <a href="{{ route('acessorios.index') }}?tipo=produto_id&valor={{ $item->id }}" class="btn btn-info btn-sm">Ver Acessórios</a>
                            @else
                                <span class="text-muted">Sem acessórios</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('produtos.editar', $item->id) }}" class="btn btn-warning">Editar</a>
                        </td>

                        <td>
                            <form action="{{ route('produtos.deletar', $item->id) }}" method="post">
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