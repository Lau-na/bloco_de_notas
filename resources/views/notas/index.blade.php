@extends('layout')
@section('titulo', 'Index de notas')
@section('corpo') 

    <h1>Index de Notas</h1>

     <div>
        <p><a href="{{ route('notas/criar')}}" class="btn btn-primary" >+ Nota</a></p>  
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
                       {!!$note->conteudo!!}
                    </td>

                    <td>
                        <a href="{{route('notas/pdf', $note->id)}}" class="btn btn-info edit-btn">PDF</a>
                    </td>

                    <td>
                        <a href="{{route('notas/editar', $note->id)}}" class="btn btn-info edit-btn">Editar</a>
                    </td>

                    <td>
                        <form action="{{route('notas/deletar', $note->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="hidden" name="id" value="{$nota->id}" class="btn btn-danger delete-btn">Deletar</button>
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        
        </table>
    </div>

   



@endsection