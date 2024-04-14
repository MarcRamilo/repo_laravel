<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mp extends Model
{
    protected $fillable = [
        'campo1',
        'campo2',
        '_token', // Agregar el atributo _token a la lista de fillable
    ];
}