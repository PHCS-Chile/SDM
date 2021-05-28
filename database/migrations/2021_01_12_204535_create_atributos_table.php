<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_interno');
            $table->int('check_primario');
            $table->int('check_ec');
            $table->int('id_primario');
            $table->string('name_categoria');
            $table->unsignedBigInteger('pauta_id')->nullable();
            $table->foreign('pauta_id')->references('id')->on('pautas')->onDelete('set null');
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
        Schema::dropIfExists('atributos');
    }
}
