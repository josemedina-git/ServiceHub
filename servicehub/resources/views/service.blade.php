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
  <script>
      function performSearch() {
          const query = document.getElementById('searchInput').value;
          if (query) {
              window.location.href = `index.html?search=${encodeURIComponent(query)}`;
          }
      }
  </script>
    <!-- end header section -->
  </div>
  <!-- Service Section -->
<section class="service_section" style="background-color: #f9f9f9; padding: 50px 0;">
  <div class="container">
    <!-- Título -->
    <div class="custom_heading-container text-center mb-5">
      <h2 style="font-size: 36px; font-weight: bold; color: #333;">Nuestros Servicios</h2>
    </div>

    <!-- Contenedor de Servicios -->
    <div class="row g-4 justify-content-center">
      <!-- Jardinería -->
      <div class="col-md-6 col-lg-4">
        <div class="service_box shadow-lg p-3 mb-4" style="border-radius: 15px; overflow: hidden; background: #fff; cursor: pointer;">
          <div class="img-box" style="height: 200px; overflow: hidden; border-radius: 10px;">
            <img src="images/gardening.jpg" alt="Jardinería" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div class="detail-box text-center mt-3">
            <h4 style="font-size: 18px; font-weight: bold; color: #007BFF;">Jardinería</h4>
            <p style="color: #555; font-size: 14px; margin-top: 10px;">
              Diseño y mantenimiento de jardines. Servicio profesional y personalizado para tu hogar.
            </p>
          </div>
        </div>
      </div>

      <!-- Plomería -->
      <div class="col-md-6 col-lg-4">
        <div class="service_box shadow-lg p-3 mb-4" style="border-radius: 15px; overflow: hidden; background: #fff; cursor: pointer;">
          <div class="img-box" style="height: 200px; overflow: hidden; border-radius: 10px;">
            <img src="images/plumb.jpg" alt="Plomería" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div class="detail-box text-center mt-3">
            <h4 style="font-size: 18px; font-weight: bold; color: #007BFF;">Plomería</h4>
            <p style="color: #555; font-size: 14px; margin-top: 10px;">
              Reparaciones e instalaciones de tuberías con atención profesional y puntual.
            </p>
          </div>
        </div>
      </div>

      <!-- Limpieza -->
      <div class="col-md-6 col-lg-4">
        <div class="service_box shadow-lg p-3 mb-4" style="border-radius: 15px; overflow: hidden; background: #fff; cursor: pointer;">
          <div class="img-box" style="height: 200px; overflow: hidden; border-radius: 10px;">
            <img src="images/clean_home.jpg" alt="Limpieza de hogar" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div class="detail-box text-center mt-3">
            <h4 style="font-size: 18px; font-weight: bold; color: #007BFF;">Limpieza de Hogar</h4>
            <p style="color: #555; font-size: 14px; margin-top: 10px;">
              Servicio de limpieza profesional para mantener tu hogar impecable.
            </p>
          </div>
        </div>
      </div>

      <!-- Mudanza -->
      <div class="col-md-6 col-lg-4">
        <div class="service_box shadow-lg p-3 mb-4" style="border-radius: 15px; overflow: hidden; background: #fff; cursor: pointer;">
          <div class="img-box" style="height: 200px; overflow: hidden; border-radius: 10px;">
            <img src="images/packing.jpg" alt="Mudanza" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div class="detail-box text-center mt-3">
            <h4 style="font-size: 18px; font-weight: bold; color: #007BFF;">Mudanza</h4>
            <p style="color: #555; font-size: 14px; margin-top: 10px;">
              Servicio de mudanzas seguras y confiables para tu hogar o negocio.
            </p>
          </div>
        </div>
      </div>

      <!-- Obras y Remodelaciones -->
      <div class="col-md-6 col-lg-4">
        <div class="service_box shadow-lg p-3 mb-4" style="border-radius: 15px; overflow: hidden; background: #fff; cursor: pointer;">
          <div class="img-box" style="height: 200px; overflow: hidden; border-radius: 10px;">
            <img src="images/renovation.jpg" alt="Obras y Remodelaciones" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div class="detail-box text-center mt-3">
            <h4 style="font-size: 18px; font-weight: bold; color: #007BFF;">Obras y Remodelaciones</h4>
            <p style="color: #555; font-size: 14px; margin-top: 10px;">
              Construcción y remodelaciones para hogares y negocios con calidad garantizada.
            </p>
          </div>
        </div>
      </div>
    </div>

  
    <!-- Botón Ver Más -->
<div class="text-center mt-5">
  <a href="#" class="btn btn-primary" style="background-color: #884cdc; border-color: #ffffff; color: #ffffff; font-size: 18px; padding: 10px 30px; border-radius: 25px;">
    Ver más
  </a>
</div>

  </div>
</section>

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
