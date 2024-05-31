<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Obra;
use App\Models\Categoria;

use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    /**
     * Show the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarPerfil()
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Obtener los datos del usuario actualmente autenticado
            $usuario = Auth::user();
            // Pasar los datos del usuario a la vista
            return view('perfil', compact('usuario'));
        } else {
            // Redirigir al usuario a la página de inicio de sesión si no está autenticado
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para ver tu perfil.');
        }
    }

    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function actualizarPerfil(Request $request)
{
    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        // Validar los datos del formulario
        $request->validate([
            'nombre_usuario' => 'nullable|unique:usuarios|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'nombre' => 'nullable|regex:/^[a-zA-Z\s]+$/',
            'apellidos' => 'nullable|regex:/^[a-zA-Z\s]+$/',
            'correo' => 'nullable|email|unique:usuarios,correo,' . Auth::id(),
            'telefono' => 'nullable|numeric|regex:/^[0-9]+$/|unique:usuarios,telefono,' . Auth::id(),
            'contrasena' => 'required|confirmed',
        ], [
            'nombre_usuario.unique' => '- El nombre de usuario ya está en uso.',
            'nombre_usuario.regex' => '- El nombre de usuario no puede contener caracteres especiales.',
            'nombre_usuario.min' => '- El nombre de usuario debe tener al menos :min caracteres.',
            'nombre.regex' => '- El nombre no puede contener caracteres especiales ni numeros.',
            'apellidos.regex' => '- Los apellidos no puede contener caracteres especiales ni numeros.',
            'contrasena.required' => '- La contraseña es obligatoria.',
            'correo.email' => '- El correo electrónico no es válido.',
            'correo.unique' => '- El correo electrónico ya está en uso.',
            'telefono.unique' => '- El teléfono ya está en uso.',
            'telefono.regex' => '- El teléfono no puede contener caracteres especiales, espacios en blanco o letras.', 
        ]);

        // Obtener el usuario actualmente autenticado
        $usuario = Auth::user();

        // Verificar si la contraseña proporcionada es correcta
        if (!Hash::check($request->contrasena, $usuario->contrasena)) {
            return back()->withErrors([
                'contrasena' => 'La contraseña proporcionada es incorrecta.',
            ]);
        }

        // Actualizar los datos del usuario
        if ($request->filled('nombre_usuario')) {
            $usuario->nombre_usuario = $request->nombre_usuario;
        }
        if ($request->filled('nombre')) {
            $usuario->nombre = $request->nombre;
        }
        if ($request->filled('apellidos')) {
            $usuario->apellidos = $request->apellidos;
        }
        if ($request->filled('correo')) {
            $usuario->correo = $request->correo;
        }
        if ($request->filled('telefono')) {
            $usuario->telefono = $request->telefono;
        }
        // Manejar la subida de la imagen
        if ($request->hasFile('imagenPerfil')) {
            $imagenPerfil = $request->file('imagenPerfil');
            $nombre = time() . '_' . $imagenPerfil->getClientOriginalName();
            $ruta = $imagenPerfil->storeAs('assets/img/imagenesPerfil', $nombre, 'public');

            // Redimensionar la imagen antes de guardarla
            $rutaImagen = storage_path('app/public/' . $ruta);
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

        // Actualizar los datos de la sesión
        Auth::login($usuario->refresh());

        // Redirigir de vuelta al perfil con un mensaje de éxito
        return redirect()->route('perfil_vista')->with('success', 'Perfil actualizado correctamente.');
    } else {
        // Redirigir al usuario a la página de inicio de sesión si no está autenticado
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para actualizar tu perfil.');
    }
}

/**
 * Eliminar el perfil del usuario y cerrar la sesión.
 *
 * @return \Illuminate\Http\Response
 */
public function eliminarPerfil()
{
    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        // Obtener el usuario actualmente autenticado
        $usuario = Auth::user();

        // Eliminar el usuario de la base de datos
        $usuario->delete();

        // Cerrar la sesión del usuario
        Auth::logout();

        // Redirigir al usuario a la vista de índice con un mensaje de éxito
        return redirect()->route('index')->with('success', 'Perfil eliminado correctamente.');
    } else {
        // Redirigir al usuario a la página de inicio de sesión si no está autenticado
        return redirect()->route('login')->with('error', 'Debes iniciar sesión para eliminar tu perfil.');
    }
}


// VER USUARIO
public function mostrarUsuarioParticular($id)
    {


            // Obtener los detalles del usuario seleccionado
            $usuarioParticular = Usuario::findOrFail($id);
        
            // Obtener las categorías y las obras del usuario (si aplicable)
            $categorias = Categoria::all();
            $obras = $usuarioParticular->obras; // Suponiendo que hay una relación 'obras' en el modelo Usuario
        
            // Devolver la vista con los datos del usuario
            return view('verUsuarioParticular', compact('usuarioParticular', 'categorias', 'obras'));
        

    }




}
?>
