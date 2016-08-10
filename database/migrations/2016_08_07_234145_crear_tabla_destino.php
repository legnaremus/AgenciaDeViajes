<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDestino extends Migration
{
    /**
     *Catalogo de los lugares que se pueden visitar
     */
    public function up()
    {
        Schema::table('destino', function (Blueprint $table) {
            $table->increments('destino');
				$table->primary('destino');
			$table->string('nombre');
			$table->string('detalle');
        });
    }

  
    public function down()
    {
        Schema::table('destino', function (Blueprint $table) {
            //
        });
    }
}
