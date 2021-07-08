<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoMesa extends Model
{
    protected $table = 'tipo_mesas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'cantidad',
        'descripcion',
    ];
}
