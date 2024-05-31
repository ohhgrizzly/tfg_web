@include('header')

<body class="h-100">
    <div class="container-fluid full-bg h-100">
        <div class="container h-100">
            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        <h3>Registrarme</h3>
                        <form method="POST" action="{{ route('registroProcesado') }}" enctype="multipart/form-data">
                            @csrf <!-- token CSRF -->

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" name="nombre_usuario"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre"
                                    aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Apellido" name="apellidos"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña"
                                    name="contrasena" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Repite contraseña"
                                    name="contrasena_confirmation" aria-label="Password"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Correo" name="correo"
                                    aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Telefono" name="telefono"
                                    aria-label="Phone" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-image"></i></span>
                                </div>
                                <input type="file" class="form-control" placeholder="Avatar" name="imagenPerfil" aria-label="Imagen" aria-describedby="basic-addon2">
                            </div>
                            <button type="submit" class="btn btn-success">Registrarme</button>
                        </form>
                        <p class="no-c">¿Ya tienes una cuenta? <a href="{{ secure_url(route('login')) }}">Iniciar Sesión</a></p>

                    </div>
                </div>

                <!-- Card de errores -->
                <div class="col-md-4 mt-4">
                    @if ($errors->any())
                    <div class="card border-danger mb-3">
                        <div class="card-header bg-danger text-white">
                            Errores de validación
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Footer ======= -->
    @include('footer')

