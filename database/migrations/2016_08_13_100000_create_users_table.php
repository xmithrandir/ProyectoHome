<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20)->nullable(false);
            $table->string('apellidop',20)->nullable(false);
            $table->string('apellidom',20)->nullable(false);
            $table->string('documento',20)->unique();
            $table->string('direccion',30);
            $table->string('email',50)->unique();
            $table->string('telefono',12);
            $table->string('celular',9)->unique();

            $table->integer('permiso')->unsigned();
            $table->foreign('permiso')->references('id')->on('permisos')->onDelete('cascade');

            $table->integer('estado')->unsigned();
            $table->foreign('estado')->references('id')->on('estados')->onDelete('cascade');

            $table->string('password');

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
        Schema::drop('users');
    }
}
