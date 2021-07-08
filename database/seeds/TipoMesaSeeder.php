<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class TipoMesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('mesa')->insert([
            'id' => 1,
            'tipoMesa' => 'Mesa Familiar',
            'nombreMesa' => 'MesaIndividual',
            'message' => 'message',
            'cantidadSilla' => 4,
            'cantidadMesa'=>20,
            'created_at'=>$now,
            'updated_at'=>$now,
        ]);

    }
}
