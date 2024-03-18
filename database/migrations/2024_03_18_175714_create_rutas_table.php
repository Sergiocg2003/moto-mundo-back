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
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Fecha');
            $table->string('Lugar de inicio');
            $table->string('Lugar de finalizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
};
