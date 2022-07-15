@extends('layout')

@section('corpo') 

    <h1>Index de Notas</h1>

    <div>
        <table border="1">
            <tr>
                <th>Nota/Titulo</th>
                <th>Nivel</th>
                <th>Conteudo</th>
            </tr>
            @foreach($notes as $note)
                <tr>
                    <td>
                        <a href="{{route('notas/ver', $note->id)}}">{{$note->titulo}}</a>
                    </td>
                    <td>
                        <a href="{{route('notas/ver', $note->id)}}">{{$note->nivel}}</a>
                    </td>
                    <td>
                        <a href="{{route('notas/ver', $note->id)}}">{{$note->conteudo}}</a>
                    </td>
                </tr>
            @endforeach
        
        </table>
    </div>

    <div>
        <p><a href="{{ route('notas/criar')}}" class="btn btn-primary" >+ Nova</a></p>  
    </div>



@endsection