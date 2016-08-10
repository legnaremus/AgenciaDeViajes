<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleTour extends Migration
{
    /**
     *Sólo tiene id_tour y id_destino porque registrará todos los lugares q se visitaron en el tour
     */
    public function up()
    {
        Schema::table('detalleTour', function (Blueprint $table) {
            $table->integer('id_tour')->unsigned();
				$table->foreign('id_tour')->references('id_tour')->on('tour');
			$table->integer('id_destino')->unsigned();
				$table->foreign('id_destino')->references('id_destino')->on('destino');
        });
    }

  
    public function down()
    {
        Schema::table('detalleTour', function (Blueprint $table) {
            //
        });
    }
}
