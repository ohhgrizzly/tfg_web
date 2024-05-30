<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido',
        'valoracion',
        'id_comentario_padre',
        'id_usuario',
        'id_obra',
    ];

    // Relación con el usuario que hizo el comentario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    // Relación con la obra a la que pertenece el comentario
    public function obra()
    {
        return $this->belongsTo(Obra::class, 'id_obra');
    }

    public function respuestas()
{
    return $this->hasMany(Comentario::class, 'id_comentario_padre');
}


}

