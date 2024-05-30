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
            'nombre_usuario' => 'nullable|unique:usuarios|min:3|regex:/^[a-zA-Z0-9]+$/',
            'nombre' => 'nullable|regex:/^[a-zA-Z0-9]+$/',
            'apellidos' => 'nullable|regex:/^[a-zA-Z0-9]+$/',
            'correo' => 'nullable|email|unique:usuarios,correo,' . Auth::id(),
            'telefono' => 'nullable|numeric|unique:usuarios,telefono,' . Auth::id(),
            'contrasena' => 'required|confirmed',
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
