
    <!-- ======= Header ======= -->  
    @include('header')
    <!-- ======= End Header ======= -->  
      <body>
        <section id="hero">
          <div class="hero-container">
            <a href="{{ route('index') }}" class="hero-logo" data-aos="zoom-in"><img src="{{ secure_asset('assets/img/hero-logo.png') }}" alt=""></a>
            <h1 data-aos="zoom-in">Bienvenido a <strong>Art&eacute;ria</strong></h1>
            <h2 data-aos="fade-up">Donde cada obra es un latido de creatividad</h2>
            <a data-aos="fade-up" data-aos-delay="200" href="#portfolio" class="btn-get-started scrollto">Explorar</a>
          </div>
          </section><!-- End Hero -->
        <main id="main">
          <!-- ======= Category Section ======= -->
          <section id="portfolio" class="portfolio">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Categorias</h2>
                <p>Indica que categoria te gustaria consultar</p>
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
                
                @foreach ($obrasCategorizadas as $obra)
                    <div class="col-lg-3 col-md-6 portfolio-item filter-{{ $obra->subcategoria->categoria->id }}">
                        <div class="portfolio-wrap">
                            <a href="{{ route('obras.mostrar', ['id' => $obra->id]) }}">
                                <img src="{{ secure_asset('storage/assets/img/imagenesObras/' . $obra->imagen) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $obra->titulo }}</h4>
                                    <p>Autor: {{ $obra->autor }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
          </div>
        </div>
          </section>
          <!-- End Category Section -->
      
          <!-- ======= Testimonials Section ======= -->
          @include('contenido/frases')
      
          <!-- ======= Clients Section ======= -->
          @include('contenido/clientes')
          <!-- End Clients Section -->
      
          <!-- ======= ¿Que puedo hacer? Section ======= -->
          <section id="team" class="team">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>¿Qu&eacute; puedo hacer?</h2>
                <p>Deja fluir tu imaginaci&oacute;n y experimenta a cualquier nivel con las ganas de aprender siempre un poco m&aacute;s</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="zoom-in">
                    <div class="member-img">
                      <img src="{{ secure_asset('assets/img/team/escultura.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h3>Compartir Obras</h3>
                      <span>Crea tus propias obras de arte</span>
                      <p>Puedes compartir tus propias obras de arte, siendo este el creador de la misma para que los dem&aacute;s miembros de la comunidad disfrute de tu arte</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member-img">
                      <img src="{{ secure_asset('assets/img/team/vangogh.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h3>Descubrir Arte</h3>
                      <span>Navegar por la web y deleitarte con lo desconocido</span>
                      <p>Artistas que considerabas desconocidos de arte antiguo, moderno, contemporaneo...</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member-img">
                      <img src="{{ secure_asset('assets/img/team/comunidad.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h3>Interactuar</h3>
                      <span>Comunicate con los dem&aacute;s usuarios</span>
                      <p>Ya sean artistas o simplemente usuarios, todos est&aacute;n a tu alcance para comunicarte con ellos para ver sus obras publicadas o comentar</p>
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End ¿Que puedo hacer? Section -->
      
        </main><!-- End #main -->
        
        <!-- ======= Footer ======= -->
        @include('footer')
      <!-- ======= End Footer ======= -->

