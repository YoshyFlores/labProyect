<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    static $rules=[
        'nombre'=>'required|string|min:3',
        'edad'=>'required|integer|min:1',
        'enfermedad'=>'required|string|min:1',


    ];
    protected $perPage=5;
}
