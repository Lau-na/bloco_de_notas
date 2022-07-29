@extends('layout')
@section('titulo', 'Editar nota')
@section('corpoEditar')

    <h1>Nota - Editar</h1>

    {{-- @if($errors->any())
        <p>Preencha os campos corretamente</p>

        <ul>
            @foreach($errors as all() => $erro)
                <li>{{ $erro }}</li>
                
            @endforeach
        </ul>
        
    @endif --}}

    <form class="container mt-5"  action="{{ route('notas/editar', $note->id)}}" method="post">
        @csrf
        @method('put')

        <p><input type="text" value="{{ old('titulo') ?: $note->titulo }}" name="titulo" placeholder="Titulo"></p>

         <p>
            <select name="nivel_id">
                <option>Teste</option>
                @foreach($nivs as $niv)
                    <option value="{{$niv->id}}" 
                        @if($niv->id == $note->nivel_id) 
                        selected @endif 
                    >{{$niv->nome}}</option>
                @endforeach 
            </select>
        </p>

        <p><textarea id="summernote" name="conteudo" cols="50" rows="10">{{ old('conteudo') ?: $note->conteudo }}</textarea></p>

        <p><input type="submit" value="Gravar" class="btn btn-primary mb-2"></p>
    </form>

@endsection

