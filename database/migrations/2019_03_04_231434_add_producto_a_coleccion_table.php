<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductoAColeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleccion_producto', function (Blueprint $table){
            $table->increments('id');
            $table->integer('producto_id')
                ->unsigned();
            $table->integer('coleccion_id')
                ->unsigned();
            $table->timestamps();
            $table->foreign('producto_id')
                ->references('id')
                ->on('producto')
                ->onDelete('cascade');
            $table->foreign('coleccion_id')
                ->references('id')
                ->on('coleccion')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coleccion_producto');
    }
}
