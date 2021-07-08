<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserva')->truncate();
        // biblioteca maneja fechas con variable now
        $now = Carbon::now();
        DB::table('reserva')->insert([
            'estado_id' => 1,
            'fechaReserva' => $now,
            'hora' => $now,
            'message' => 'esto es un comentario',
            'mesa_id' => 1,
            'name' => 'rick grimmes',
           // 'email' => 'rickgrimmes@gmial.com',
            'phone' => '+156465',
            'created_at' => $now,
            'updated_at'=>$now
        ]);

    }
}
