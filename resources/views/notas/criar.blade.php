@extends('layout')

@section('titulo', 'Noova nota')

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

        <p><input type="text" value="{{ old('nivel') }}" name="nivel" placeholder="Nivel">
        {{-- <select name="nivel" id="titulo"  --}}

        <p><textarea id="summernote" type="text" value="{{ old('conteudo') }}" name="conteudo" cols="50" rows="10"></textarea></p>
        {{-- fazer download https://summernote.org/getting-started/ --}}

        <p><input type="submit" value="Criar"></p>
    </form>

@endsection

