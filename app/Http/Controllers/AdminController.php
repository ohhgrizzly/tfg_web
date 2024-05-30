<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Subcategoria; 
use App\Models\Obra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function mostrarAdmins()
    {
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
            // Recoger usuarios que son administradores
            $adminUsuarios = Usuario::where('esAdmin', 1)->get();

            // Devolver la vista con los datos de los administradores
            return view('admin/vistaAdmin', compact('adminUsuarios'));
        }
    }

    public function mostrarUsuarios()
    {
        // Obtener el usuario actualmente autenticado
        $usuarioActual = Auth::user();

        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }
        else {
            // Recoger todos los usuarios excluyendo al usuario actualmente autenticado
            $usuarios = Usuario::where('id', '!=', $usuarioActual->id)
            ->where('esAdmin', '!=', 1)
            ->get();
            // Devolver la vista con los datos de los usuarios
            return view('admin/verUsuarios', compact('usuarios'));
        }
    }

    public function mostrarObrasTotales()
    {
        // Obtener el usuario actualmente autenticado
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        $obrasCategorizadas = Obra::with(['subcategoria.categoria', 'usuario'])->get();
        $categorias = Categoria::all();
        return view('admin/verObrasTotales', compact('obrasCategorizadas', 'categorias'),);
    }
    }

    public function eliminarObra($id)
{
    // Encuentra la obra
    $obra = Obra::findOrFail($id);

    // Elimina la obra
    $obra->delete();

    // Redirecciona de vuelta a la página de ver obras
    return redirect()->route('verObrasTotales')->with('success', '¡La obra ha sido eliminada correctamente!');
}

public function editarObraAdmin($id)
{
    // Obtener el usuario actualmente autenticado
    $usuarioActual = Auth::user();
    if ($usuarioActual->esAdmin != 1) {
        abort(403, 'Acceso denegado');
    }else{
    $obra = Obra::findOrFail($id);
    $categorias = Categoria::all();
    return view('admin.editarObra', compact('obra', 'categorias'));
}
}

public function actualizarObra(Request $request, $id)
    {
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'nullable',
            'descripcion' => 'nullable',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria' => 'nullable',
            'subcategoria' => 'nullable',
            'autor' => 'nullable',
            
        ], [
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.mimes' => 'La imagen debe tener un formato válido (jpeg, png, jpg, gif).',
            'imagen.max' => 'La imagen no debe superar los 2048 kilobytes.',
            
        ]);
        
        
    // Busca la obra a actualizar
    $obraActualizar = Obra::findOrFail($id);
        

        // Actualizar los datos del usuario
        if ($request->filled('titulo')) {
            $obraActualizar->titulo = $request->titulo;
        }
        if ($request->filled('descripcion')) {
            $obraActualizar->descripcion = $request->descripcion;
        }
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('/assets/img/imagenesObras');
            $imagen->move($destino, $nombre);
        
            // Redimensionar la imagen antes de guardarla
            $rutaImagen = public_path('/assets/img/imagenesObras/'.$nombre);
            list($ancho, $alto) = getimagesize($rutaImagen);
            $nuevoAncho = 600; // Ajusta el ancho deseado
            $nuevoAlto = 600; // Ajusta el alto deseado
            $imagenRedimensionada = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
        
            // Crear imagen según la extensión
            $extension = $imagen->getClientOriginalExtension();
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
        
                // Asignar el nombre de la imagen a la obra creada
                $obraActualizar->imagen = $nombre;
            }
        }
        if ($request->filled('subcategoria')) {
            $obraActualizar->subcategoria_id = $request->input('subcategoria');
        }
        if ($request->filled('autor')) {
            $obraActualizar->autor = $request->autor;
        }

        $obraActualizar->save();

        // Autenticar al usuario y redirigir
        return redirect()->route('verObrasTotales')->with('success', 'Obra registrada exitosamente.');
    }
    }


    public function mostrarUsuario($id)
    {
        $usuarioActual = Auth::user();

        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
            // Obtener los detalles del usuario seleccionado
            $usuario = Usuario::findOrFail($id);
        
            // Obtener las categorías y las obras del usuario (si aplicable)
            $categorias = Categoria::all();
            $obras = $usuario->obras; // Suponiendo que hay una relación 'obras' en el modelo Usuario
            
        
            // Devolver la vista con los datos del usuario
            return view('admin.verUsuarioDetalle', compact('usuario', 'categorias', 'obras'));
        }

    }

    public function actualizarUsuario(Request $request, $id)
    {   
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        $usuario = Usuario::findOrFail($id);
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->correo = $request->input('correo');
        $usuario->telefono = $request->input('telefono');

        
        // Si se proporciona una nueva contraseña, actualizarla
        if ($request->filled('contrasena')) {
            $usuario->contrasena = $request->input('contrasena');
        }

        // Actualizar los datos del usuario
        if ($request->filled('nombre_usuario')) {
            $usuario->nombre_usuario = $request->input('nombre_usuario');
        }
        if ($request->filled('nombre')) {
            $usuario->nombre = $request->input('nombre');
        }
        if ($request->filled('apellidos')) {
            $usuario->apellidos = $request->input('apellidos');
        }
        if ($request->filled('correo')) {
            $usuario->correo = $request->input('correo');
        }
        if ($request->filled('telefono')) {
            $usuario->telefono = $request->input('telefono');
        }

        $usuario->save();
        return redirect()->route('verUsuarios')->with('success', 'Usuario actualizado con éxito');
        }
    }

    public function eliminarUsuario($id)
    {
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        // Buscar el usuario por su ID
        $usuario = Usuario::findOrFail($id);

        // Eliminar el usuario
        $usuario->delete();

        // Redireccionar a la página de usuarios o a donde desees después de eliminar
        return redirect()->route('verUsuarios')->with('success', 'Usuario eliminado correctamente');
    }
}


    public function hacerAdmin($id)
    {
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        // Buscar el usuario por su ID
        $usuario = Usuario::findOrFail($id);

        // Actualizar el campo esAdmin a 1
        DB::table('usuarios')->where('id', $usuario->id)->update(['esAdmin' => 1]);

        // Redireccionar a la página de detalles del usuario
        return redirect()->route('verUsuarios')->with('success', 'El usuario ahora es administrador');
    }
}
/*


*/
// Función para mostrar todas las obras
public function obrasSubirCategoria(){
        $usuarioActual = Auth::user();
            if ($usuarioActual->esAdmin != 1) {
                abort(403, 'Acceso denegado');
            }else{

        $usuario = Auth::user();
        $categorias = Categoria::all();
        // Obtener todas las obras asociadas al usuario
        $obras = $usuario->obras;

        // Pasar los datos del usuario y sus obras a la vista
        return view('/admin/subirCategorias', compact('usuario', 'obras', 'categorias'));
    }
}

