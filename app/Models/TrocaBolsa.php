<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrocaBolsa extends Model
{
    use HasFactory;
    protected $table = "troca";

    //protected $guarded =["id"];

    protected $fillable = [
        'aplicada',
        'removida',
        'motivo',
        'condicoes',
        'notas',
        'imagem',
    ];
}
