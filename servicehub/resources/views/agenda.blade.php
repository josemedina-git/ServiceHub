<!DOCTYPE html>
<html lang="es">

<head>
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
    .agenda-content {
      padding: 5px 10px;
      flex: 1;
      /* Permite que el contenido ocupe el espacio disponible */
    }

    .agenda-title,
    .agenda-status {
      padding: 5px 10px;
      flex: 0 0 20%;
      /* Mantiene un ancho del 20% */
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
      flex-wrap: wrap;
      /* Permite que los elementos se ajusten en varias líneas */
    }

    .service-list li a {
      font-weight: bold;
      color: black;
    }

    .delete-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      flex: 0 0 10%;
      /* Mantiene un ancho del 10% */
    }

    @media (max-width: 768px) {

      .agenda-title,
      .agenda-status,
      .delete-btn {
        flex: 1 1 100%;
        /* En pantallas pequeñas, cada elemento ocupa el 100% */
        text-align: center;
        /* Centra el texto */
      }
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

<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      @include('layouts.navbar')
    </header>
  </div>

  <!-- Section de servicios agendados -->
  <section class="agenda_section layout_padding">
    <div class="container">
      <h2 class="text-center" style="font-weight: bold; margin-bottom: 50px;">Servicios Agendados</h2>
      <ul class="service-list">
          @forelse ($agendas as $agenda)
          <li>
            <a href="#" class="agenda-title">{{ $agenda->service->NameService }}</a>
            <p class="agenda-status">{{ $agenda->AgendaStatus }}</p>
            <p class="agenda-content">| {{ \Carbon\Carbon::parse($agenda->DateAgenda)->format('d/m/Y') }} - {{ $agenda->service->Description }}</p>
          </li>
        @empty
          <li>
            <p>No tienes servicios agendados.</p>
          </li>
        @endforelse
      </ul>
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