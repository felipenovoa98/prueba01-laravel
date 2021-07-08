<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarioMesa extends Model
{
    protected $table = 'inventario_mesas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'restaurant_id',
        'tipo_mesa_id',
        'cantidad',
    ];
}
