<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuota', function (Blueprint $table) {
            $table->increments('idcuota')->unique();
            $table->string('descripcion');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->double('valor');
            $table->integer('idrecibo');
            $table->integer('idvivienda');
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
