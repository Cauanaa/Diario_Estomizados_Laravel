<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pele extends Model
{
    use HasFactory;
    protected $table = "pele";

    //protected $guarded =["id"];

    protected $fillable = [
        'status'
    ];
}
