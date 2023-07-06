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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
       
            $table->string('ape_paterno');
            $table->string('ape_materno');
            $table->string('sexo');
            $table->string('lugar_nacimiento');
            $table->string('fecha_nacimiento');
            $table->string('celular');
            $table->string('tipo_persona');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('password');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('direccion');
            $table->string('role');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
