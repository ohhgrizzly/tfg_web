
@include('header')

<body>
    <main id="main"> 
        <div class="container-fluid full-bg h-100">
            <div class="container h-100 ">
                <div class="row no-margin h-100">
                    <div class="bg-layer d-flex col-md-4 mt-4">
                        <div class="login-box row">
                            <h3>Mi Perfil</h3>
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
                            <div class="text-center mb-4">
                                <!-- Mostrar imagen de perfil -->
                                <img src="{{ secure_asset('storage/assets/img/imagenesPerfil/' . Auth::user()->imagenPerfil) }}" class="img-fluid rounded-circle w-25" alt="Imagen de perfil">
                            </div>                    
                            <form method="POST" action="{{ route('perfil_actualizar') }}">
                                @csrf <!-- token CSRF -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="{{ Auth::user()->nombre_usuario }}" value="{{ Auth::user()->nombre_usuario }}" name="nombre_usuario" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ Auth::user()->nombre }}" value="{{ Auth::user()->nombre }}" name="nombre" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="{{ Auth::user()->apellidos }}" value="{{ Auth::user()->apellidos }}" name="apellidos" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control border-danger shadow-sm @error('contrasena') is-invalid @enderror" placeholder="Contraseña" name="contrasena" aria-label="Password" aria-describedby="basic-addon1">
                                @error('contrasena')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control border-danger shadow-sm @error('contrasena_confirmation') is-invalid @enderror" placeholder="Repite contraseña" name="contrasena_confirmation" aria-label="Password" aria-describedby="basic-addon1">
                                @error('contrasena_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                                                
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="{{ Auth::user()->correo }}" value="{{ Auth::user()->correo }}" name="correo" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="{{ Auth::user()->telefono }}" value="{{ Auth::user()->telefono }}" name="telefono" aria-label="Phone" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-image"></i></span>
                                </div>
                                <input type="file" class="form-control" placeholder="Avatar" name="imagenPerfil" aria-label="Imagen" aria-describedby="basic-addon2">
                            </div>
                                <button type="submit" class="btn btn-success">Modificar</button>
                                <p class="no-c">¿Deseas eliminar tu perfil? <button type="submit" formaction="{{ route('perfil_eliminar') }}" class="btn btn-danger">Eliminar perfil</button></p>
                            </form>
                            
                        </div>
                        
                    </div> 
                    <!-- Aquí comienza la sección de las obras del usuario -->
                    <section id="portfolio" class="portfolio">
                        <div class="container">
                
                        <div class="section-title" data-aos="fade-up">
                            <h2>Mis obras</h2>
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
                                <div class="col-lg-3 col-md-6 portfolio-item filter-{{ $obra->subcategoria->categoria->id }}">
                                    <div class="portfolio-wrap">
                                        <a href="{{ route('obras.mostrar', ['id' => $obra->id]) }}">
                                            <img src="{{ secure_asset('storage/assets/img/imagenesObras/' . $obra->imagen) }}" class="img-fluid" alt="">
                                            <div class="portfolio-info">
                                                <h4>{{ $obra->titulo }}</h4>
                                                <!-- Boton para eliminar la obra -->
                                                <div class="mt-4">
                                                    <form action="{{ route('eliminarObraPerfil', ['id' => $obra->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </div>
                                                <!-- Boton para modificar la obra -->
                                                <div class="mt-4">
                                                    <a href="{{ route('editarObraPerfil', $obra->id) }}" class="btn btn-primary">Modificar</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                    </div>
                    </section>        
                    <!-- Aquí termina la sección de las obras del usuario -->
                </div>
            </div>
        
        </div>
    </main>
<!-- ======= Footer ======= -->
@include('footer')
