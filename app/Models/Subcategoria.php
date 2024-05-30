<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'tema', 'material', 'epoca', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
