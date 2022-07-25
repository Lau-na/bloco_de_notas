<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Models\Nota;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index() {
        $notas = Nota::with('nivel')->get();
        return view('notas/index', [
            'notes' => $notas,
        ]);
    }

    public function ver(Nota $note) {  //variavel note recebida da rota
        // return $note; retorna objeto de id 1
        return view('notas/ver', [
            'note' => $note, //envia a variavel note para a view
        ]);
    }

    public function criar(){
        $niveis = Nivel::all(); //consulta no db 
        return view('notas/criar', [
            "nivs" => $niveis, //passa consulta para view
        ]);
    }

    public function inserir(Request $formulario){
        $dados = $formulario->validate([
            'titulo' => 'required|max:50',
            'nivel_id' => 'required',
            'conteudo' => 'required',

        ]);

        Nota::create($dados);
        return redirect()->route('notas');
    }

    public function editar(Nota $note){
        $niveis = Nivel::all();
        return view('notas/editar', ['note' => $note, 'nivs' => $niveis]);
    }


    public function editarGravar(Request $formulario, Nota $note){

        $dados = $formulario->validate([
            'titulo' => 'required|max:50',
            'nivel_id' => 'required',
            'conteudo' => 'required',
        ]);

        $note->fill($dados);
        $note->save();

        return redirect()->route('notas');
    }

    public function deletar(Nota $note){
        Nota::findOrfail($note)->delete();
        return redirect()->route('notas'); //->with('msg', 'Nota excluída com sucesso.')
    }
}
