<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabla "categorias"
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('formato')->unique();
            $table->timestamps();
        });

        // Tabla "subcategorias"
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->unique();
            $table->string('tema');
            $table->string('material');
            $table->string('epoca');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subcategorias');
        Schema::dropIfExists('categorias');
    }
};
