<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Mesa;
class Reserva extends Model
{
    protected $table = 'reserva';
    protected $primaryKey = 'id';
    protected $fillable = [
        'estado_id',
        'fechaReserva',
        'name',
        'phone',
        'email',
        'hora',
        'message',
        'mesa_id',
        'user_id',
    ];

    public function mesas(){
        return $this->hasMany(Mesa::class, 'id');
    }
    public function users(){
        return $this->hasMany(User::class, 'id');
    }

}
