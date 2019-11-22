<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateprediosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('referencia');
            $table->string('area');
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('predios');
    }
}
