<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ServiceHub</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />

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

  <!-- Google tag (gtag.js) -->
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

<body class="sub_page">
  <div class="hero_area">

    <!-- Barra de navegacion-->
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
  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Bienvenido a ServiceHub
        </h2>
      </div>
      <div>
        <div class="detail-box">
          <p class="large-text">
            Encuentra el mejor talento para tu necesidad.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Debitis doloribus pariatur exercitationem accusantium sapiente minus,
            laudantium quaerat aliquam saepe voluptas dolorum, distinctio nemo!
            Porro fuga explicabo labore ducimus maiores ad.
          </p>
          <p class="large-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            A laboriosam cupiditate consequatur tempore labore quos! Officia, minus facere.
            Possimus repellat dignissimos saepe!
            Tempora, itaque possimus qui ducimus magni ipsa labore?
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="container my-5">
    <!-- Título Principal -->
    <h2 class="text-center mb-5" style="font-weight: bold;">Servicios</h2>

    <!-- Contenedor de las Cards -->
    @if($category->isNotEmpty())
    <div class="row">
      @foreach ($category as $cat)
      <div class="col-md-4 mb-4">
        <div class="card card-custom-bg" style="background-color: #884cdc; color: #fff;">
          <div class="card-body">
            <h5 class="card-title text-center">
              <a title="{{ $cat->NameCategory }}"
                style="text-decoration: none; color: #fff;"
                href="{{ route('categories.services', $cat->IdCategory) }}">
                {{ $cat->NameCategory }}
              </a>
            </h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @else
    <p>No hay categorías disponibles.</p>
    @endif



  </div>

  <!-- end welcome section -->

  <!-- service section -->

  <section class="service_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Servicios en tendencia
        </h2>
      </div>
      <div class="container my-5">
        <div class="mb-4">
          <div class="btn-group mr-2 mb-2">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categoría
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item">Jardinería</a>
              <a class="dropdown-item">Plomería</a>
              <a class="dropdown-item">Limpieza del Hogar</a>
              <a class="dropdown-item">Mudanza</a>
              <a class="dropdown-item">Remodelaciones</a>
              <a class="dropdown-item">Carpintería</a>
            </div>
          </div>

          <div class="btn-group mr-2 mb-2">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Precio por hora
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item">$15 - $30 / hora</a>
              <a class="dropdown-item">$30 - $60 / hora</a>
              <a class="dropdown-item">$60 - $100 / hora</a>
              <a class="dropdown-item">Mayor a $100 / hora</a>
            </div>
          </div>

          <div class="btn-group mr-2 mb-2">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Calificación
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item">1 Estrella</a>
              <a class="dropdown-item">2 Estrellas</a>
              <a class="dropdown-item">3 Estrellas</a>
              <a class="dropdown-item">4 Estrellas</a>
              <a class="dropdown-item">5 Estrellas</a>
            </div>
          </div>

          <div class="btn-group mr-2 mb-2">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Estado
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item">Aguascalientes</a>
              <a class="dropdown-item">Jalisco</a>
              <a class="dropdown-item">Zacatecas</a>
              <a class="dropdown-item">Colima</a>
              <a class="dropdown-item">San Luis Potosi</a>
            </div>
          </div>

          <button type="button" class="btn btn-primary mb-2" style="background-color: #884cdc;">Aplicar Filtros</button>
        </div>
        <div class="service_container layout_padding2">
          <div class="card-group" style="margin-top: 100px;">
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="images/gardening.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="{{route('profileservice')}}">Jardinería profesional</a>
                </h5>
                <p class="mb-0">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam corporis fugit cupiditate nobis error consequuntur soluta explicabo nostrum nulla. Culpa adipisci dolor aliquam non in aliquid nisi tenetur asperiores reiciendis!
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$67 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Aguascalientes, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="images/plumb.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Expertos en plomería</a>
                </h5>
                <p class="mb-0">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus eaque officia fugiat est magnam quis eius aperiam quaerat ad molestiae blanditiis quas neque possimus fuga tempora quisquam accusantium, explicabo perspiciatis.
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$50 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Jalisco, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="images/construccion.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Remodelaciones unicas</a>
                </h5>
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia itaque id, magni optio architecto dolore, eum facere porro totam vel deleniti odio quo, sed culpa doloremque vitae! Reprehenderit, et enim.
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$35 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Aguascalientes, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-group" style="margin-top: 100px;">
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="images/clean_home.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Limpieza profunda</a>
                </h5>
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique itaque perspiciatis, inventore dicta numquam dolores tempora aliquam architecto non. Voluptatibus rerum doloribus non labore unde eos odit asperiores maxime veniam.
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$27 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Aguascalientes, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="images/packing.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Mudanza express</a>
                </h5>
                <p class="mb-0">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod mollitia minus sed itaque voluptate molestiae deleniti odit magnam officiis. Pariatur a, impedit natus ipsam accusamus ad accusantium laudantium necessitatibus illo!
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$50 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Zacatecas, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://yumagic.com/wp-content/uploads/2023/07/La-importancia-de-la-edicion-de-video.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Edición multimedia</a>
                </h5>
                <p class="mb-0">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro aspernatur consequatur reprehenderit consequuntur fugit dignissimos, vitae quos non neque quis sint, dicta corporis quisquam accusantium quia libero. Sunt, repudiandae repellat!
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$75 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto">Zacatecas, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-group" style="margin-top: 100px;">
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://tecnomueble.com.mx/storage/blog/K6XNziLptKL3I1MxWSLvUf9UCk6YFG-metadGVuZGVuY2lhcyBjYXJwaW50ZXJpYSAyMDI0LmpwZw==-.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Carpintería artistica</a>
                </h5>
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laudantium a fuga quia corporis itaque voluptas atque ut exercitationem tempore, soluta magnam! Officia ullam saepe ab ex dignissimos veritatis reiciendis?
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$67 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Aguascalientes, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://aceroscrea.com/wp-content/uploads/2023/05/persona-utilizando-una-maquina-soldadora.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Herrería</a>
                </h5>
                <p class="mb-0">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse architecto pariatur excepturi facilis fugiat eaque quia, ab tempore iste impedit voluptates quo sapiente dolore temporibus voluptatibus repudiandae ipsum ex harum?
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$80 / hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Jalisco, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
            <div class="card" data-animation="true">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://www.northware.mx/wp-content/uploads/2023/10/northware-la-importancia-del-desarrollo-de-software-en-la-actualidad-845x321.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="profileservice.html">Desarrollo de software</a>
                </h5>
                <p class="mb-0">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. At enim nemo laudantium quod repellat dolorem eos. Vero aspernatur quaerat explicabo ab. Ut culpa quod dolorum excepturi ducimus. Et, quo iste.
                </p>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">$115 / Hora</p>
                <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">place</i>
                <p class="text-sm my-auto"> Aguascalientes, México</p>
                <a href="agendar.html" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="agendar">
                  <i class="fas fa-receipt"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- end service section -->
  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="content-container">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis
        </p>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="images/smiley.png" alt="" />
            </div>
            <div class="detail-box">
              <h3>
                99%
              </h3>
              <h6>
                SATISFIED CLIENTS
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="images/monitor.png" alt="" />
            </div>
            <div class="detail-box">
              <h3>
                4700+
              </h3>
              <h6>
                AWESOME planing
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="images/multiple-users-silhouette.png" alt="" />
            </div>
            <div class="detail-box">
              <h3>
                4500+
              </h3>
              <h6>
                CLIENTS
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="img-box">
              <img src="images/bar-chart.png" alt="" />
            </div>
            <div class="detail-box">
              <h3>
                19000+
              </h3>
              <h6>
                DAILY business
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end why section -->
  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <h2>
        What Our Clients Says
      </h2>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_text">
                <p>
                  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
              </div>
              <div class="detail-box">
                <div class="img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="name">
                  <h5>
                    Joans Mark
                  </h5>
                  <p>
                    cal
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_text">
                <p>
                  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
              </div>
              <div class="detail-box">
                <div class="img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="name">
                  <h5>
                    Joans Mark
                  </h5>
                  <p>
                    cal
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_text">
                <p>
                  psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                </p>
              </div>
              <div class="detail-box">
                <div class="img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="name">
                  <h5>
                    Joans Mark
                  </h5>
                  <p>
                    cal
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>
  <!-- end client section -->

  @include('layouts.footer')

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>