<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Use App\Models\Nota;
use Illuminate\Support\Facades\App;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function geraPDF(Nota $note){
        // $nota = Nota::all();
        // // dd($nota);
        // $pdf = PDF::loadView('pdf');

        // return $pdf->setPaper('a4')->stream('Nota.pdf');

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('');

        $notas = Nota::all();  
        $pdf = Pdf::loadView('pdf', [
            'note' => $notas,
        ]);
        return $pdf->stream();
        // return $pdf->download();

    }

    
}
