<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrucelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrucel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->integer('id_producto');
            $table->integer('id_producto2');
            $table->integer('id_producto3');
            $table->decimal('precio_oferta',9,2);//centavos
            $table->string('imagen_fondo');
            $table->string('imagen1');
            $table->string('imagen2');
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
        Schema::dropIfExists('carrucel');
    }
}
