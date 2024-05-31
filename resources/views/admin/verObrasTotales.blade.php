
    <!-- ======= Header ======= -->  
    @include('../header')
    <!-- ======= End Header ======= -->  
    <body>
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
                                    <!-- Boton para eliminar la obra -->
                                    <div class="mt-4">
                                        <form action="{{ route('eliminarObra', ['id' => $obra->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                    <!-- Boton para modificar la obra -->
                                    <div class="mt-4">
                                        <a href="{{ route('editarObra', $obra->id) }}" class="btn btn-primary">Modificar</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
          </div>
        </div>
          </section>
          <!-- End Category Section -->
        </main><!-- End #main -->
        
        <!-- ======= Footer ======= -->
        @include('../footer')
        <!-- ======= End Footer ======= -->

