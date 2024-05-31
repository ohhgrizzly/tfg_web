<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AdminController;



//RUTAS PROTEGIDAS
Route::middleware(['auth'])->group(function () {

    // ADMIN
    Route::prefix('admin')->group(function () {
        Route::get('/mostrarAdmins', [AdminController::class, 'mostrarAdmins'])->name('verAdmins');
        Route::get('/mostrarUsuarios', [AdminController::class, 'mostrarUsuarios'])->name('verUsuarios');
        Route::get('/usuario/{id}', [AdminController::class, 'mostrarUsuario'])->name('admin.usuario.detalle');
        Route::get('/verObrasTotales', [AdminController::class, 'mostrarObrasTotales'])->name('verObrasTotales');

        Route::get('/editarObra/{id}', [AdminController::class, 'editarObraAdmin'])->name('editarObra');
        Route::post('/actualizarObraAdmin/{id}', [AdminController::class, 'actualizarObra'])->name('actualizarObraAdmin.actualizar');


        Route::post('/actualizarUsuario/{id}', [AdminController::class, 'actualizarUsuario'])->name('actualizarUsuario');
        Route::delete('/eliminarUsuario/{id}', [AdminController::class, 'eliminarUsuario'])->name('eliminarUsuario'); 
        Route::put('/hacerAdmin/{id}', [AdminController::class, 'hacerAdmin'])->name('hacerAdmin');

        Route::delete('/eliminarObra/{id}', [AdminController::class, 'eliminarObra'])->name('eliminarObra');

        
        /*Route::get('subirCategorias', function () {
            if (auth()->user()->esAdmin != 1) {
                abort(403, 'Acceso denegado');
            }
            return view('/admin/subirCategorias');
        })->name('subirCategorias');*/

        Route::get('/admin/subirCategorias', [AdminController::class, 'obrasSubirCategoria'])->name('obrasSubcategorias_vista');
        
    });

    Route::post('/admin/crearCategoria', [AdminController::class, 'crearCategoria'])->name('crearCategoria');
    Route::post('/admin/crearSubcategoria', [AdminController::class, 'crearSubcategoria'])->name('crearSubcategoria');
    Route::post('/admin/verificar-categoria', [AdminController::class, 'verificarCategoria'])->name('verificarCategoria');
    Route::delete('/admin/eliminarSeleccionados', [AdminController::class, 'eliminarSeleccionados'])->name('eliminarSeleccionados');

    // OBRAS
    
    Route::get('/subirObraForm', [CategoriaController::class, 'getSubirObraForm'])->name('subirObraForm');
    Route::post('/subirObra', [ObraController::class, 'crearObra'])->name('subirObra.crearObra');
    Route::get('/subcategorias/{categoria}', [CategoriaController::class, 'getSubcategorias']);
    Route::post('/obra/{id}/comentarios', [ObraController::class, 'agregarComentario'])->name('obras.comentarios.agregar');
    Route::post('/obra/{id}/valorar', [ObraController::class, 'valorar'])->name('obras.valorar');

    Route::get('/editarObraPerfil/{id}', [ObraController::class, 'editarObraPerfil'])->name('editarObraPerfil');
    Route::post('/actualizarObraPerfil/{id}', [ObraController::class, 'actualizarObraPerfil'])->name('actualizarObraPerfil.actualizar');

    Route::delete('/eliminarObraPerfil/{id}', [ObraController::class, 'eliminarObraPerfil'])->name('eliminarObraPerfil');

    // PERFIL
    Route::get('/perfil', function () {
        return view('perfil', ['titulo' => 'Perfil']);
    })->name('perfil_vista');

    Route::get('/perfil', [ObraController::class, 'obrasPerfil'])->name('perfil_vista');
    Route::post('/perfil/actualizar/{id}', [PerfilController::class, 'actualizarPerfil'])->name('perfil_actualizar');
    Route::post('/perfil/eliminar', [PerfilController::class, 'eliminarPerfil'])->name('perfil_eliminar');

    Route::get('/usuarioParticular/{id}', [PerfilController::class, 'mostrarUsuarioParticular'])->name('mostrarUsuarioParticular');


});


// INDEX
Route::get('/', function () {
    return view('index', ['titulo' => 'Inicio']);
})->name('index');

Route::get('/', [ObraController::class, 'mostrarObras'])->name('index');

// REEGISTRO
/*Route::get('/registroForm', function () {
    return view('registroForm', ['titulo' => 'Registro']);
})->name('registro');*/
//Route::post('/registro', [RegistroController::class, 'crearUsuario'])->name('crearUsuario');
Route::get('registro', [RegistroController::class, 'verFormulario'])->name('registro');
Route::post('registro', [RegistroController::class, 'crearUsuario'])->name('registroProcesado');

Route::get('/cerrar-sesion', [InicioController::class, 'cerrarSesion'])->name('cerrar_sesion');


// INICIO FORMULARIO
Route::get('/inicio', function () {
    return view('inicioForm', ['titulo' => 'Iniciar Sesión']);
})->name('login');

Route::post('/iniciar-sesion', [InicioController::class, 'iniciar_sesion'])->name('iniciar_sesion');

// CONTACTO
Route::get('/contacto', function () {
    return view('contactar', ['titulo' => 'Contacto']);
})->name('contacto');

// SOBRE NOSOTROS
Route::get('/about', function () {
    return view('sobre_nosotros', ['titulo' => 'Sobre Nosotros']);
})->name('about');

// OBRAS
Route::get('/obra_details/{id}', [ObraController::class, 'mostrarObra_details'])->name('obras.mostrar');
Route::get('/obra_details/{id}/pdf', [ObraController::class, 'descargarPDF'])->name('obras.descargarPDF');

