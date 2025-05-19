<!DOCTYPE html>
<html lang="es">

<head>
  <link href="css/styleform.css" rel="stylesheet" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ServiceHub</title>
  <link rel="icon" type="image/png" href="images/icono.ico">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
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

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-28ZLTLFBL4');
  </script>
</head>

<body>
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
  <br>
  <section class="gradient-custom d-flex align-items-center justify-content-center" style="background: linear-gradient(to bottom right, #6a11cb, #2575fc); padding: 0;">
    <div class="container" style="margin-top: 50px;">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-xl-7">
          <div class="card shadow-lg p-4" style="border-radius: 15px; background-color: #fff;">
            <h3 class="text-center fw-bold mb-4" style="color: #6a11cb;">Registro Profesionista</h3>
            <form method="POST" action="{{ route('professional.register') }}">
              @csrf
              <input type="text" name="FirstName" placeholder="Nombre" required>
              <input type="text" name="LastName" placeholder="Apellido" required>
              <input type="text" name="CURP" placeholder="CURP" required>
              <input type="text" name="RFC" placeholder="RFC" required>
              <textarea name="Experience" placeholder="Experiencia" required></textarea>
              <input type="text" name="Availability" placeholder="Disponibilidad" required>
              <input type="email" name="Email" placeholder="Correo" required>
              <input type="password" name="Password" placeholder="Contraseña" required>
              <input type="password" name="Password_confirmation" placeholder="Confirmar Contraseña" required>
              <button type="submit">Registrarse</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <br><br>
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