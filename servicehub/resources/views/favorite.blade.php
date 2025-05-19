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
      body {
        font-family: 'Poppins', sans-serif;
      }

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

      @media (max-width: 768px) {
        .agenda-content {
          width: 100%;
        }
        .service-list li {
          flex-direction: column;
          align-items: flex-start;
        }
        .service-list li a {
          width: 100%;
          padding: 5px 0;
        }
      }

      @media (max-width: 576px) {
        .search-icon {
          font-size: 14px;
        }
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
  <section class="favorite_section layout_padding">
    <div class="container">
      <h2 class="text-center" style="font-weight: bold; margin-bottom: 50px;">Servicios Favoritos</h2>
      <ul class="service-list">
        <li>
          <a href="gardening.html">Jardinería</a> <p class="agenda-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellendus vero fuga repellat distinctio minima vel quos nulla hic! Cum reiciendis deleniti iste saepe, eligendi minima soluta sequi quos molestias!</p>
          <i class="fas fa-star favorite-icon" onclick="toggleFavorite(this)"></i>
        </li>
        <li>
          <a href="plumb.html">Plomería</a> <p class="agenda-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellendus vero fuga repellat distinctio minima vel quos nulla hic! Cum reiciendis deleniti iste saepe, eligendi minima soluta sequi quos molestias!</p>
          <i class="fas fa-star favorite-icon" onclick="toggleFavorite(this)"></i>
        </li>
        <li>
          <a href="cleaning.html">Limpieza</a> <p class="agenda-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellendus vero fuga repellat distinctio minima vel quos nulla hic! Cum reiciendis deleniti iste saepe, eligendi minima soluta sequi quos molestias!</p>
          <i class="fas fa-star favorite-icon" onclick="toggleFavorite(this)"></i>
        </li>
        <li>
          <a href="packing.html">Mudanza</a> <p class="agenda-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellendus vero fuga repellat distinctio minima vel quos nulla hic! Cum reiciendis deleniti iste saepe, eligendi minima soluta sequi quos molestias!</p>
          <i class="fas fa-star favorite-icon" onclick="toggleFavorite(this)"></i>
        </li>
      </ul>
    </div>
  </section>

  <br><br><br><br><br>
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
  