@include('header')

<body>
    <main id="main"> 
        <div class="container-fluid full-bg h-100">
            <div class="container h-100">
                <div class="row no-margin h-100">
                    <div class="bg-layer d-flex col-md-4 mt-4">
                        <div class="login-box row">
                            <h3>Perfil de {{ $usuario->nombre }}</h3>
                            <div class="text-center mb-4">
                                <!-- Mostrar imagen de perfil -->
                                <img src="{{ secure_asset('storage/assets/img/imagenesPerfil/' . $usuario->imagenPerfil) }}" class="img-fluid rounded-circle w-25" alt="Imagen de perfil">
                            </div>                    
                            <form method="POST" action="{{ route('actualizarUsuario', $usuario->id) }}">
                                @csrf
                                @method('POST')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuario->nombre_usuario }}" name="nombre_usuario" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuario->nombre }}" value="{{ $usuario->nombre }}" name="nombre" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuario->apellidos }}" value="{{ $usuario->apellidos }}" name="apellidos" aria-label="Apellidos" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuario->correo }}" name="correo" aria-label="Email" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuario->telefono }}" name="telefono" aria-label="Phone" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Nueva contraseña" name="contrasena" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </form>
                            <form method="POST" action="{{ route('hacerAdmin', $usuario->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Hacer Admin</button>
                            </form>
                            
                            <form method="POST" action="{{ route('eliminarUsuario', $usuario->id) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                    
                    
                    <section id="portfolio" class="portfolio">
                        <div class="container">
                            <div class="section-title" data-aos="fade-up">
                                <h2>Obras de {{ $usuario->nombre }}</h2>
                            </div>
        
                            <div class="row" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <ul id="portfolio-flters">
                                        <li data-filter="*" class="filter-active">Todo</li>
                                        @foreach ($categorias as $categoria)
                                            <li data-filter=".filter-{{ $categoria->id }}">{{ $categoria->formato }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
        
                            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                @foreach ($obras as $obra)
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $obra->subcategoria->categoria->id }}">
                                        <div class="portfolio-wrap">
                                            <img src="{{ secure_asset('storage/assets/img/imagenesObras/' . $obra->imagen) }}" class="img-fluid" alt="">
                                            <div class="portfolio-info text-white border border-dark p-3">
                                                <h4>{{ $obra->titulo }}</h4>
                                                <p>Autor: {{ $obra->autor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@include('footer')
