<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;


class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // En el método run()
        Usuario::create([
            'nombre_usuario' => 'nereaUser',
            'nombre' => 'Nerea',
            'apellidos' => 'Garcia Lopez',
            'correo' => 'nerea@example.com',
            'contrasena' => '123456789',
            'telefono' => '664364675',
            'esAdmin' => false,
            'imagenPerfil' => 'assets/img/imagenesPerfil/imagen_prueba1.jpg',
        ]);
        Usuario::create([
            'nombre_usuario' => 'marcosUser',
            'nombre' => 'Marcos',
            'apellidos' => 'Sanches Perez',
            'correo' => 'marcos@example.com',
            'contrasena' => '123456789',
            'telefono' => '689543024',
            'esAdmin' => false,
            'imagenPerfil' => 'imagen_prueba2.jpg',
        ]);
        Usuario::create([
            'nombre_usuario' => 'lolaUser',
            'nombre' => 'Lola',
            'apellidos' => 'Pacheco Mar',
            'correo' => 'lola@example.com',
            'contrasena' => '123456789',
            'telefono' => '632745893',
            'esAdmin' => false,
            'imagenPerfil' => 'imagen_prueba3.jpg',
        ]);
        Usuario::create([
            'nombre_usuario' => 'juanUser',
            'nombre' => 'Juan Pablo',
            'apellidos' => 'Dominguez Modzelewski',
            'correo' => 'juan@example.com',
            'contrasena' => '123456789',
            'telefono' => '609392857',
            'esAdmin' => false,
            'imagenPerfil' => 'imagen_prueba4.jpg',
        ]);
        Usuario::create([
            'nombre_usuario' => 'rocioUser',
            'nombre' => 'Rocio',
            'apellidos' => 'Garrido Pereira',
            'correo' => 'rocio@example.com',
            'contrasena' => '123456789',
            'telefono' => '609304902',
            'esAdmin' => false,
            'imagenPerfil' => 'imagen_prueba5.jpg',
        ]);
        Usuario::create([
            'nombre_usuario' => 'davidUser',
            'nombre' => 'David Alejandro',
            'apellidos' => 'Marquez Olmos',
            'correo' => 'david@example.com',
            'contrasena' => '123456789',
            'telefono' => '674839503',
            'esAdmin' => false,
            'imagenPerfil' => 'imagen_prueba6.jpg',
        ]);

    }
}
