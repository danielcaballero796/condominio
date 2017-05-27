<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSancionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sancion', function (Blueprint $table) {
            $table->integer('idsancion');
            $table->string('descripcion');
            $table->date('fecha');
            $table->date('valor');
            $table->string('idrecibo');
            $table->integer('idvivienda');
            $table->string('tipo');
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
        Schema::dropIfExists();
    }
}
