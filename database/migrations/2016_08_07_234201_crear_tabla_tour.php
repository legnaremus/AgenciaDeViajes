<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour', function (Blueprint $table) {
			$table->increments('id_tour');
				$table->primary('id_tour');
			$table->integer('id_usuario')->unsigned();
				$table->foreign('id_usuario')->references('id_usuario')->on('users');
            $table->integer('id_guia')->unsigned();
				$table->foreign('id_guia')->references('id_guia')->on('guia');
			$table->double('precio',15,2);
			$table->integer('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour', function (Blueprint $table) {
            //
        });
    }
}
