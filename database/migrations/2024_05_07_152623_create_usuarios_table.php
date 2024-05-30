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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('nombre_usuario')->unique();
			$table->string('nombre');
			$table->string('apellidos');
			$table->string('contrasena');
			$table->string('correo');
            $table->unsignedBigInteger('telefono')->unique()->nullable();
            $table->boolean('esAdmin')->default(0);
            $table->string('imagenPerfil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
