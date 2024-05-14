<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaBaseCowork</title>
  <link rel="shortcut icon" href="./assets/images/logo.jpg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">
<!-- Navbar -->
<?php
require 'navbar.php';
?>
<!-- fin navbar -->


  <main>
    <article class="article">

    <!-- seccion hero -->

      <section class="section hero" aria-label="hero">
        <div class="container">

          <div class="hero-bg">
            <div class="hero-content">

              <h1 class="h1 hero-title">
                La <span class="span">Base Cowork</span> donde surgen nuevas ideas.
              </h1>

              <p class="hero-text">
              En La Base buscamos despertar la imaginación de nuestro público y hacer realidad cada una de las ideas que nazcan en los espacios.
              </p>

            </div>
          </div>

        </div>
      </section>

      <!-- fin de la seccion hero -->





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about">
        <div class="container">

          <div class="about-banner img-holder" style="--width: 600; --height: 700;">
            <img src="./assets/images/1.jpg" width="600" height="700" loading="lazy" alt="about banner"
              class="img-cover">
            

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play" aria-hidden="true" href="www.facebook.com"></ion-icon>
            </button>
          </div>

          <div class="about-content">

            <h2 class="h2 section-title">¡Productividad. Transparencia. Control!</h2>

            <p class="section-text">
              En LaBaseCowork, hemos desarrollado una plataforma que permite a individuos y empresas alquilar espacios de trabajo para trabajar, realizar reuniones, y más, de manera fácil y conveniente. Nuestros espacios impulsa la productividad, la transparencia en los costos y el control en manos de nuestros usuarios. LaBaseCowork redefine la experiencia de trabajar fuera de casa.
            </p>

            <a href="#" class="btn btn-primary">Descubre Más</a>

          </div>

        </div>
      </section>



      <!-- Servicios -->

      <?php
      include 'servicios.php';
      ?>

      <!-- fin de los servicios -->

      <!-- Espacios -->
      <?php
      include 'espacios.php';
      ?>
      <!-- Fin de los espacios -->

      <section class="section contact" aria-label="contact">
        <div class="container">

          <h2 class="h2 section-title">¿Tienes alguna pregunta? ¡Contáctanos!</h2>

          <p class="section-text">
          En LaBaseCowork, ofrecemos una excelente plataforma para alquilar espacios de trabajo sin intermediarios ni comisiones.
          </p>

          <button class="btn btn-primary">
            <ion-icon name="call-outline"></ion-icon>

            <span class="span">¡Contáctanos!</span>
          </button>

        </div>
      </section>





      <!-- Subscribete -->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="wrapper">
            <h2 class="h2 section-title">¡Suscríbete a nuestro boletín!</h2>

            <p class="section-text">Para recibir las últimas actualizaciones e información!</p>
          </div>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Ingresa tu Email :" aria-label="Enter your email"
              required class="email-field">

            <button type="submit" class="btn btn-secondary">Subscribete</button>
          </form>

        </div>
      </section>

    </article>
  </main>

<!-- Footer -->
<?php
include 'footer.php';
?>
<!-- End footer -->

 <!-- boton back -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>

  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>