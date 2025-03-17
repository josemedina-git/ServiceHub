<!DOCTYPE html>
<html lang="es">
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
    .service_profile {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 30px;
    }
    .profile-img-box img {
      max-width: 100%;
      height: auto;
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

<!-- service section -->
<section class="service_section" style="margin-top: 100px; margin-bottom: 250px;">
  <div class="container">
    <div class="row justify-content-center">
      <!-- Primer servicio -->
      <div class="col-md-6 col-lg-4">
        <div class="service_profile" style="display: flex; flex-direction: column; align-items: center; background: #fff; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 100%; height: 550px;">
          <div class="profile-img-box" style="width: 100%; height: 200px; overflow: hidden; border-radius: 15px;">
            <img src="images/janitor.jpg" alt="Perfil del servicio" style="width: 100%; height: 100%; object-fit: cover;" />
          </div>
          <div class="profile-detail-box" style="text-align: center; margin-top: 15px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="flex-grow: 1; overflow: hidden;">
              <h4 class="service-name" style="color: #333; font-size: 24px; margin-bottom: 10px;">Servicios de Limpieza</h4>
              <p style="color: #555; font-size: 16px; margin: 5px 0;">
                <strong>Precio promedio:</strong> <span style="color: #007BFF;">$100 - $200</span>
              </p>
              <p style="color: #555; font-size: 16px; margin: 5px 0;">
                <strong>Trabajos concretados:</strong> <span style="color: #28a745;">45</span>
              </p>
              <p style="color: #666; font-size: 14px; margin: 10px 0;">
                Ofrecemos servicios de jardinería profesional, diseño de paisajismo, poda de árboles y mantenimiento de jardines. Servicios confiables y personalizados para tu hogar.
              </p>
            </div>
            <button style="background: #884cdc; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; font-size: 14px; cursor: pointer; margin-top: 10px;">
              <a href="profileservice.html" style="text-decoration: none; color: #fff;">Ver más</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Segundo servicio -->
      <div class="col-md-6 col-lg-4">
        <div class="service_profile" style="display: flex; flex-direction: column; align-items: center; background: #fff; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 100%; height: 550px;">
          <div class="profile-img-box" style="width: 100%; height: 200px; overflow: hidden; border-radius: 15px;">
            <img src="images/janitor2.jpg" alt="Perfil del servicio" style="width: 100%; height: 100%; object-fit: cover;" />
          </div>
          <div class="profile-detail-box" style="text-align: center; margin-top: 15px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="flex-grow: 1; overflow: hidden;">
              <h4 class="service-name" style="color: #333; font-size: 24px; margin-bottom: 10px;">Servicios de Limpieza</h4>
              <p style="color: #555; font-size: 16px; margin: 5px 0;">
                <strong>Precio promedio:</strong> <span style="color: #007BFF;">$150 - $250</span>
              </p>
              <p style="color: #555; font-size: 16px; margin: 5px 0;">
                <strong>Trabajos concretados:</strong> <span style="color: #28a745;">60</span>
              </p>
              <p style="color: #666; font-size: 14px; margin: 10px 0;">
                Especialistas en paisajismo, poda de árboles y mantenimiento de jardines. Nos adaptamos a tus necesidades.
              </p>
            </div>
            <button style="background: #884cdc; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; font-size: 14px; cursor: pointer; margin-top: 10px;">
              <a href="profileservice.html" style="text-decoration: none; color: #fff;">Ver más</a>
            </button>
          </div>
        </div>
      </div>
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
