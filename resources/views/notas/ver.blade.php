@extends('layout')
@section('titulo', 'Ver Nota')
@section('corpoVer')
    
    <div class="container mt-5">
        <h2>{{$note->titulo}}</h2>
        <p>{{$note->nivel->nome}}</p>
        <p class="border border-dark rounded p-3">{!!$note->conteudo!!}</p>
    </div>

@endsection