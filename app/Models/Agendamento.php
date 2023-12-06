<?php

namespace App\Models;
use App\Models\Clinica;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = "agendamento";

    protected $fillable = [
        'data_agendamento',
        'horario',
        'clinica_id',
    ];

    protected $cast = [
        'clinica_id'=> "integer"
    ];

    public function clinica(){
        return $this->belongsTo(Clinica::class,
            'clinica_id','id');
    }
}