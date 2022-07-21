<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'nivel_id',
        'conteudo'
    ];

    public function nivel(){
        return $this->belongsTo(Nivel::class);
    }
}
