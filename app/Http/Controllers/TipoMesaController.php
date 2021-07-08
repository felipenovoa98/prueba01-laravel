<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoMesaController extends Controller
{
    public function index(){
        $reserva = Reserva::all();
        return ReservaResource::collection($reserva);

    }
    public function store(Request $request)
    {
        Reserva::create($request->all());
        return ['created' => true];
    }

    public function show($id)
    {
        return Reserva::find($id);
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::find($id);
        $reserva->update($request->all());
        return ['updated' => true];
    }

    public function destroy($id)
    {
        Reserva::destroy($id);
        return ['deleted' => true];
    }

}
