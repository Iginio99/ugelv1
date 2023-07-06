<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resoluciones', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8);
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('nombres');
            $table->string('num_rd');
            $table->string('periodo');
            $table->string('fecha');
            $table->string('asunto');
            $table->string('proy');
            $table->string('not_oficiona');
            $table->string('not_notificador');
            $table->string('fecha_notificacion');
            $table->string('firma');
            $table->string('foto');
            $table->string('fecha_registro');
            $table->string('observacion');
            $table->unsignedBigInteger('idUsuario');
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resoluciones');
    }
};
