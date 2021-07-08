<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('estado_id');
            $table->date('fechaReserva');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->time('hora');
            $table->string('message');
            $table->foreignId('mesa_id')->constained('mesa');
          //  $table->foreignId('user_id')->constained('users');
            $table->timestamps();
            //debe ir en plural las tablas de BD
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
