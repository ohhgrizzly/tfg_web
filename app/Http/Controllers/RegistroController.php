<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function verFormulario(): View
    {
        return view('registroForm');
    }

    public function crearUsuario(Request $request)
    {
    
            // Crear un nuevo usuario con los datos del formulario
            $usuario = new Usuario();
            $usuario->nombre_usuario = $request->input('nombre_usuario');
            $usuario->nombre = $request->input('nombre');
            $usuario->apellidos = $request->input('apellidos');
            $usuario->contrasena = $request->input('contrasena');
            $usuario->correo = $request->input('correo');
            $usuario->telefono = $request->input('telefono');

            dd( $usuario->nombre_usuario);
            // Manejar la subida de la imagen
            if ($request->hasFile('imagenPerfil')) {
                $imagenPerfil = $request->file('imagenPerfil');
                $nombre = time().'.'.$imagenPerfil->getClientOriginalExtension();
                $destino = public_path('/assets/img/imagenesPerfil');
                $imagenPerfil->move($destino, $nombre);

                // Redimensionar la imagen antes de guardarla
                $rutaImagen = public_path('/assets/img/imagenesPerfil/'.$nombre);
                list($ancho, $alto) = getimagesize($rutaImagen);
                $nuevoAncho = 600; // Ajusta el ancho deseado
                $nuevoAlto = 600; // Ajusta el alto deseado
                $imagenRedimensionada = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                // Crear imagen según la extensión
                $extension = $imagenPerfil->getClientOriginalExtension();
                if ($extension === 'jpeg' || $extension === 'jpg') {
                    $imagenOriginal = imagecreatefromjpeg($rutaImagen);
                } elseif ($extension === 'png') {
                    $imagenOriginal = imagecreatefrompng($rutaImagen);
                }

                // Redimensionar la imagen
                if ($imagenOriginal) {
                    imagecopyresampled($imagenRedimensionada, $imagenOriginal, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    // Guardar la imagen redimensionada
                    if ($extension === 'jpeg' || $extension === 'jpg') {
                        imagejpeg($imagenRedimensionada, $rutaImagen, 100);
                    } elseif ($extension === 'png') {
                        imagepng($imagenRedimensionada, $rutaImagen, 9);
                    }

                    $usuario->imagenPerfil = $nombre;
                }
            }

            $usuario->save();
            dd($usuario);

            Auth::login($usuario);
            return redirect()->route('index')->with('success', 'Usuario registrado exitosamente.');
    }
}
?>
