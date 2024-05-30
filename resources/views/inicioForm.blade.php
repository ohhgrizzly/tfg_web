
@include('header')

<body>
    <div class="container-fluid full-bg h-100">
        <div class="container h-100">
            <div class="row no-margin h-100">
                <div class="bg-layer d-flex col-md-4">
                    <div class="login-box row">
                        <h3>Iniciar Sesión</h3>
                        <!-- Card de errores -->
                <div class="col-mt-4">
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
                        <form method="POST" action="{{ route('iniciar_sesion') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="nombre_usuario" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                                
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" aria-label="Password" aria-describedby="basic-addon1">
                            
                            </div>

                            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                        </form>

                        <p class="no-c">¿No tienes cuenta? <a href="{{ route('registro') }}">Crear cuenta</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- ======= Footer ======= -->
@include('footer')