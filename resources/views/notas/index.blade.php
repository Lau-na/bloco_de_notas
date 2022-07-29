@extends('layout')
@section('titulo', 'Notas')
@section('corpoNotas')

    <h1>Notas</h1>

     <div>
        <p><a href="{{ route('notas/criar')}}" class="btn btn-primary" >+ Nota</a></p>  
    </div>

    <div>
        <table border="1" class="table table-striped">
            <thead class="thead-dark"  >
                <tr>
                    <th>Titulo</th>
                    <th>Nivel</th>
                    <th>Conteudo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach($notes as $note)
                <tr>
                    <td class="col-sm-2">
                        {{$note->titulo}}
                    </td>
                    <td class="col-sm-2">
                        {{$note->nivel->nome}}
                    </td>
                    <td class="w-50 p-3"    >
                       {!!$note->conteudo!!}
                    </td>

                    <td>
                        <a href="{{route('notas/ver', $note->id)}}" class="btn btn-info edit-btn">Ver</a>
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

@section('corpo')
    @section('titulo', 'Welcome') {{--  Não deu certo --}}

    <div class="container mt-5">
        <h1>Welcome</h1>

        <p>Registre-se para continuar</p>
    </div>
@endsection