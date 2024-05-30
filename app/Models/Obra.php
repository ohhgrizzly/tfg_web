<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;

    protected $table = 'obras';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen', 'id_usuario', 'subcategoria_id'];

public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class);
    }

public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_obra');
    }


    
}
