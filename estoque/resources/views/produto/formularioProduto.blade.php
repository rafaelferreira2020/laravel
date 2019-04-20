@extends('layout.principal')

@section('conteudo')

<form action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
        <label for="nome">Nome: </label>
        <input name="nome" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">Valor: </label>
        <input name="valor" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade: </label>
        <input name="quantidade" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="" cols="18" rows="2" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
</form>
@stop