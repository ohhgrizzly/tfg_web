
    <!-- ======= Header ======= -->  
    @include('header')
    <!-- ======= End Header ======= -->  
    <body>
        <main id="main">
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Administradores</h2>
                        <p>Estos son los administradores actuales de la web</p>
                    </div>

                    <div class="row">
                        @foreach($adminUsuarios as $admins)
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 d-flex align-items-stretch">
                                <div class="member" data-aos="zoom-in">
                                    <div class="member-img">
                                        <img src="{{ secure_asset('assets/img/imagenesPerfil/' . $admins->imagenPerfil) }}" class="img-fluid" alt="">
                                        <div class="social">
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $admins->nombre_usuario }}</h4>
                                        <span>{{ $admins->correo }}</span>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section><!-- End Team Section -->
        </main><!-- End #main -->
        
        <!-- ======= Footer ======= -->
        @include('footer')
        <!-- ======= End Footer ======= -->

