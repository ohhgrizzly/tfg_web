<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Obra;
use App\Models\Categoria;
use App\Models\Comentario;
use Illuminate\Http\Request;

use PDF;
use Intervention\Image\ImageManagerStatic as Image;


class ObraController extends Controller
{

    public function crearObra(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|unique:obras|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'descripcion' => 'required|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria' => 'required',
            'subcategoria' => 'required',
            'autor' => 'required|string|min:3|regex:/^[a-zA-Z0-9\s]+$/',
            
        ], [
            'titulo.required' => 'El campo título es obligatorio.',
            'titulo.unique' => 'Ya existe una obra con este título.',
            'titulo.regex' => '- El titulo no puede contener caracteres especiales.',
            'titulo.min' => '- El titulo debe tener al menos :min caracteres.',
            'descripcion.required' => 'El campo descripción es obligatorio.',
            'descripcion.regex' => '- La descripcion no puede contener caracteres especiales.',
            'descripcion.min' => '- La descripcion debe tener al menos :min caracteres.',
            'imagen.required' => 'Debes subir una imagen para la obra.',
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.mimes' => 'La imagen debe tener un formato válido (jpeg, png, jpg, gif).',
            'imagen.max' => 'La imagen no debe superar los 2048 kilobytes.',
            'categoria.required' => 'Es obligatorio especificar la categoria',
            'subcategoria.required' => 'Es obligatorio especificar la subcategoria',
            'autor.required' => 'El campo autor es obligatorio.',
            'autor.regex' => '- El autor no puede contener caracteres especiales.',
            'autor.min' => '- El autor debe tener al menos :min caracteres.',
            
        ]);

        // Obtener el usuario autenticado
        $usuario = Auth::user();

        // Obtener el ID del usuario autenticado a través de la relación
        $session_id = $usuario->id;
        

        // Crear una nueva obra con los datos del formulario
        $obraCreada = new Obra();
        $obraCreada->titulo = $request->input('titulo');
        $obraCreada->descripcion = $request->input('descripcion');
        $obraCreada->subcategoria_id = $request->input('subcategoria');
        $obraCreada->autor = $request->input('autor');
        $obraCreada->id_usuario = $session_id;

        // Manejar la subida de la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre = time() . '_' . $imagen->getClientOriginalName();
            $ruta = $imagen->storeAs('assets/img/imagenesObras', $nombre, 'public');

            // Redimensionar la imagen antes de guardarla
            $rutaImagen = storage_path('app/public/' . $ruta);
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

                $obraCreada->imagen = $nombre;
            }
        }


        $obraCreada->save();

        // Autenticar al usuario y redirigir
        return redirect()->route('index')->with('success', 'Obra registrada exitosamente.');
    }

    // Función para mostrar todas las obras
    public function mostrarObras()
    {
        $obrasCategorizadas = Obra::with(['subcategoria.categoria', 'usuario'])->get();
        $categorias = Categoria::all();
        return view('index', compact('obrasCategorizadas', 'categorias'),);
    }

    public function editarObraPerfil($id)
{
    
    $obra = Obra::findOrFail($id);
    $categorias = Categoria::all();
    return view('editarObraPerfil', compact('obra', 'categorias'));
}

    // Función para mostrar los detalles de una obra específica
    public function mostrarObra_details($id)
{
    $obra = Obra::with(['subcategoria.categoria', 'usuario'])->findOrFail($id);

    $comentarios = Comentario::where('id_obra', $id)
        ->whereNull('id_comentario_padre')
        ->with(['respuestas' => function ($query) {
            $query->orderBy('created_at');
        }])
        ->orderBy('created_at')
        ->get();

    return view('obra_details', compact('obra', 'comentarios'));

}

public function eliminarObraPerfil($id)
{
    // Encuentra la obra
    $obra = Obra::findOrFail($id);

    // Elimina la obra
    $obra->delete();

    // Redirecciona de vuelta a la página de ver obras
    return redirect()->back()->with('success', 'Obra eliminada exitosamente.');
}

public function actualizarObraPerfil(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'nullable|regex:/^[a-zA-Z0-9\s]+$/',
            'descripcion' => 'nullable|regex:/^[a-zA-Z0-9\s]+$/',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria' => 'nullable',
            'subcategoria' => 'nullable',
            'autor' => 'nullable|regex:/^[a-zA-Z0-9\s]+$/',
            
        ], [
            'titulo.regex' => '- El titulo no puede contener caracteres especiales.',
            'descripcion.regex' => '- La descripcion no puede contener caracteres especiales.',
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.mimes' => 'La imagen debe tener un formato válido (jpeg, png, jpg, gif).',
            'imagen.max' => 'La imagen no debe superar los 2048 kilobytes.',
            'autor.regex' => '- El autor no puede contener caracteres especiales.',
            
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
        return redirect()->route('perfil_vista')->with('success', 'Obra registrada exitosamente.');
    }

// Función para mostrar todas las obras
public function obrasPerfil(){
        // Obtener el usuario actualmente autenticado
        $usuario = Auth::user();
        $categorias = Categoria::all();
        // Obtener todas las obras asociadas al usuario
        $obras = $usuario->obras;

        // Pasar los datos del usuario y sus obras a la vista
        return view('perfil', compact('usuario', 'obras', 'categorias'));
    }

    public function descargarPDF($id){
        $obra = Obra::with(['subcategoria.categoria', 'usuario'])->findOrFail($id);
        
        // Cargar la vista pdf/obra.pdf
        $pdf = PDF::loadView('pdf.obra_pdf', compact('obra')); // Usar pdf.obra en lugar de pdf/obra.pdf
        
        return $pdf->download('detalles_de_la_obra.pdf');
    }

    public function agregarComentario(Request $request, $id)
    {
        // Obtener el ID del usuario autenticado
        $id_usuario = auth()->user()->id;


        // Lógica para agregar un comentario a una obra específica

        // Por ejemplo, podrías crear un nuevo comentario utilizando el modelo Comentario
        $comentario = new Comentario();
        $comentario->contenido = $request->input('contenido'); // Suponiendo que tienes un campo 'contenido' en tu formulario de comentario
        $comentario->valoracion = $request->input('rating'); // Valor de la valoración
        $comentario->id_obra = $id; // Asigna el ID de la obra al comentario
        $comentario->id_usuario = $id_usuario; // Asigna el ID del usuario autenticado al comentario
        $comentario->id_comentario_padre = $request->input('id_comentario_padre'); // ID del comentario al que se está respondiendo

        // Guarda el comentario en la base de datos
        $comentario->save();

        // Redirecciona a la página de detalles de la obra u a otra página según lo necesites
        return redirect()->back()->with('success', 'Comentario agregado exitosamente.');
    }
}
?>
