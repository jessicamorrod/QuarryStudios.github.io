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
<a class="breadcrumb-item" href="servicios.php">Servicios</a>
</nav>
</div>
<br>

 <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title" align="center">
         
          <p>Servicios</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters" style="font-size:16px">
             
                <li data-filter="*" class="filter-active" >Todos</li>
              <li data-filter=".filter-starters">Proximamente</li>
           
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/servicios/seguridad.jpg" class="menu-img" alt="">
            <div align="center">
              <h1>Seguridad</h1>
            </div>
            
          </div>
          
          
            <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/servicios/estacionamiento.jpg" class="menu-img" alt="">
            <div align="center">
              <h1>Estacionamiento</h1>
            </div>
            
          </div>
          
          
            
            <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/servicios/PRIVACIDAD.jpg" class="menu-img" alt="">
            <div align="center">
              <h1>Privacidad</h1>
            </div>
            
          </div>
          
          
          
              <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/servicios/catering.jpg" class="menu-img" alt="">
            <div align="center">
              <h1>Catering</h1>
            </div>
            
          </div>

      

          
          

          

      </div>
    </section><!-- End Menu Section -->



 <?php include('php/prepie.php'); ?>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <script src="assets/js/main.js"></script>

       
</body>