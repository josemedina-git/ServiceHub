<!DOCTYPE html><html>
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
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h2>
        Contactanos
      </h2>
      <p>
        psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
    </div>
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">Name</label>
            <input type="text" class="form-control" id="inputName4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4"/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber4">Phone number</label>
            <input type="tel" class="form-control" id="inputNumber4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Select Service</label>
            <select id="inputState" class="form-control">
              <option selected=""></option>
              <option>Jardineria</option>
              <option>Plomeria</option>
              <option>Mudanza</option>
              <option>Remodelaciones</option>
              <option>Limpieza</option>

            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="inputMessage">Message</label>
          <input type="text" class="form-control" id="inputMessage" placeholder=""/>
        </div>
    </div>

    <div class="d-flex justify-content-center">
      <button type="submit" class="">Send</button>
    </div>
    </form>
    
  </section>
  <!-- end contact section -->
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
  