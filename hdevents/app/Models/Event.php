<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //+> Com isso o Eloquent fara o casting de dados 
    protected $casts = [
        //item  => "tipo" 
        "items" => "array"
    ];
}
