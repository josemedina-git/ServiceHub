<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="{{route('Professionaldashboard')}}">
            <img src="../images/logosh.jpeg" navbar-brand-img width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Profesional</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('Professionaldashboard') }}">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('TableProfessional')}}">
                    <i class="material-symbols-rounded opacity-5">person</i>
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('billetera')}}">
                    <i class="material-symbols-rounded opacity-5">receipt_long</i>
                    <span class="nav-link-text ms-1">Billetera</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('servicios')}}">
                    <i class="material-symbols-rounded opacity-5">table_view</i>
                    <span class="nav-link-text ms-1">Servicios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('registrarServicio') }}">
                    <i class="material-symbols-rounded opacity-5">table_view</i>
                    <span class="nav-link-text ms-1">Registrar servicio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('serviceCategory') }}">
                    <i class="material-symbols-rounded opacity-5">table_view</i>
                    <span class="nav-link-text ms-1">Agenda</span>
                </a>
            </li>
        </ul>
    </div>
</aside>