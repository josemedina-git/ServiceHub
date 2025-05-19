<!DOCTYPE html>
<html lang="en">

<head>
  <link href="css/styleform.css" rel="stylesheet" />
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

<body>

    <div class="hero_area">
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
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card login-box">
                            <div class="card-body p-5 text-center login-box">

                                <div class="mb-md-2 mt-md-2 pb-2">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login Profesionista</h2>
                                    <p class="text-dark mb-5">Ingresa como profesionista con tu correo y contraseña!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email"
                                            class="form-control form-control-lg bg-light border-dark"
                                            placeholder="Correo" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password"
                                            class="form-control form-control-lg bg-light border-dark"
                                            placeholder="Contraseña" />
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-3">
                                        <button class="btn btn-outline-light btn-lg px-5 btn-primary" type="button"
                                            onclick="loginProfesional()">Iniciar sesión</button>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <a href="login.html" class="text-muted small">Acceder como usuario</a>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0">¿No tienes una cuenta? <a href="singuprofesional.html"
                                            class="text-dark fw-bold">Registrarse</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


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
    