<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementosListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos_listas', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre');
            $table->unsignedBigInteger('tipo_lista_id')->unsigned();
            $table->foreign('tipo_lista_id')->references('id')->on('tipo_listas');

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
        Schema::dropIfExists('elementos_listas');
    }
}
