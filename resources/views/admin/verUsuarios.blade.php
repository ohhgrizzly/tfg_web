
    <!-- ======= Header ======= -->  
    @include('../header')
    <!-- ======= End Header ======= -->  
    <body>
        <main id="main">
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Usuarios</h2>
                        <p>Estos son los usuarios actuales de la web</p>
                    </div>

                    <div class="row">
                        @foreach($usuarios as $usuario)
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 d-flex align-items-stretch">
                            <a href="{{ route('admin.usuario.detalle', $usuario->id) }}">
                                <div class="member" data-aos="zoom-in">
                                    <div class="member-img">
                                        <img src="{{ secure_asset('assets/img/imagenesPerfil/' . $usuario->imagenPerfil) }}" class="img-fluid rounded-circle" alt="">
                                        <div class="social">
                                            <a href="{{ route('admin.usuario.detalle', $usuario->id) }}">Modificar</a>                                        
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $usuario->nombre_usuario }}</h4>
                                        <span>{{ $usuario->correo }}</span>
                                        <p></p>
                                    </div>
                                    <form action="{{ route('eliminarUsuario', $usuario->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </a>
                        </div>
                        
                        
                        @endforeach
                    </div>
                </div>
            </section><!-- End Team Section -->
        </main><!-- End #main -->
        
        <!-- ======= Footer ======= -->
        @include('../footer')
        <!-- ======= End Footer ======= -->

