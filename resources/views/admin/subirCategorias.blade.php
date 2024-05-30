@include('header')

<body class="h-100">
    <div class="container-fluid full-bg h-100">
        <div class="container h-100">
            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        <h3>Subir Subcategoría</h3>
                        <form id="subcategoriaForm" method="POST" action="{{ secure_url(route('crearSubcategoria')) }}" enctype="multipart/form-data">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('success_message'))
                                <div class="alert alert-success">
                                    {{ session('success_message') }}
                                </div>
                            @endif

                            @csrf
                            <div class="form-group">
                                <label for="categoria">Categoría:</label>
                                <select class="form-control" id="categoria" name="categoria">
                                    <option value="" disabled selected>Selecciona el formato</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->formato }}</option>
                                    @endforeach
                                    <option value="add_new" class="text-primary font-weight-bold">
                                     Añadir nueva categoría
                                    </option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-fonts"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tema" id="tema" name="tema" aria-label="Tema" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-fonts"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Material" id="material" name="material" aria-label="Material" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-fonts"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tipo" id="tipo" name="tipo" aria-label="Tipo" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-fonts"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Época" id="epoca" name="epoca" aria-label="Epoca" aria-describedby="basic-addon1">
                            </div>

                            <button type="submit" class="btn btn-success">Subir Subcategoría</button>
                        </form>
                        <p class="no-c"><a href="{{ secure_url(route('index')) }}">Volver</a></p>
                    </div>
                </div> 
                <div class="col-md-8" id="categorias-bloque">
                    <div class="bg-layer">
                        <div class="p-1">
                            <h2 class="mb-4">Categorías Existentes</h2>
                            <hr>
                            <div class="list-container" style="max-height: 60vh; overflow-y: auto;">
                                <form method="POST" action="{{ secure_url(route('eliminarSeleccionados')) }}">
                                    @method('DELETE')
                                    @csrf
                                    <ul class="list-unstyled">
                                        @foreach($categorias as $categoria)
                                            <li class="mb-3">
                                                <input type="checkbox" name="seleccionados[]" value="categoria_{{ $categoria->id }}" class="mr-2">
                                                <span>{{ $categoria->formato }}</span>
                                                <ul class="list-unstyled subcategories-list ml-4">
                                                    @foreach($categoria->subcategorias as $subcategoria)
                                                        <li style="background-color: #f2f2f2; padding: 5px; border-radius: 5px;" class="mb-2">
                                                            <input type="checkbox" name="seleccionados[]" value="subcategoria_{{ $subcategoria->id }}" class="mr-2">
                                                            <span>{{ $subcategoria->tema }} - {{ $subcategoria->material }} - {{ $subcategoria->tipo }} - {{ $subcategoria->epoca }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-danger" id="eliminarSeleccionados">Eliminar Seleccionados</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>   
            </div>
        </div>
    </div>

    <script>
        var esAdmin = {{ Auth::check() && Auth::user()->esAdmin ? 'true' : 'false' }};
        var crearCategoriaUrl = '{{ secure_url(route("crearCategoria", [], false)) }}';
        var verificarCategoriaUrl = '{{ secure_url(route("verificarCategoria", [], false)) }}';
        var crearSubcategoriaUrl = '{{ secure_url(route("crearSubcategoria", [], false)) }}';
        var csrfToken = '{{ csrf_token() }}';

        document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
            checkbox.addEventListener('change', () => {
                const checkedCount = document.querySelectorAll('input[type="checkbox"]:checked').length;
                document.getElementById('eliminarSeleccionados').disabled = checkedCount === 0;
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var categoriaSelect = document.getElementById('categoria');
            if (categoriaSelect) {
                categoriaSelect.addEventListener('change', function () {
                    if (this.value === 'add_new') {
                        var formato = prompt('Introduce el nuevo formato de categoría:');
                        if (formato) {
                            if (!esAdmin) {
                                alert('Acceso denegado');
                                return;
                            }
                            // Verificar la existencia de la categoría
                            fetch(verificarCategoriaUrl, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                body: JSON.stringify({ formato: formato })
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Error en la respuesta del servidor');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.exists) {
                                    alert('Error: Esta categoría ya existe.');
                                } else {
                                    // Si la categoría no existe, enviar el formulario para crearla
                                    fetch(crearCategoriaUrl, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': csrfToken
                                        },
                                        body: JSON.stringify({ formato: formato })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            alert(data.message);
                                            location.reload(); // Recargar la página para actualizar el desplegable
                                        } else {
                                            alert('Hubo un error al crear la categoría.');
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        alert('Hubo un error al crear la categoría.');
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Hubo un error al verificar la categoría.');
                            });
                        }
                    }
                });
            }

            var subcategoriaForm = document.getElementById('subcategoriaForm');
            if (subcategoriaForm) {
                subcategoriaForm.addEventListener('submit', function (event) {
                    event.preventDefault();

                    fetch(crearSubcategoriaUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            categoria: document.getElementById('categoria').value,
                            tema: document.getElementById('tema').value,
                            material: document.getElementById('material').value,
                            tipo: document.getElementById('tipo').value,
                            epoca: document.getElementById('epoca').value,
                        })
                    }).then(response => response.json())
        .then(data => {
            // Mostrar el JSON en la página
            document.getElementById('jsonResponse').textContent = JSON.stringify(data, null, 2);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un error al enviar el formulario.');
        });
                });
            }
        });
    </script>

    @include('footer')
</body>
