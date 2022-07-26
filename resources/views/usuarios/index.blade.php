@extends('layout')
@section('titulo', 'Login')
@section('corpo')

<h1>Login</h1>

@if(session('erro'))
<p>{{ session('erro') }}</p>
@endif


<form action="{{ route('usuario/login') }}" method="post">
    @csrf
    
        <label>E-mail</label>
    <div class="input-group mb-2 mr-sm-2">
        <input type="text" class="form-control mb-2 mr-sm-2" name="email">
    </div>
    
        <label>Senha</label>
    <div class="input-group mb-2 mr-sm-2">
        <input type="password" class="form-control" id="inlineFormInputGroupUsername2" name="senha">
    </div>

    <button type="submit" class="btn btn-primary mb-2">Acessar</button>
</form>

@endsection
