<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>
        Material Dashboard 3 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
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

<body class="g-sidenav-show  bg-gray-100">

    @include('layouts.profesionalLayouts.navbarVertical')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.profesionalLayouts.navbar')

        <!-- End Navbar -->
        <div class="container-fluid py-2">



            <div class="row">

                <div class="d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-xl-6 mb-xl-0 mb-4">
                                <div class="card bg-transparent shadow-xl">
                                    <div class="overflow-hidden position-relative border-radius-xl">
                                        <img src="img/illustrations/pattern-tree.svg"
                                            class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100"
                                            alt="pattern-tree">
                                        <span class="mask bg-gradient-dark opacity-10"></span>
                                        <div class="card-body position-relative z-index-1 p-3">
                                            <i class="material-symbols-rounded text-white p-2">wifi</i>
                                            <h5 class="text-white mt-4 mb-5 pb-2">
                                                4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
                                            </h5>
                                            <div class="d-flex">
                                                <div class="me-4">
                                                    <p class="text-white text-sm opacity-8 mb-0">Propietario</p>
                                                    <h6 class="text-white mb-0">Juan Pérez López</h6>
                                                </div>
                                                <div>
                                                    <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                                                    <h6 class="text-white mb-0">11/26</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <div class="card">
                                            <div class="card-header mx-4 p-3 text-center">
                                                <div
                                                    class="icon icon-shape icon-lg bg-gradient-dark shadow text-center border-radius-lg">
                                                    <i class="material-symbols-rounded opacity-10">account_balance</i>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 p-3 text-center">
                                                <h6 class="text-center mb-0">Mensual</h6>
                                                <span class="text-xs">Suscripción Actual</span>
                                                <br> <span class="text-xs">Estado: Activa </span>
                                                <hr class="horizontal dark my-3">
                                                <h5 class="mb-0">+$100</h5>
                                                <span class="text-xs">Inicio: 06/01/2024 </span>
                                                <br>
                                                <span class="text-xs">Vencimiento: 07/01/2024 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div class="card">
                                            <div class="card-header mx-4 p-3 text-center">
                                                <div
                                                    class="icon icon-shape icon-lg bg-gradient-dark shadow text-center border-radius-lg">
                                                    <i
                                                        class="material-symbols-rounded opacity-10">account_balance_wallet</i>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 p-3 text-center">
                                                <h6 class="text-center mb-0">Mastercard Débito</h6>
                                                <span class="text-xs">Método de Pago</span><br>
                                                <span class="text-xs">Entidad: BBVA</span>
                                                <hr class="horizontal dark my-3">
                                                <h5 class="mb-0">$2955.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botones alineados -->
                        <div class="d-flex justify-content-center mt-3">
                            <div class="me-2">
                                <script async src="https://js.stripe.com/v3/buy-button.js"></script>
                                <stripe-buy-button
                                    buy-button-id="buy_btn_1QTz6yDsXAJgcmBK70ajkVg7"
                                    publishable-key="pk_test_51QP6yGDsXAJgcmBKYZ5kLrlwbJlRfWi0yExE4ofibew3SXSor2xD6Fz5pvuRJxBTRLoFyA8JIUCHA1PQDuuxNz3H00V5LFNrRl">
                                </stripe-buy-button>
                            </div>
                            <div>
                                <script async src="https://js.stripe.com/v3/buy-button.js"></script>
                                <stripe-buy-button
                                    buy-button-id="buy_btn_1QTz9yDsXAJgcmBKbUtoR4VD"
                                    publishable-key="pk_test_51QP6yGDsXAJgcmBKYZ5kLrlwbJlRfWi0yExE4ofibew3SXSor2xD6Fz5pvuRJxBTRLoFyA8JIUCHA1PQDuuxNz3H00V5LFNrRl">
                                </stripe-buy-button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12 mt-4">

                    <div class="card my-4 shadow-lg border-0">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabla de Facturas</h6>
                            </div>
                        </div>

                        <div class="card-body px-4 pb-4">
                            <!-- Filtros y búsqueda -->
                            <div class="row mb-4">
                                <!-- Filtro de registros por página -->
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 text-muted">Registros por página:</h6>
                                        <input id="recordsPerPage" type="number" value="5" min="1"
                                            class="form-control form-control-sm shadow-sm"
                                            style="width: 90px; border-radius: 8px; border: 2px solid #007bff;">
                                    </div>
                                </div>

                                <!-- Búsqueda de registros -->
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 text-muted">Buscar:</h6>
                                        <input id="searchInput" type="text"
                                            class="form-control form-control-sm shadow-sm ms-3"
                                            placeholder="Buscar por Número de Factura"
                                            style="border-radius: 8px; border: 2px solid #007bff;">
                                    </div>
                                </div>

                                <!-- Dropdown de filtros -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center justify-content-md-end">
                                        <a class="dropdown-toggle btn btn-warning" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Filtros
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-left"
                                            aria-labelledby="navbarDropdownMenuLink"
                                            style="border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                            <li>
                                                <div class="input-group mt-2 mx-2">
                                                    <div class="form-outline w-auto" data-mdb-input-init>
                                                        <input type="search" id="search-input-dropdown"
                                                            class="form-control"
                                                            style="border-radius: 8px; border: 2px solid #ffffff; padding: 8px; background-color: #f9f9f9; transition: all 0.3s ease;" />
                                                        <label class="form-label" for="search-input-dropdown">Selecciona
                                                            un filtro:</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" style="border-color: #007bff;" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    style="border-radius: 8px; padding: 10px 15px; font-size: 14px; transition: background-color 0.3s ease;">
                                                    Buscar por Tipo
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    style="border-radius: 8px; padding: 10px 15px; font-size: 14px; transition: background-color 0.3s ease;">
                                                    Buscar por Estado
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        onclick="sortTable(0)">
                                        Factura <span class="material-symbols-rounded arrow"
                                            id="arrow-factura">expand_more</span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        onclick="sortTable(1)">
                                        Suscripción <span class="material-symbols-rounded arrow"
                                            id="arrow-suscripcion">expand_more</span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center"
                                        onclick="sortTable(2)">
                                        Estado <span class="material-symbols-rounded arrow"
                                            id="arrow-estado">expand_more</span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        onclick="sortTable(3)">
                                        Importe <span class="material-symbols-rounded arrow"
                                            id="arrow-importe">expand_more</span>
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        onclick="sortTable(4)">
                                        Método de Pago <span class="material-symbols-rounded arrow"
                                            id="arrow-metodoPago">expand_more</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                        <ul class="pagination justify-content-center"></ul>

                        <script>
                            //busqueda
                            function filterUsers(searchTerm) {
                                return usuarios.filter(usuario => {
                                    return usuario.factura.toLowerCase().includes(searchTerm.toLowerCase());
                                });
                            }


                            //Ordenamiento        
                            let currentSort = {
                                column: null,
                                order: 'asc' // Puede ser 'asc' para ascendente y 'desc' para descendente
                            };

                            function sortTable(columnIndex) {
                                let direction = 1;
                                const arrow = document.querySelector(`#arrow-${['factura', 'suscripcion', 'estado', 'importe', 'metodoPago'][columnIndex]}`);

                                // Alternar dirección de la flecha
                                if (arrow.innerHTML === 'expand_more') {
                                    arrow.innerHTML = 'expand_less';
                                    direction = 1;
                                } else {
                                    arrow.innerHTML = 'expand_more';
                                    direction = -1;
                                }

                                usuarios.sort((a, b) => {
                                    const aValue = Object.values(a)[columnIndex];
                                    const bValue = Object.values(b)[columnIndex];

                                    if (typeof aValue === 'string') {
                                        return direction * aValue.localeCompare(bValue);
                                    }
                                    return direction * (aValue - bValue);
                                });

                                renderTable();
                            }


                            function updateArrows(colIndex) {
                                const headers = document.querySelectorAll('th span');
                                headers.forEach(header => {
                                    const arrow = header.querySelector('.material-symbols-rounded');
                                    if (header.id.endsWith('Sort')) {
                                        if (parseInt(header.id.replace('Sort', '')) === colIndex) {
                                            arrow.textContent = currentSort.order === 'asc' ? 'keyboard_arrow_up' : 'keyboard_arrow_down';
                                        } else {
                                            arrow.textContent = 'keyboard_arrow_down';
                                        }
                                    }
                                });
                            }



                            const usuarios = [{
                                    factura: 'FAC007',
                                    suscripcion: 'Mensual',
                                    estado: 'Activa',
                                    importe: 100,
                                    metodoPago: 'Tarjeta debito/credito'
                                },
                                {
                                    factura: 'FAC006',
                                    suscripcion: 'Mensual',
                                    estado: 'Vencida',
                                    importe: 100,
                                    metodoPago: 'Tarjeta debito/credito'
                                },
                                {
                                    factura: 'FAC005',
                                    suscripcion: 'Anual',
                                    estado: 'Vencida',
                                    importe: 900,
                                    metodoPago: 'Paypal'
                                },
                                {
                                    factura: 'FAC004',
                                    suscripcion: 'Mensual',
                                    estado: 'Vencido',
                                    importe: 100,
                                    metodoPago: 'Tarjeta debito/credito'
                                },
                                {
                                    factura: 'FAC003',
                                    suscripcion: 'Gratis',
                                    estado: 'Vencida',
                                    importe: 0,
                                    metodoPago: 'N/A'
                                },
                                {
                                    factura: 'FAC002',
                                    suscripcion: 'Anual',
                                    estado: 'Vencida',
                                    importe: 900,
                                    metodoPago: 'Paypal'
                                },
                                {
                                    factura: 'FAC001',
                                    suscripcion: 'Anual',
                                    estado: 'Vencida',
                                    importe: 900,
                                    metodoPago: 'Paypal'
                                },
                            ];


                            //PAginacion de abajito
                            let currentPage = 1;
                            let recordsPerPage = 5; // Valor inicial

                            // Función para obtener los registros de la página actual
                            function getRecordsForPage(page, filteredUsers) {
                                const start = (page - 1) * recordsPerPage;
                                const end = page * recordsPerPage;
                                return filteredUsers.slice(start, end);
                            }

                            // Función para renderizar la tabla
                            // Modificar la función renderTable para filtrar antes de renderizar
                            function renderTable() {
                                const searchTerm = document.getElementById('searchInput').value;
                                const filteredUsers = filterUsers(searchTerm); // Filtrar los usuarios

                                const tableBody = document.querySelector('table tbody');
                                tableBody.innerHTML = ''; // Limpiar contenido previo

                                const recordsToShow = getRecordsForPage(currentPage, filteredUsers);
                                recordsToShow.forEach(usuario => {
                                    const row = `
            <tr> 
                <td class="text-xs font-weight-bold mb-0">${usuario.factura}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.suscripcion}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.estado}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.importe}</td>
                <td class="text-xs font-weight-bold mb-0">${usuario.metodoPago}</td>

                
            </tr>
        `;
                                    tableBody.innerHTML += row;
                                });

                                // Actualizar la paginación
                                updatePagination(filteredUsers);
                            }
                            // Función para actualizar la paginación
                            function updatePagination(filteredUsers) {
                                const totalPages = Math.ceil(filteredUsers.length / recordsPerPage);
                                const pagination = document.querySelector('.pagination');
                                pagination.innerHTML = '';

                                // Botón de "Anterior"
                                pagination.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="javascript:;" aria-label="Previous" onclick="changePage(currentPage - 1)">
                <span class="material-symbols-rounded">keyboard_arrow_left</span>
            </a>
        </li>
    `;

                                // Páginas numéricas
                                for (let i = 1; i <= totalPages; i++) {
                                    pagination.innerHTML += `
            <li class="page-item ${currentPage === i ? 'active' : ''}">
                <a class="page-link" href="javascript:;" onclick="changePage(${i})">${i}</a>
            </li>
        `;
                                }

                                // Botón de "Siguiente"
                                pagination.innerHTML += `
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link " href="javascript:;" aria-label="Next" onclick="changePage(currentPage + 1)">
                <span class="material-symbols-rounded">keyboard_arrow_right</span>
            </a>
        </li>
    `;
                            }
                            // Función para cambiar de página
                            function changePage(page) {
                                const totalPages = Math.ceil(usuarios.length / recordsPerPage);
                                if (page < 1 || page > totalPages) return;
                                currentPage = page;
                                renderTable();
                            }

                            // Evento para cambiar el número de registros por página
                            document.getElementById('recordsPerPage').addEventListener('input', (event) => {
                                recordsPerPage = parseInt(event.target.value) || 5; // Valor por defecto es 5 si no se ingresa un número
                                currentPage = 1; // Restablecer a la primera página
                                renderTable();
                            });

                            document.getElementById('searchInput').addEventListener('input', () => {
                                currentPage = 1; // Restablecer a la primera página
                                renderTable(); // Volver a renderizar la tabla con los filtros aplicados
                            });
                            renderTable();
                            // Inicializar la tabla al cargar la página
                            window.onload = () => renderTable(); // Asegura que la tabla se renderice correctamente al cargar
                        </script>


                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </main>

    <!--   Core JS Files   -->

    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>