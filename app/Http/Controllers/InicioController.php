<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class InicioController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function iniciar_sesion(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre_usuario' => 'required',
        'contrasena' => 'required|min:6',
    ], [
        'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
        'contrasena.required' => 'La contraseña es obligatoria.',
        'contrasena.min' => 'La contraseña debe tener al menos :min caracteres.',
    ]);

    $user = Usuario::where('nombre_usuario', $request->nombre_usuario)->first();

if (!$user) {
    // El usuario no existe
    return redirect()->back()->withInput()->withErrors(['nombre_usuario' => 'El nombre de usuario no esta registrado.']);

}

// Verificar si la contraseña es correcta
if (Hash::check($request->contrasena, $user->contrasena)) {
    // Autenticación exitosa, inicia sesión
    Auth::login($user);

    // Verificar si la contraseña necesita ser rehasheada
    if (Hash::needsRehash($user->contrasena)) {
        $user->contrasena = Hash::make($request->input('contrasena'));
        $user->save();
    }

    // Iniciar sesión y redirigir al inicio
    session()->put($user->getAttributes());
    return redirect()->intended('/')->with('success', '¡Inicio de sesión exitoso!');
} else {
    // Contraseña incorrecta
    return redirect()->back()->withInput()->withErrors(['contrasena' => 'Contraseña incorrecta']);
}
}


    /**
     * Logout the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cerrarSesion(Request $request)
    {
        Auth::logout(); // Cierra la sesión actual del usuario

        $request->session()->invalidate(); // Invalida la sesión existente
        $request->session()->regenerateToken(); // Genera un nuevo token de sesión

        return redirect()->route('index')->with('success', 'Sesión cerrada correctamente.');
    }
}
