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
        // biblioteca maneja fechas con variable now
        $now = Carbon::now();
        DB::table('reserva')->insert([
            'id' => 1,
            'fechaReserva' => $now,
            'mesa_id' => 1,
            'user_id' => 1,
            'created_at' => $now,
            'updated_at'=>$now
        ]);

    }
}
