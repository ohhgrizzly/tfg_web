<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('header')
      
      <body>    
        <main id="main">
          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact section-bg">
            <div class="container">
      
              <div class="section-title">
                <h2>Contacto</h2>
                <p>Esto es la vista de contacto para comunicarse con los responsables de la pagina</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-4">
                  <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Ubicaci&oacute;n:</h4>
                      <p>Calle de Mariano de Lagasca 25,<br>50006, Zaragoza (Aragón)</p>
                    </div>
      
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>arteriaInfo@gmail.com</p>
                    </div>
      
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Tel&eacute;fono:</h4>
                      <p>+34 123 456 789</p>
                    </div>
      
                  </div>
      
                </div>
      
                <div class="col-lg-8 mt-5 mt-lg-0">
      
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Explicanos el motivo..." required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Contactar</button></div>
                  </form>
      
                </div>
      
              </div>
      
            </div>
          </section><!-- End Contact Section -->

                    <!-- ======= Frequently Asked Questions Section ======= -->
                    @include('contenido/preguntas_frecuentes')
                    <!-- End Frequently Asked Questions Section -->
      
        </main><!-- End #main -->
      
        <!-- ======= Footer ======= -->
        @include('footer')
      
      </body>
</html>
