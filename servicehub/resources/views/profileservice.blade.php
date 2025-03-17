<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
  
    <title>ServiceHub</title>
    <link rel="icon" type="image/png" href="images/icono.ico">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/responsive.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
      .profile-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
      }
      .search-icon {
        color: white;
        cursor: pointer;
      }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-28ZLTLFBL4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
  
      gtag('config', 'G-28ZLTLFBL4');
  </script>
</head>

<body class="sub_page">
    <div class="hero_area">
        <header class="header_section">
      @include('layouts.navbar')

        </header>
      </div>

  <!-- Sección de servicios favoritos -->
<section class="favorite_section layout_padding text-center" style="background-color: #f9f9f9; padding: 50px 0;">
  <div class="container">
    <!-- Título de la Sección -->
    <h2 class="text-center mb-5" style="font-weight: bold; font-size: 36px; color: #333;">Nombre del Servicio</h2>

    <!-- Tarjeta de Servicio -->
    <div class="card shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
      <div class="card-body text-center p-5">
        <!-- Imagen del Profesional -->
        <div class="profile-img-container mb-4" style="border-radius: 50%; overflow: hidden; width: 150px; height: 150px; margin: 0 auto;">
          <img src="https://via.placeholder.com/150" alt="Imagen del Profesionista" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- Nombre del Profesional -->
        <h4 class="mb-3" style="font-weight: bold; color: #444;">Nombre del Profesionista</h4>

        <!-- Descripción del Servicio -->
        <p class="text-muted mb-4" style="font-size: 16px;">
          Descripción del servicio ofrecido. Aquí puedes agregar detalles sobre el tipo de trabajo que realiza y qué lo hace especial.
        </p>

        <!-- Precio por Hora -->
        <h5 class="mb-4" style="font-weight: bold; color: #884cdc;">Precio por Hora: $50.00</h5>

        <!-- Botón para Agendar -->
        <a href="agendar.html" class="btn btn-primary" style="background-color: #884cdc; border-color: #884cdc; padding: 10px 20px; font-size: 16px; border-radius: 25px;">
          Agendar
        </a>
      </div>
    </div>

    <!-- Sección de Reseñas -->
    <div class="card shadow-lg">
      <div class="card-body p-4">
        <h5 class="card-title mb-4" style="font-weight: bold; color: #333;">Reseñas</h5>

        <!-- Lista de Reseñas -->
        <div class="reviews-container">
          <!-- Review 1 -->
          <div class="border-bottom py-3">
            <p><strong style="color: #333;">Usuario 1:</strong> Muy buen servicio, quedé satisfecho con el resultado.</p>
            <p><small style="color: #ffc107;">⭐⭐⭐⭐⭐</small></p>
          </div>
          
          <!-- Review 2 -->
          <div class="border-bottom py-3">
            <p><strong style="color: #333;">Usuario 2:</strong> El profesional fue muy puntual y cumplió con todas las expectativas.</p>
            <p><small style="color: #ffc107;">⭐⭐⭐⭐⭐</small></p>
          </div>
          
          <!-- Review 3 -->
          <div class="border-bottom py-3">
            <p><strong style="color: #333;">Usuario 3:</strong> El trabajo fue bueno, aunque hubo algunos detalles que mejorar.</p>
            <p><small style="color: #ffc107;">⭐⭐⭐⭐</small></p>
          </div>
          
          <!-- Review 4 -->
          <div class="border-bottom py-3">
            <p><strong style="color: #333;">Usuario 4:</strong> Excelente trato, muy profesional en todo momento.</p>
            <p><small style="color: #ffc107;">⭐⭐⭐⭐⭐</small></p>
          </div>
          
          <!-- Review 5 -->
          <div class="py-3">
            <p><strong style="color: #333;">Usuario 5:</strong> Buen servicio, aunque podría ser un poco más rápido.</p>
            <p><small style="color: #ffc107;">⭐⭐⭐⭐</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="container my-5">
    <!-- Título Principal -->
    <h2 class="text-center mb-5" style="font-weight: bold;">Otros servicios</h2>
  
    <!-- Contenedor de las Cards -->
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center"><a title="Servicio de Jardinería" style="text-decoration: none; color: #fff;" href="gardening.html">Jardinería</a></h5>
          </div>
        </div>
      </div>
  
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center"><a title="Servicio de Plomería" style="text-decoration: none; color: #fff;" href="plumb.html">Plomería</a></h5>
          </div>
        </div>
      </div>
  
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center"><a title="Servicio de Limpieza" style="text-decoration: none; color: #fff;" href="cleaning.html">Limpieza del Hogar</a></h5>
          </div>
        </div>
      </div>
  
      <!-- Card 4 -->
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center"><a title="Servicio de Mudanza" style="text-decoration: none; color: #fff;" href="packing.html">Mudanza</a></h5>
          </div>
        </div>
      </div>
  
      <!-- Card 5 -->
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center"><a title="Servicio de Remodelación" style="text-decoration: none; color: #fff;" href="renovation.html">Remodelaciones</a></h5>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center"><a title="Servicio de Carpintería" style="text-decoration: none; color: #fff;" href="#">Carpintería</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section py-5">
    @include('layouts.footer')
    </section>
    <!-- footer section -->
  </div>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  