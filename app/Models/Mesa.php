<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tipoMesa',
        'cantidadMesa',
        'CantidadSilla',
        
    ];


}
