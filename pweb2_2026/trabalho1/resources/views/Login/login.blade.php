@extends('main')
@section('titulo', 'Login')
@section('conteudo')

<h4>Login</h4>

@php
    $action = url('/login');
@endphp

<form action="{{ $action }}" method="POST">
    @csrf

    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" 
                   class="form-control" 
                   name="nome" 
                   value="{{ old('nome') }}" 
                   placeholder="Nome...">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="email" class="form-label">Email</label>
            <input type="email" 
                   class="form-control" 
                   name="email" 
                   value="{{ old('email') }}" 
                   placeholder="email@gmail.com">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" 
                   class="form-control" 
                   name="senha" 
                   placeholder="Senha...">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </div>

</form>

@stop