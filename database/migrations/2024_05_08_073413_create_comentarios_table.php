<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('contenido');
            $table->unsignedTinyInteger('valoracion')->nullable()->default(null);
            $table->foreignId('id_comentario_padre')->nullable()->constrained('comentarios')->onDelete('cascade');
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('id_obra')->constrained('obras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
}


