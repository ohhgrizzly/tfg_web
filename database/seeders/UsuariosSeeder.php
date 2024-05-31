<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array con los datos de los usuarios y las imágenes de perfil predefinidas
        $usuarios = [
            [
                'nombre_usuario' => 'nereaUser',
                'nombre' => 'Nerea',
                'apellidos' => 'Garcia Lopez',
                'correo' => 'nerea@example.com',
                'contrasena' => '123456789',
                'telefono' => '664364675',
                'esAdmin' => false,
                'imagenPerfil' => 'imagen_prueba1.jpg', // Ruta de la primera imagen
            ],
            [
                'nombre_usuario' => 'marcosUser',
                'nombre' => 'Marcos',
                'apellidos' => 'Sanches Perez',
                'correo' => 'marcos@example.com',
                'contrasena' => '123456789',
                'telefono' => '689543024',
                'esAdmin' => false,
                'imagenPerfil' => 'imagen_prueba2.jpg', // Ruta de la segunda imagen
            ],
            [
                'nombre_usuario' => 'lolaUser',
                'nombre' => 'Lola',
                'apellidos' => 'Pacheco Mar',
                'correo' => 'lola@example.com',
                'contrasena' => '123456789',
                'telefono' => '632745893',
                'esAdmin' => false,
                'imagenPerfil' => 'imagen_prueba3.jpg', // Ruta de la tercera imagen
            ],
            [
                'nombre_usuario' => 'juanUser',
                'nombre' => 'Juan Pablo',
                'apellidos' => 'Dominguez Modzelewski',
                'correo' => 'juan@example.com',
                'contrasena' => '123456789',
                'telefono' => '609392857',
                'esAdmin' => false,
                'imagenPerfil' => 'imagen_prueba4.jpg', // Ruta de la cuarta imagen
            ],
            [
                'nombre_usuario' => 'rocioUser',
                'nombre' => 'Rocio',
                'apellidos' => 'Garrido Pereira',
                'correo' => 'rocio@example.com',
                'contrasena' => '123456789',
                'telefono' => '609304902',
                'esAdmin' => false,
                'imagenPerfil' => 'imagen_prueba5.jpg', // Ruta de la quinta imagen
            ],
            [
                'nombre_usuario' => 'davidUser',
                'nombre' => 'David Alejandro',
                'apellidos' => 'Marquez Olmos',
                'correo' => 'david@example.com',
                'contrasena' => '123456789',
                'telefono' => '674839503',
                'esAdmin' => false,
                'imagenPerfil' => 'imagen_prueba6.jpg', // Ruta de la sexta imagen
            ],
        ];

        // Iterar sobre cada usuario y crearlo con sus respectivas imágenes
        foreach ($usuarios as $usuarioData) {
            $usuario = new Usuario($usuarioData);

            // Copiamos la imagen de perfil predefinida al directorio de almacenamiento
            $rutaImagenPredefinida = public_path('assets/img/imagenesPerfil/' . $usuarioData['imagenPerfil']); // Ruta completa de la imagen
            $nombreImagen = time() . '_' . $usuarioData['imagenPerfil']; // Nombre único para la imagen
            $rutaDestino = storage_path('app/public/assets/img/imagenesPerfil/' . $nombreImagen);
            copy($rutaImagenPredefinida, $rutaDestino);

            // Asignamos la imagen de perfil al usuario
            $usuario->imagenPerfil = $nombreImagen;
            $usuario->save();
        }
    }
}
