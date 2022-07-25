@extends('layout')
@section('titulo', 'Nova nota')
@section('corpo')

<h1>Nota - Criar</h1>

{{-- @if($errors->any())
    <p>Preencha os campos corretamente</p>

    <ul>
        @foreach($errors as all() => $erro)
        <li>{{ $erro }}</li>

        @endforeach
    </ul>

@endif --}}

<form action="{{ route('notas/inserir')}}" method="post">
    @csrf

    <p><input type="text" value="{{ old('titulo') }}" name="titulo" placeholder="Titulo"></p>

    <p>
        <select name="nivel_id">
            @foreach($nivs as $niv)
            <option value="{{$niv->id}}">{{$niv->nome}}</option>
            @endforeach
        </select>
    </p>

    <p><textarea id="summernote" name="conteudo"></textarea></p>

    <p><input type="submit" value="Criar"></p>
    
</form>

@endsection
