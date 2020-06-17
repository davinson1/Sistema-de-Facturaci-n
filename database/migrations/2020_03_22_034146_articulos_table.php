<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articulos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('id_tipo_articulo');
        $table->unsignedBigInteger('id_proveedor');
        $table->unsignedBigInteger('id_porcentaje');
        
        $table->text('nombre');
        $table->text('especificaciones');
        $table->integer('valor_compra');
        $table->integer('valor_envio');
        $table->integer('porcentaje_minimo');
        $table->text('codigo_barras');
        $table->string('foto')->nullable();

        $table->timestamps();

        $table->foreign('id_tipo_articulo')->references('id')->on('tipo_articulo');
        $table->foreign('id_proveedor')->references('id')->on('proveedor');
        $table->foreign('id_porcentaje')->references('id')->on('porcentaje');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
