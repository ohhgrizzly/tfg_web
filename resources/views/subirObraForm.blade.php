
@include('header')

<body class="h-100">
    <div class="container-fluid full-bg h-100">
       <div class="container h-100">
           <div class="row no-margin h-100">
               <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                    <h3>Subir Obra</h3>
                    <form method="POST" action="{{ route('subirObra.crearObra') }}" enctype="multipart/form-data">
                        <!-- Mostrar errores de validación -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @csrf <!-- token CSRF -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-fonts"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Titulo" name="titulo" aria-label="Titulo" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-card-text"></i></span>
                            </div>
                            <textarea class="form-control" placeholder="Descripcion" name="descripcion" aria-label="Descripcion" aria-describedby="basic-addon1"></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="bi bi-image"></i></span>
                            </div>
                            <input type="file" class="form-control" placeholder="Imagen" name="imagen" aria-label="Imagen" aria-describedby="basic-addon2">
                        </div>
                        
                        <!-- Desplegables para las Categorías y Subcategorías -->
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value="" disabled selected>Selecciona el formato</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->formato }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group" id="subcategoria_group" style="display: none;">
                            <label for="subcategoria">Subcategoría:</label>
                            <select class="form-control" id="subcategoria" name="subcategoria">
                                <option value="" disabled selected>Selecciona el tipo</option>
                            </select>
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-fonts"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Autor" name="autor" aria-label="Autor" aria-describedby="basic-addon1">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Subir Obra</button>
                    </form>
                    <p class="no-c"><a href="{{ route('index') }}">Volver</a></p>

                </div>
            </div>    
        </div>
    </div>
<!-- ======= Footer ======= -->
@include('footer')