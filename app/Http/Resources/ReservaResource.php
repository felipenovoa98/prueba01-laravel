<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return [
            'id' => $this->id,
            'estado_id' => $this->estado_id,
            'fechaReserva' => $this->fechaReserva,
            'name' => $this->name,
            'phone' => $this->phone,
            'fecha'=> $this->fecha,
            'hora' => $this->hora,
            'email' => $this->email,
            'mesa' => $this->mesa_id,
            'users' => $this->user_id,
        ];
    }
}
