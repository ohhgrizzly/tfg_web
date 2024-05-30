
    @include('header')
      
      <body>
      
        <main id="main">
      
          <!-- ======= About Us Section ======= -->
          <section id="about" class="about">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Sobre nosotros</h2>
                <p>¡Conocenos!</p>
              </div>
      
              <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                  <div class="image">
                    <img src="{{ secure_asset('assets/img/galeria1.jpg') }}" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                  <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <h3>¿Qu&eacute; es y quienes somos?</h3>
                    <p class="fst-italic">
                      Artéria es un santuario digital para los amantes del arte, un espacio donde la expresión creativa florece y se comparte con el mundo. Aquí, cada pincelada, cada fotografía y cada escultura cuentan una historia única, capturando emociones, experiencias y visiones del mundo que nos rodea. Desde artistas emergentes hasta maestros consagrados, nuestra plataforma acoge a todos aquellos que desean compartir su pasión por el arte y encontrar inspiración en la diversidad de formas y estilos.
                    </p>
                    <p>
                      Explorar Artéria es embarcarse en un viaje fascinante a través de los rincones más vibrantes del mundo artístico. Desde las obras clásicas que han resistido el paso del tiempo hasta las creaciones contemporáneas que desafían las convenciones, cada rincón de nuestra galería digital está repleto de descubrimientos fascinantes y sorpresas inspiradoras. Cada visita es una invitación a sumergirse en un océano de creatividad, donde la mente se expande y el alma se eleva.
                    </p>
                    <p>Nuestra comunidad es el latido del corazón de Artéria, un lugar donde artistas y entusiastas se encuentran, interactúan y comparten su amor por el arte. A través de nuestras funciones de interacción social, desde comentarios hasta mensajes privados, creamos un espacio donde las conexiones humanas se fusionan con la expresión artística, enriqueciendo la experiencia de cada usuario y fomentando un sentido de pertenencia y comunidad.</p>
                  </div>
                </div>
              </div>
      
            </div>
          </section>
          <!-- End About Us Section -->
      
          <!-- ======= Services Section ======= -->
          <section id="services" class="services">
            <div class="container">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Categor&iacute;as</h2>
                <p>Este es el repertorio de categor&iacute;as principales que ofrecemos</p>
              </div>
      
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                  <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <i class="bi bi-brush"></i>
                    <h4>Pintura</h4>
                    <p>Amplia gama de pinturas con diferentes categor&iacute;as dependiendo de la elaboracion y estilo</p>
                  </div>
                  <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-hammer"></i>
                    <h4>Escultura</h4>
                    <p>Obras de arte para los apasionados de la esculturas</p>
                  </div>
                  <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-camera2"></i>
                    <h4>Fotograf&iacute;a</h4>
                    <p>Fotograf&iacute;a para inmortalizar cada momento o expresar los sentimientos de cada persona</p>
                  </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("{{ secure_asset('assets/img/services.jpg') }}"); border-radius: 10px;' data-aos="fade-left" data-aos-delay="100"></div>
              </div>
      
            </div>
          </section><!-- End Services Section -->
      
          <!-- ======= Featured Section ======= -->
          <section id="featured" class="featured">
            <div class="container">
      
              <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                  <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                      <figure>
                        <img src="{{ secure_asset('assets/img/featured-1.jpg') }}" alt="" class="img-fluid">
                      </figure>
                    </div>
                    <div class="tab-pane" id="tab-2">
                      <figure>
                        <img src="{{ secure_asset('assets/img/featured-2.jpg') }}" alt="" class="img-fluid">
                      </figure>
                    </div>
                    <div class="tab-pane" id="tab-3">
                      <figure>
                        <img src="{{ secure_asset('assets/img/featured-3.jpg') }}" alt="" class="img-fluid">
                      </figure>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                  <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                      <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                        <h4>Aventurate</h4>
                        <p>Te motivamos a que te arriegues para probar nuevas experiencias.</p>
                      </a>
                    </li>
                    <li class="nav-item mt-2">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <h4>Inspirate</h4>
                        <p>Explora e inpirate para cultivar tu mente.</p>
                      </a>
                    </li>
                    <li class="nav-item mt-2">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <h4>Disfruta</h4>
                        <p>Deleitate con lo m&aacute;s novedoso</p>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
      
            </div>
          </section><!-- End Featured Section -->
      
          <!-- ======= Why Us Section ======= -->
          <section id="why-us" class="why-us">
            <div class="container-fluid">
      
              <div class="row">
      
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">
      
                  <div class="content" data-aos="fade-up">
                    <h3>¿Cuales son los <strong>objetivos</strong>?</h3>
                    <p>
                      Aqui te explicamos tres de los principales objetivos que pretendemos abarcar, pero tenemos en mente muchas m&aacute;s mejoras.
                    </p>
                  </div>
                  <div class="accordion-list">
                    <ul>
                      <li data-aos="fade-up" data-aos-delay="100">
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Fomentar la participaci&oacute;n activa de artistas y usuarios en la plataforma<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                          <p>
                            Promoviendo la interacción y la comunidad el objetivo que conseguimos es una interacci&oacute;n m&aacute;s din&aacute;mica entre artistas y usuarios.
                          </p>
                        </div>
                      </li>
      
                      <li data-aos="fade-up" data-aos-delay="200">
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Exploraci&oacute;n de obras de arte <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                            Debido a la brecha en la forma en que el arte se presenta y se comparte en el entorno digital pretendemos facilitar la expansi&oacute;n de este.
                          </p>
                        </div>
                      </li>
      
                      <li data-aos="fade-up" data-aos-delay="300">
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Experiencia visual inmersiva <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                            No es lo mismo tenerlo enfrente que verlo a trav&eacute;s de una pantalla, pero nosotros pensamos que con mucho esfuerzo y dedicaci&oacute;n podriamos ser capaces de conseguirlo.
                          </p>
                        </div>
                      </li>
      
                    </ul>
                  </div>
      
                </div>
      
                <div class="col-lg-5 order-1 order-lg-2 align-items-stretch video-box" style='background-image: url("{{ secure_asset('assets/img/primeraArteria.jpg') }}"); border-radius: 10px;' data-aos="zoom-in">
                  <a href="{{ secure_asset('assets/img/videoArteria.webm') }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Why Us Section -->

          <p>
            <br>
          </p>
      
          <!-- ======= Testimonials Section ======= -->
          @include('contenido/frases')
          <!-- End Testimonials Section -->
      
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

