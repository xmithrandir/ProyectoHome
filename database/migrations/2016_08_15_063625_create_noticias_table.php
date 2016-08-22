<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('volanta')->nullable(false);
            $table->string('titulo')->nullable(false);
            $table->mediumText('copete')->nullable(false);
            $table->mediumText('cuerpo')->nullable(false);
            $table->date('fecha')->nullable(false);
            $table->string('imagen')->nullable(false);
            $table->mediumText('video')->nullable(false);

            $table->integer('descripcion')->unsigned();
            $table->foreign('descripcion')->references('id')->on('descripcions')->onDelete('cascade');

            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('users')->onDelete('cascade');

            $table->integer('estado')->unsigned();
            $table->foreign('estado')->references('id')->on('estados')->onDelete('cascade');

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
        Schema::drop('noticias');
    }
}
