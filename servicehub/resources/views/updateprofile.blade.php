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
  <div class="container-center-update d-flex justify-content-center align-items-center min-vh-100" style="background: linear-gradient(to bottom right, #6a11cb, #2575fc); padding: 20px;">
    <div class="update-box shadow-lg p-4" style="background-color: #fff; border-radius: 15px; width: 100%; max-width: 600px;">
      <h2 class="text-center mb-4" style="color: #6a11cb; font-weight: bold;">Actualizar Perfil</h2>

      <!-- Imagen de Perfil -->
      <div class="text-center mb-4">
        <div class="profile-pic mb-3" style="position: relative; width: 120px; height: 120px; margin: 0 auto;">
          <img src="https://via.placeholder.com/120" id="profileImage" alt="Foto de perfil" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 3px solid #6a11cb;">
          <label for="profileUpload" style="position: absolute; bottom: -5px; right: -5px; background-color: #6a11cb; color: #fff; padding: 5px; border-radius: 50%; cursor: pointer;">
            <i class="fas fa-upload"></i>
          </label>
          <input type="file" id="profileUpload" accept="image/*" style="display: none;" onchange="loadProfileImage(event)">
        </div>
      </div>

      <!-- Formulario -->
      <form id="updateProfileForm">
        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="name" class="form-label" style="color: #6a11cb;">Nombre</label>
            <input type="text" id="name" class="form-control" placeholder="Ingresa tu nombre" required>
          </div>
          <div class="col-md-6">
            <label for="surname" class="form-label" style="color: #6a11cb;">Apellido</label>
            <input type="text" id="surname" class="form-control" placeholder="Ingresa tu apellido" required>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="email" class="form-label" style="color: #6a11cb;">Correo</label>
            <input type="email" id="email" class="form-control" placeholder="Ingresa tu correo" required>
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label" style="color: #6a11cb;">Teléfono</label>
            <input type="tel" id="phone" class="form-control" placeholder="Ingresa tu teléfono" required>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="password" class="form-label" style="color: #6a11cb;">Contraseña</label>
            <input type="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" required>
          </div>
          <div class="col-md-6">
            <label for="confirmPassword" class="form-label" style="color: #6a11cb;">Confirmar Contraseña</label>
            <input type="password" id="confirmPassword" class="form-control" placeholder="Confirma tu contraseña" required>
          </div>
        </div>

        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary w-50" style="background-color: #6a11cb; border: none;">Aceptar</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Función para previsualizar la imagen de perfil
    function loadProfileImage(event) {
      const profileImage = document.getElementById('profileImage');
      profileImage.src = URL.createObjectURL(event.target.files[0]);
    }
  </script>
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