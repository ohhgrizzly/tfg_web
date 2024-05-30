@include('header')

<body>
    <main id="main"> 
        <div class="container-fluid full-bg h-100">
            <div class="container h-100">
                <div class="row no-margin h-100">
                    <div class="bg-layer d-flex col-md-4 mt-4">
                        <div class="login-box row">
                            <h3>Perfil de {{ $usuarioParticular->nombre }}</h3>
                            <div class="text-center mb-4">
                                <!-- Mostrar imagen de perfil -->
                                <img src="{{ secure_asset('assets/img/imagenesPerfil/' . $usuarioParticular->imagenPerfil) }}" class="img-fluid rounded-circle w-25" alt="Imagen de perfil">
                            </div>                    
                            <form method="POST" action="{{ route('actualizarUsuario', $usuarioParticular->id) }}">
                                @csrf
                                @method('POST')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuarioParticular->nombre_usuario }}" value="{{ $usuarioParticular->nombre_usuario }}" name="nombre_usuario" aria-label="Username" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuarioParticular->nombre }}" value="{{ $usuarioParticular->nombre }}" name="nombre" aria-label="Name" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuarioParticular->apellidos }}" value="{{ $usuarioParticular->apellidos }}" name="apellidos" aria-label="Apellidos" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuarioParticular->correo }}" value="{{ $usuarioParticular->correo }}" name="correo" aria-label="Email" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="{{ $usuarioParticular->telefono }}" value="{{ $usuarioParticular->telefono }}" name="telefono" aria-label="Phone" aria-describedby="basic-addon1" disabled>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    
                    
                    <!-- Aquí comienza la sección de las obras del usuario -->
                    <section id="portfolio" class="portfolio">
                        <div class="container">
                
                        <div class="section-title" data-aos="fade-up">
                            <h2>Sus obras</h2>
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
                                            <img src="{{ secure_asset('assets/img/imagenesObras/' . $obra->imagen) }}" class="img-fluid" alt="">
                                            <div class="portfolio-info">
                                                <h4>{{ $obra->titulo }}</h4>
                                            </div>
                                        </a>
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
