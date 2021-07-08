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
        DB::table('mesa')->truncate();
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

        DB::table('tipo_mesas')->truncate();
        $now = Carbon::now();
        DB::table('tipo_mesas')->insert([
            'nombre' => 'Mesa Small 1',
            'cantidad' => 1,
        ]);

        DB::table('tipo_mesas')->insert([
            'nombre' => 'Mesa Small 2',
            'cantidad' => 2,
        ]);

        DB::table('tipo_mesas')->insert([
            'nombre' => 'Mesa grande 6',
            'cantidad' => 6,
        ]);

    }
}
