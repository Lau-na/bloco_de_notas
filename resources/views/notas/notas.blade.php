@extends('layout')

@section('corpo') {{-- encapsulei o conteúdo nessa section, precisa ser chamado para aparecer na página --}}

    <h1>Index de Notas</h1>

    {{-- <p><a href="{{ route('produtos/criar')}}">Criar um produto</a></p>    --}}

    <table border="1">
        <tr>
            <th>Nota/Titulo</th>
            <th>Nivel</th>
            <th>Conteudo</th>
        </tr>


        @foreach($notes as $note) 
        <!-- pega os valores passados em prodts (gereado no contoller) para as variáveis prod para exibir eles individualmente -->

            <tr>
                <td>
                    <a href="{{route('nota/ver', $note->id)}}">{{$note->titulo}}</a>
                </td>

                <td>
                    <a href="{{route('nota/ver', $note->id)}}">{{$note->nivel}}</a>
                </td>

                <td>
                    <a href="{{route('nota/ver', $note->id)}}">{{$note->conteudo}}</a>
                </td>
            </tr>

        @endforeach
    
    </table>

@endsection