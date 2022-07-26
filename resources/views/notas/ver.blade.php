@extends('layout')
@section('titulo', 'Ver Nota')
@section('corpo')
    
    <h1>Notas - Ver</h1>

    <h2>{{$note->titulo}}</h2>

    <p>{{$note->nivel->nome}}</p>

    <p>{!!$note->conteudo!!}</p>

@endsection