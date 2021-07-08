<?php

namespace App\Http\Controllers;

use App\Models\InventarioMesa;
use App\Models\Reserva;
use Illuminate\Http\Request;

class DisponibilidadMesaController extends Controller
{
    public function index(Request $request)
    {
        $fecha = $request->input('fecha_reserva');
        $hora = $request->input('hora_reserva');

        $misMesas = InventarioMesa::query()->get();
        $reservas = Reserva::query()
            ->where('fechaReserva', $fecha)
            ->when($hora, function($query) use ($hora) {
                return $query->where('hora', $hora);
            })
            ->get();

        $mesasDisponibles = $misMesas->transform(function($mesa) use ($reservas) {
            $tipoMesaReservada = $reservas->where('mesa_id', $mesa->tipo_mesa_id)->count() ?? 0;
            $mesa->disponibles = $mesa->cantidad - $tipoMesaReservada;
            return $mesa;
        });

        return response()->json($mesasDisponibles);
    }
}
