@extends('layout')

@section('corpo') 

    <h1>Index de Notas</h1>

     <div>
        <p><a href="{{ route('notas/criar')}}" class="btn btn-primary" >+ Nova</a></p>  
    </div>

    <div>
        <table border="1">
            <tr>
                <th>Titulo</th>
                <th>Nivel</th>
                <th>Conteudo</th>
            </tr>
            @foreach($notes as $note)
                <tr>
                    <td>
                        <a href="{{route('notas/ver', $note->id)}}">{{$note->titulo}}</a>
                    </td>
                    <td>
                        {{$note->nivel->nome}}
                    </td>
                    <td>
                       {{$note->conteudo}}
                    </td>

                    <td>
                        <a href="{{route('notas/editar', $note->id)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        
        </table>
    </div>

   



@endsection