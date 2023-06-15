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
        Schema::create('actas', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8);
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('nombres');
            $table->string('tipo_doc');
            $table->string('subtipo_doc');
            $table->string('numero');
            $table->string('periodo1');
            $table->string('fecha_doc');
            $table->string('insitucion');
            $table->string('distrito');
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
        Schema::dropIfExists('actas');
    }
};
