<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->string('Modelo');
            $table->string('Imagen');
            $table->integer('Precio');
            $table->string('CentimetrosCubicos');
            $table->string('TipoMotor');
            $table->integer('Caballos');
            $table->string('Transmision');
            $table->string('CapCombustible');
            $table->string('Peso')->nullable();
            $table->unsignedBigInteger('Usuario_idUsuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('motos');
    }
};
