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
            {{-- <option>Teste</option> --}}
            @foreach($nivs as $niv)
            <option value="{{$niv->id}}">{{$niv->nome}}</option>
            @endforeach
        </select>
    </p>


    <textarea id="summernote" name="conteudo"></textarea>
    {{-- fazer download https://summernote.org/getting-started/ --}}

    <p><input type="submit" value="Criar"></p>
</form>

<script>
    $('#summernote').summernote({
        placeholder: 'ffff'
        , tabsize: 2
        , height: 100
    });

</script>

@endsection
