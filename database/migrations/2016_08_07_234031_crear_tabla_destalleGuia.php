<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleGuia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destalleGuia', function (Blueprint $table) {
            $table->integer('id_guia')->unsigned();
				$table->foreign('id_guia')->references('id_guia')->on('guia'); /**llave foranea*/
            $table->string('comentario');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalleGuia', function (Blueprint $table) {
            //
        });
    }
}
