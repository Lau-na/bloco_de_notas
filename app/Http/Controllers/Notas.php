<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class Notas extends Controller
{
    public function index() {
        $notas = Nota::all();
        return view('notas/notas', [
            'notes' => $notas,
        ]);
    }
}
