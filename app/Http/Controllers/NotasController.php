<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index() {
        $notas = Nota::all();
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
        return view('notas/criar');
    }

    public function inserir(Request $formulario){
        $dados = $formulario->validate([
            'titulo' => 'required|max:50',
            'nivel' => '',
            'conteudo' => 'required',

        ]);

        Nota::create($dados);
        return redirect()->route('notas');
    }
}
