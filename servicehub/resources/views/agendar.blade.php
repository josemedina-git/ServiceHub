<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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

      .agenda-content {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        height: auto;
        width: 70%;
      }

      .search-icon {
        color: white;
        cursor: pointer;
      }

      .service-list {
        list-style-type: none;
        padding: 0;
      }

      .service-list li {
        background-color: #f8f9fa;
        padding: 15px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .service-list li a {
        font-weight: bold;
        color: black;
        padding-left: 35px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        height: auto;
        width: 20%;
      }

      .service-list li i {
        padding-left: 35px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        height: auto;
        width: 10%;
      }

      .favorite-icon {
        color: yellow;
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
  <section class="favorite_section layout_padding text-center">
    <div class="container">
    <h2 class="text-center" style="font-weight: bold; margin-bottom: 50px;">
    Agendar servicio: {{ $service->NameService }}
    </h2>

    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->IdService }}">

        <div class="form-group">
          <label for="agendaFecha">Fecha para la Agenda</label>
          <input type="datetime-local" class="form-control" id="agendaFecha" name="agendaFecha" required>
        </div>

        <div class="form-group">
          <label for="nota">Nota</label>
          <input type="text" class="form-control" id="nota" name="nota" placeholder="Escribe una nota" required>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #884cdc;">Agendar</button>
    </form>

    </div>
  </section>


  <br>
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