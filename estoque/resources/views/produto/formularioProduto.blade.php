@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<form action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
        <label for="nome">Nome: </label>
        <input name="nome" type="text" class="form-control" value="{{ old('nome') }}">
    </div>
    <div class="form-group">
        <label for="valor">Valor: </label>
        <input name="valor" type="text" class="form-control" value="{{ old('valor') }}">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade: </label>
        <input name="quantidade" type="text" class="form-control" value="{{ old('quantidade') }}">
    </div>
    <div class="form-group">
        <label for="tamanho">Tamanho: </label>
        <input name="tamanho" type="text" class="form-control" value="{{ old('tamanho') }}">
    </div>
    <div class="form-group">
        <label>Descricao: </label>
        <input name="descricao" class="form-control" 
            value="{{ old('descricao') }}"/>
    </div>
    <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
</form>
@stop