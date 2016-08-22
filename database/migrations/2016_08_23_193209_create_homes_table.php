<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ancho');
            $table->integer('largo');
            $table->char('pisos',2);
            $table->char('baños',2);
            $table->char('cuartos',2);
            $table->char('cocina',2);
            $table->string('descripcion');
            $table->double('precio',15,2);

            $table->integer('id_dep')->unsigned();
            $table->foreign('id_dep')->references('id')->on('departamentos')->onDelete('cascade');

            $table->integer('id_prov')->unsigned();
            $table->foreign('id_prov')->references('id')->on('provincias')->onDelete('cascade');

            $table->integer('id_dist')->unsigned();
            $table->foreign('id_dist')->references('id')->on('distritos')->onDelete('cascade');

            $table->integer('id_state')->unsigned();
            $table->foreign('id_state')->references('id')->on('states')->onDelete('cascade');







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
        Schema::drop('homes');
    }
}
