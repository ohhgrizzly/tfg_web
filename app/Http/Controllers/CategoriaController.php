<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function getSubirObraForm()
    {
        $categorias = Categoria::with('subcategorias')->get();
        return view('subirObraForm', compact('categorias'));
    }

    public function getSubcategorias($categoria_id)
    {
        // Lógica para obtener las subcategorías asociadas a la categoría especificada
        $categoria = Categoria::findOrFail($categoria_id);
        $subcategorias = $categoria->subcategorias;
        
        // Devolver las subcategorías como respuesta
        return response()->json($subcategorias);
    }
    
    
}

