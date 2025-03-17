<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        WebService
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
    <style>
        /* Cambiar el color de las bolitas activas */
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            /* Color de fondo para la página activa */
            border-color: #007bff;
            /* Color del borde de la bolita activa */
        }

        /* Cambiar el color de las bolitas no activas */
        .pagination .page-item .page-link {
            background-color: #f1f1f1;
            /* Color de fondo para las bolitas no activas */
            border-color: #ddd;
            /* Color del borde de las bolitas no activas */
            color: #333;
            /* Color del texto */
        }

        /* Cambiar el color de las bolitas cuando pasan el mouse sobre ellas */
        .pagination .page-item:hover .page-link {
            background-color: #4c657f;
            border-color: #007bff;
            color: white;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .form-control.custom-input {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }

        .form-control.custom-input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 8px rgba(108, 99, 255, 0.3);
        }

        label {
            color: #555;
            font-weight: 500;
        }

        .btn-info {
            background-color: #6c63ff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-info:hover {
            background-color: #5b52e6;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
        }

        .form-row .form-group {
            margin-bottom: 15px;
        }

        .card-body {
            padding: 2rem;
        }


        .lista {
            height: 45px;
            width: auto;
            /* Ajusta el valor según el diseño deseado */
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }



        #confirmacion {
            background-color: #dff0d8;
            /* Color de fondo de éxito */
            color: #3c763d;
            /* Color de texto */
            border: 1px solid #3c763d;
            /* Borde de éxito */
        }

        /* Estilo del modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semitransparente */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            /* Asegura que esté sobre el resto del contenido */
        }

        /* Estilo de la tarjeta modal */
        .modal-card {
            width: 300px;
            background-color: #dff0d8;
            /* Color de fondo de éxito */
            color: #3c763d;
            /* Color de texto */
            border: 1px solid #3c763d;
            /* Borde de éxito */
            padding: 20px;
            border-radius: 8px;
            position: relative;
        }

        /* Estilo del botón de cierre (X) */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 20px;
            color: #3c763d;
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

<body class="g-sidenav-show  bg-gray-100" onload="renderTable()">
    @include('layouts.profesionalLayouts.navbarVertical')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.profesionalLayouts.navbar')


        <!-- End Navbar -->

        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">


                    <div class="card my-4 shadow-lg border-0">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Agregar Categoría al Servicio</h6>
                            </div>
                        </div>
                        <div class="card-body px-4 pb-4">
                        </div>
                    </div>

                    <div class="container d-flex justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <!-- Card conteniendo el formulario -->
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center mb-4">Formulario de Servicio y Categorías</h5>
                                        <form id="formulario" onsubmit="mostrarConfirmacion(event)">
                                            <div class="form-row me-2">

                                                <div class="form-group col-md-4 me-6">
                                                    <label for="cliente" class="text-black fw-bold">
                                                        Servicio</label>
                                                    <select id="servicio" class="lista">
                                                        <option selected>Seleccionar</option>

                                                        <option>Reparación de fugas</option>
                                                        <option>Instalación de grifos y lavabos</option>
                                                        <option>Mantenimiento de sistemas de drenaje</option>
                                                        <option>Desatasco de tuberías</option>

                                                    </select>
                                                </div>
                                                <br>


                                                <div class="form-group col-md-4 me-2">
                                                    <label for="categoria" class="text-black fw-bold">Categoría</label>
                                                    <select id="categoria" class="lista">
                                                        <option selected>Seleccionar</option>
                                                        <option>Plomería</option>
                                                        <option>Electricidad</option>
                                                        <option>Carpintería</option>
                                                        <option>Jardinería</option>
                                                        <option>Limpieza</option>
                                                        <option>Pintura</option>
                                                        <option>Cerrajería</option>
                                                        <option>Reparación de electrodomésticos</option>
                                                        <option>Servicio de mudanza</option>
                                                        <option>Albañilería</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info">Enviar</button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- Card de confirmación modal, inicialmente oculta -->
                        <div id="confirmacionModal" class="modal-overlay" style="display: none;">
                            <div class="card modal-card">
                                <div class="card-body">
                                    <button type="button" class="close-btn" onclick="cerrarConfirmacion()">×</button>
                                    <h5 class="card-title text-center">¡Agregado Correctamente!</h5>
                                    <p class="card-text text-center">La categoría ha sido agregada con éxito.</p>
                                </div>
                            </div>
                        </div>
                    </div>






    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-symbols-rounded py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-symbols-rounded">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark active" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2  active ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-info w-100"
                    href="https://www.creative-tim.com/product/material-dashboard-pro">Free
                    Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script>
        function mostrarConfirmacion(event) {
            event.preventDefault(); // Evita el envío del formulario

            // Muestra el modal de confirmación
            document.getElementById("confirmacionModal").style.display = "flex";
        }

        function cerrarConfirmacion() {
            // Oculta el modal de confirmación
            document.getElementById("confirmacionModal").style.display = "none";
        }
    </script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="../../https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>