<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    use HasFactory;
    protected $table = "clinica";

    //protected $guarded =["id"];

    protected $fillable = [
        'nome',
        'contato',
        'email',
        'endereco',
        'imagem',
    ];
}
