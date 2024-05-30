<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $hidden = ['contrasena'];

    protected $fillable = [
        'nombre_usuario', 
        'nombre', 
        'apellidos', 
        'correo', 
        'telefono',
        'imagenPerfil',
    ];

    // Relaciones con otros modelos
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_usuario');
    }

    public function obras()
    {
        return $this->hasMany(Obra::class, 'id_usuario');
    }

    // Mutador para el campo 'nombre_usuario'
    public function setNombreUsuarioAttribute($value)
    {
        $this->attributes['nombre_usuario'] = strtolower($value);
    }

    // Métodos necesarios para la autenticación
    public function setContrasenaAttribute($pwd)
    {
        $this->attributes['contrasena'] = bcrypt($pwd);
    }

    public function getAuthPassword()
    {
        return $this->attributes['contrasena'];
    }

    public function getAuthIdentifierName()
    {
        return 'nombre_usuario';
    }

    public function getAuthIdentifier()
    {
        return $this->nombre_usuario;
    }
}
