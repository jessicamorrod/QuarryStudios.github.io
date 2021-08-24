<!DOCTYPE html>
<html lang="es">

<?php include('php/scripts.php'); ?>


<body>
  <meta charset="utf-8">

<?php include("php/menu.php"); ?>

<section class="banner-area relative about-banner" id="home"  style=" background-color:#000000"> </section>

<div class="container" style="background-color:#454545; font-family: Poppins; font-size:14px;" >
<nav class="breadcrumb">
<a class="breadcrumb-item" href="index.php">Inicio</a>
<a class="breadcrumb-item" href="contacto.php">Contacto</a>
</nav>
</div>
<br>


    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title" align="center">
        
          <p>Contacto</p>
        </div>
      </div>

    <div align="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15062.115779436954!2d-99.164248!3d19.3028406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x948420def2edde0f!2sQUARRY%20STUDIOS!5e0!3m2!1ses!2smx!4v1629767247453!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>QUARRY STUDIOS
Blvd. Gransur 100, Pedregal de Carrasco, Coyoacán, 04700 Ciudad de México, CDMX</p>
              </div>

           <!--   <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Horario de tencuión:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>
-->
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Correo:</h4>
                <p>comercial2@quarrystuios.com.mx</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono</h4>
                <p>5586267192</p>
              </div>
              
                <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp</h4>
                <p><a href="https://api.whatsapp.com/send?phone=525580405091&text=" target="_blank">5586267192</a></p>
              </div>
              
              
                <div class="phone">
                <i class="bi bi-facebook"></i>
                <h4>Facebook</h4>
                <p><a href="https://www.facebook.com/QuarryStudios" target="_blank">Quarry Studios</a></p>
              </div>
              
               <div class="phone">
                <i class="bi bi-twitter"></i>
                <h4>Twitter</h4>
                <p><a href="https://twitter.com/QuarryStudios" target="_blank">@QuarryStudios</a></p>
              </div>
              
              
               <div class="phone">
                <i class="bi bi-instagram"></i>
                <h4>Instagram</h4>
                <p><a href="https://www.instagram.com/quarrystudios/" target="_blank">@QuarryStudios</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido envíado con éxito</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>


 <?php include('php/prepie.php'); ?>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <script src="assets/js/main.js"></script>

       
</body>