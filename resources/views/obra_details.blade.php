<!-- ======= Header ======= -->
@include('header')

<body>
  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detalles de "{{ $obra->titulo }}"</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider">
              <img src="{{ secure_asset('storage/assets/img/imagenesObras/' . $obra->imagen) }}" alt="Imagen de la obra" class="img-fluid mx-auto d-block">
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Titulo : "{{ $obra->titulo }}"</h3>
              <ul>
                <li><strong>Artista</strong>: {{ $obra->autor }}</li>
                <li><strong>Publicado</strong>: {{ $obra->created_at->format('d F, Y') }}</li>
                <li><strong>Categoria</strong>: {{ $obra->subcategoria->categoria->formato }}
                  <ul style="padding-left: 20px;">
                    <li><strong>Epoca</strong>: {{ $obra->subcategoria->epoca }}</li>
                    <li><strong>Tema</strong>: {{ $obra->subcategoria->tema }}</li>
                    <li><strong>Tipo</strong>: {{ $obra->subcategoria->tipo }}</li>
                    <li><strong>Material</strong>: {{ $obra->subcategoria->material }}</li>
                  </ul>
                  <li><strong>Publicado por</strong>: @<a href="{{ route('mostrarUsuarioParticular', $obra->usuario->id) }}">{{ $obra->usuario->nombre_usuario ?: 'Nombre de usuario no disponible' }}</a></li>
                </li>
              </ul>
            </div>
            <!-- Dentro de la sección portfolio-details en la vista obra_details.blade.php -->
            <div class="row mt-4">
              <div class="col-lg-12 text-center">
                <a href="{{ route('obras.descargarPDF', $obra->id) }}" class="btn btn-primary">Generar PDF</a>
              </div>
            </div>
          </div>
        </div>   
        <div class="portfolio-description">
          <h2>Descripcion</h2>
          <hr>
          <p>
            {{ $obra->descripcion }}
          </p>
        </div>
      </div>
     <!-- Sección de Comentarios -->
<section id="comments" class="comments">
  <div class="container">
      <h2>Comentarios</h2>
      <!-- Iterar sobre los comentarios y mostrarlos -->
      @foreach($comentarios as $comentario)
          <div class="comment @if($comentario->id_comentario_padre) respuesta @endif">
              <div class="comment-info">
                  <strong>@ {{ $comentario->usuario->nombre_usuario }}</strong>
                  <span>{{ $comentario->created_at->format('d F, Y') }}</span>
                  <br>
            <!-- Mostrar valoración con estrellas -->
            <span class="rating">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $comentario->valoracion)
                        <i class="bi bi-star-fill text-warning"></i> <!-- Estrella llena -->
                    @else
                        <i class="bi bi-star text-warning"></i> <!-- Estrella vacía -->
                    @endif
                @endfor
            </span>
            </br>
              </div>
              <div class="comment-text">
                  <p>{{ $comentario->contenido }}</p>
              </div>
              <!-- Enlace de "Responder" con icono -->
              @if(Auth::check())
              <a href="javascript:void(0);" class="text-muted small" onclick="mostrarFormularioRespuesta({{ $comentario->id }}, '{{ $comentario->usuario->nombre_usuario }}')">
                <i class="bi bi-reply"></i> Responder
              </a>
              @endif
              <!-- Muestra las respuestas al comentario -->
              @if ($comentario->respuestas)
              @foreach($comentario->respuestas as $respuesta)
              <div class="respuesta mt-3 ml-4 p-3">
                <div class="comment-info">
                  <strong>@ {{ $respuesta->usuario->nombre_usuario }}</strong>
                  <span>{{ $respuesta->created_at->format('d F, Y') }}</span>
                </div>
                <div class="comment-text">
                  <p>{{ $respuesta->contenido }}</p>
                </div>
              </div>
            @endforeach
              @endif
          </div>
      @endforeach
  </div>
</section>

@if (Auth::check())
    <!-- Sección de Valoración y Comentario -->
<section id="rating-comment" class="rating-comment">
  <div class="container">
    <!-- Formulario de valoración y comentario -->
    <form action="{{ route('obras.comentarios.agregar', $obra->id) }}" method="POST" id="formularioComentario">
      @csrf
      <div class="form-group">
        <div class="stars">
          <input type="radio" name="rating" id="star5" value="5"><label for="star5"></label>
          <input type="radio" name="rating" id="star4" value="4"><label for="star4"></label>
          <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
          <input type="radio" name="rating" id="star2" value="2"><label for="star2"></label>
          <input type="radio" name="rating" id="star1" value="1"><label for="star1"></label>
        </div>
      </div>
      <div class="form-group">
        <!-- Agregar campo oculto para el ID del comentario padre -->
      <input type="hidden" name="id_comentario_padre" id="idComentarioPadre" value="">
      <div class="form-group">
        <label for="contenido" id="etiquetaContenido">Comentario:</label>
        <textarea name="contenido" id="contenido" class="form-control" rows="3" required></textarea>
      </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</section>
@else
<div class="col-lg-3 text-center">
<a href="{{ route('login') }}" class="btn btn-success">Iniciar sesion</a>
</div
@endif




    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
