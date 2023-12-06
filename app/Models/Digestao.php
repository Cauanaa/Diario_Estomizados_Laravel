<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digestao extends Model
{
    use HasFactory;
    protected $table = "digestao";

    //protected $guarded =["id"];

    protected $fillable = [
        'status'
    ];
}