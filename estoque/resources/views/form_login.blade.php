@extends('layout.principal')

@section('conteudo')

<h1>Login do sistema</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<form action="/login" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
        <label for="email">Email: </label>
        <input name="email" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Senha: </label>
        <input type="password" name="password" type="text" class="form-control">
    </div>
    
    <button class="btn btn-primary btn-block" type="submit">Login</button>
</form>
@stop