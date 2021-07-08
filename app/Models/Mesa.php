<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    // propiedades del modelo mesa, modelo para acceder a los campos de las tablas
    protected $table = 'mesa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tipoMesa',
        'nombreMesa',
        'cantidadMesa',
        'CantidadSilla',
        
        
    ];


}
