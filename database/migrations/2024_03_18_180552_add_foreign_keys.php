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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('Grupo_idGrupo')->references('id')->on('grupos')->onDelete('cascade');
        });

        Schema::table('motos', function (Blueprint $table) {
            $table->foreign('Usuario_idUsuario')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('grupo_hace_quedadas', function (Blueprint $table) {
            $table->foreign('Grupo_idGrupo')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('Quedadas_idQuedadas')->references('id')->on('quedadas')->onDelete('cascade');
        });

        Schema::table('grupo_hace_rutas', function (Blueprint $table) {
            $table->foreign('Grupo_idGrupo')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('Ruta_idRuta')->references('id')->on('rutas')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['Grupo_idGrupo']);
        });

        Schema::table('motos', function (Blueprint $table) {
            $table->dropForeign(['Usuario_idUsuario']);
        });

        Schema::table('grupo_hace_quedadas', function (Blueprint $table) {
            $table->dropForeign(['Grupo_idGrupo', 'Quedadas_idQuedadas']);
        });

        Schema::table('grupo_hace_rutas', function (Blueprint $table) {
            $table->dropForeign(['Grupo_idGrupo', 'Ruta_idRuta']);
        });
    }
};
