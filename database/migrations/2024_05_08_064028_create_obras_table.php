<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo')->unique();
            $table->text('descripcion');
            $table->string('imagen');
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->unsignedBigInteger('subcategoria_id')->constrained('subcategorias')->onDelete('cascade');
            $table->string('autor');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obras');
    }
};
