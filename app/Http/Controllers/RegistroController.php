<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class RegistroController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('registroForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearUsuario(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_usuario' => 'required|unique:usuarios|min:3|regex:/^[a-zA-Z0-9]+$/',
            'nombre' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'apellidos' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'contrasena' => 'required|min:6',
            'correo' => 'required|email|unique:usuarios',
            'telefono' => 'nullable|numeric|unique:usuarios|regex:/^[a-zA-Z0-9]+$/',
            'imagenPerfil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nombre_usuario.required' => '- El nombre de usuario es obligatorio.',
            'nombre_usuario.unique' => '- El nombre de usuario ya está en uso.',
            'nombre_usuario.min' => '- El nombre de usuario debe tener al menos :min caracteres.',
            'nombre_usuario.regex' => '- El nombre de usuario no puede contener caracteres especiales o espacios en blanco.',
            'nombre.required' => '- El nombre es obligatorio.',
            'apellidos.required' => '- Los apellidos son obligatorios.',
            'apellidos.regex' => '- Los apellidos no pueden contener caracteres especiales o espacios en blanco.',
            'contrasena.required' => '- La contraseña es obligatoria.',
            'contrasena.min' => '- La contraseña debe tener al menos :min caracteres.',
            'correo.required' => '- El correo electrónico es obligatorio.',
            'correo.email' => '- El correo electrónico no es válido.',
            'correo.unique' => '- El correo electrónico ya está en uso.',
            'telefono.numeric' => '- El teléfono debe ser un valor numérico.',
            'telefono.unique' => '- El teléfono ya está en uso.',
            'telefono.regex' => '- El teléfono no puede contener caracteres especiales o espacios en blanco.',
            'imagenPerfil.required' => '- La imagen de perfil es obligatoria.',
            'imagenPerfil.image' => '- El archivo debe ser una imagen.',
            'imagenPerfil.mimes' => '- El archivo debe ser de tipo: jpeg, png, jpg, gif.',
            'imagenPerfil.max' => '- El tamaño máximo del archivo es de :max kilobytes.',
        ]);

        try {

            // Verificar si el nombre de usuario ya existe
        $nombreUsuarioExistente = Usuario::where('nombre_usuario', $request->input('nombre_usuario'))->exists();

        // Verificar si el correo electrónico ya existe
        $correoExistente = Usuario::where('correo', $request->input('correo'))->exists();

        if ($nombreUsuarioExistente) {
            return redirect()->back()->with('error', 'El nombre de usuario ya está en uso.');
        }

        if ($correoExistente) {
            return redirect()->back()->with('error', 'El correo electrónico ya está en uso.');
        }
            // Crear un nuevo usuario con los datos del formulario
            $usuario = new Usuario();
            $usuario->nombre_usuario = $request->input('nombre_usuario');
            $usuario->nombre = $request->input('nombre');
            $usuario->apellidos = $request->input('apellidos');
            $usuario->contrasena = $request->input('contrasena');
            $usuario->correo = $request->input('correo');
            $usuario->telefono = $request->input('telefono');

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

            // Autenticar al usuario y redirigir
            Auth::login($usuario);
            return redirect()->route('index')->with('success', 'Usuario registrado exitosamente.');

        } catch (\Exception $e) {
            // Manejar el error e imprimir el mensaje de error
            return redirect()->back()->with('error', 'Error al registrar el usuario. Por favor, inténtelo de nuevo.');
        }
    }
}
