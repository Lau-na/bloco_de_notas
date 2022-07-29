@extends('layout')
@section('titulo', 'Nova nota')
@section('corpoCriar')

<h1>Nota - Criar</h1>

{{-- @if($errors->any())
    <p>Preencha os campos corretamente</p>

    <ul>
        @foreach($errors as all() => $erro)
        <li>{{ $erro }}</li>

        @endforeach
    </ul>

@endif --}}

<form class="container mt-5"  action="{{ route('notas/inserir')}}" method="post">
    @csrf

    <div class="input-group mb-2 mr-sm-2">
        <p><input type="text" value="{{ old('titulo') }}" name="titulo" placeholder="Titulo" cclass="form-control mb-2 mr-sm-2"></p>
    </div>
        <p>
            <select name="nivel_id">
                @foreach($nivs as $niv)
                <option value="{{$niv->id}}">{{$niv->nome}}</option>
                @endforeach
            </select>
        </p>
        <p><textarea id="summernote" name="conteudo"></textarea></p>

    <p><input type="submit" value="Criar" class="btn btn-primary mb-2"></p>
    
</form>

@endsection