public function verificarCategoria(Request $request)
{
    $usuarioActual = Auth::user();
    if ($usuarioActual->esAdmin != 1) {
        abort(403, 'Acceso denegado');
    }

    $request->validate([
        'formato' => 'required|max:255',
    ]);

    $formato = $request->input('formato');

    // Verificar si la categoría ya existe en la base de datos
    $categoriaExistente = Categoria::where('formato', $formato)->exists();

    // Devolver la respuesta adecuada en formato JSON
    return response()->json(['exists' => $categoriaExistente]);
}


    public function crearCategoria(Request $request)
    {
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        $request->validate([
            'formato' => 'required|max:255',
        ]);

        $categoria = Categoria::create(['formato' => $request->input('formato')]);

        return response()->json(['success' => true, 'message' => 'Categoría creada con éxito']);
    }
}

    public function crearSubcategoria(Request $request)
{
    $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
    $request->validate([
        'categoria' => 'required|exists:categorias,id',
        'tema' => 'required|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
        'material' => 'required|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
        'tipo' => 'required|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
        'epoca' => 'required|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
    ], [
        'categoria.required' => '- La categoria es obligatorio.',
        'tema.required' => '- El tema es obligatorio.',
        'tema.regex' => '- El tema no puede contener caracteres especiales.',
        'tipo.min' => '- La contraseña debe tener al menos :min caracteres.',
        'material.required' => '- El material es obligatorios.',
        'material.regex' => '- El material no puede contener caracteres especiales.',
        'tipo.min' => '- La contraseña debe tener al menos :min caracteres.',
        'tipo.required' => '- El tipo es obligatorio.',
        'tipo.min' => '- La contraseña debe tener al menos :min caracteres.',
        'tipo.regex' => '- El tipo no puede contener caracteres especiales.',
        'epoca.required' => '- La epoca es obligatoria.',
        'epoca.regex' => '- La epoca no puede contener caracteres especiales.',
        'epoca.min' => '- La epoca debe tener al menos :min caracteres.',
    ]);

    // Verificar si ya existe una subcategoría con los mismos detalles en la categoría seleccionada
    $subcategoriaExistente = Subcategoria::where('categoria_id', $request->input('categoria'))
                                          ->where('tema', $request->input('tema'))
                                          ->where('material', $request->input('material'))
                                          ->where('tipo', $request->input('tipo'))
                                          ->where('epoca', $request->input('epoca'))
                                          ->first();

    if ($subcategoriaExistente) {
        return response()->json(['error' => 'Ya existe una subcategoría con estos detalles en esta categoría'], 422);
    }

    // Si no existe, crear la subcategoría
    $subcategoria = new Subcategoria();
    $subcategoria->categoria_id = $request->input('categoria');
    $subcategoria->tema = $request->input('tema');
    $subcategoria->material = $request->input('material');
    $subcategoria->tipo = $request->input('tipo');
    $subcategoria->epoca = $request->input('epoca');
    $subcategoria->save();

    return redirect()->route('index')->with('success', 'Subcategoria creada con éxito');
}
}

    public function verificarExistenciaCategoria(Request $request){
        $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
        $formato = $request->input('formato');
        $categoria = Categoria::where('formato', $formato)->first();

        if ($categoria) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}

public function eliminarSeleccionados(Request $request)
{
    $usuarioActual = Auth::user();
        if ($usuarioActual->esAdmin != 1) {
            abort(403, 'Acceso denegado');
        }else{
    $seleccionados = $request->input('seleccionados', []);

    foreach ($seleccionados as $seleccionado) {
        list($tipo, $id) = explode('_', $seleccionado);
        if ($tipo === 'categoria') {
            Categoria::findOrFail($id)->delete();
        } elseif ($tipo === 'subcategoria') {
            Subcategoria::findOrFail($id)->delete();
        }
    }

    return redirect()->back()->with('success', 'Elementos seleccionados eliminados con éxito.');
}
}


}
