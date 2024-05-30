<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre_usuario' => 'admin',
            'nombre' => 'Administrador',
            'apellidos' => 'Admin',
            'correo' => 'admin@example.com',
            'contrasena' => 'admin123456',
            'telefono' => '987654321',
            'esAdmin' => true,
            'imagenPerfil' => 'imagenAdmin.png',
        ]);
    }
}
