@extends('layout')
@section('titulo', 'Ver Nota')
@section('corpo')
    
    <h1>Notas - Ver</h1>

    <h2>Titulo - {{$note->titulo}}</h2>

    <p>Nivel de importância: {{$note->nivel}}</p>

    <p>Conteudo: {{$note->conteudo}}</p>

@endsection