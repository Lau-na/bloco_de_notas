@extends('layout')
@section('titulo', 'PDF Nota')
@section('corpo')

    <h1>Titulo: {{$note->titulo}}</h1><br>

    <h2>Nível: {{$note->nivel->nome}}</h2><br>

    <p>Conteudo: {!!$note->conteudo!!}</p>

@endsection