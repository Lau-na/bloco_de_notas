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
}
