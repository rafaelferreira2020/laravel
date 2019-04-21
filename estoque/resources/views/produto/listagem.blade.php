@extends('layout.principal')

@section('conteudo')

    @if(empty($produtos))
        <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
        </div>
    @else
        <h1>Listagem de Produtos</h1>

        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
            </div>
        @endif
            
        <table class="table table-striped">
            <thead class="thead thead-dark">
                <td><b>NOME</b></td>
                <td><b>VALOR</b></td>
                <td><b>DESCRICAO</b></td>
                <td><b>QUANTIDADE</b></td>
            </thead>

            @foreach ($produtos as $p)
                <tr class="{{$p->quantidade <=1 ? 'danger' : 'success'}}"">
                    <td> {{$p->nome}} </td>
                    <td> {{$p->valor}} </td>
                    <td> {{$p->descricao}} </td>
                    <td> {{$p->quantidade}} </td>
                    <td><a href="/produtos/mostra/{{$p->id}}">
                        <span class="fas fa-search">
                    </a></td>
                    <td><a href="/produtos/remove/{{$p->id}}">
                        <span class="fas fa-trash">
                    </a></td>
                </tr>
            @endforeach
        </table> 
    @endif

    <h4>
        <span class="label label-danger pull-right">
            Um ou menos itens no estoque
        </span>
    </h4>

@stop