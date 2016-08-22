<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dep')->unsigned();
            $table->foreign('id_dep')->references('id')->on('departamentos')->onDelete('cascade');
            $table->integer('id_prov')->unsigned();
            $table->foreign('id_prov')->references('id')->on('provincias')->onDelete('cascade');
            $table->string('descripcion')->nullable(false);
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
        Schema::drop('distritos');
    }
}
