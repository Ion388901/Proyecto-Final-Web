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
        Schema::table('colecciones', function (Blueprint $table){
            $table->integer('producto_id')
                ->unsigned();
            $table->foreign('producto_id')
                ->references('id')
                ->on('producto')
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
        Schema::table('colecciones', function (Blueprint $table){
            $table->dropForeign(['producto_id']);
            $table->dropColumn('producto_id');
        });
    }
}
