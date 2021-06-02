<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_identificacion');
            $table->integer('numero_identificacion');
            $table->string('nombre');
            $table->string('nombre2')->nullable();
            $table->string('apellido1');
            $table->string('apellido2')->nullable();

            $table->unsignedBigInteger('departamento_id')->unsigned();
            $table->unsignedBigInteger('municipio_id')->unsigned();
            $table->unsignedBigInteger('tipo_contribuyente_id')->unsigned();

            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('ciudades');
            $table->foreign('tipo_contribuyente_id')->references('id')->on('tipo_contribuyentes');

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
        Schema::dropIfExists('terceros');
    }
}
