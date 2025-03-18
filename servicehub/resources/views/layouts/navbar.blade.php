<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-lg-8 d-flex align-items-center">
        <img src="{{ asset('images/bannerservicehub.jpeg') }}" alt="ServiceHub" style="height: 50px; margin-right: 20px;">
        <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar servicio" aria-label="Search" id="searchInput">
                <span class="btn my-2 my-sm-0 nav_search-btn search-icon" onclick="performSearch()"><i class="fas fa-search"></i></span>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}"> <i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('favoritos') }}"> <i class="fas fa-heart"></i> Servicios Favoritos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agenda') }}"> <i class=" fas fa-receipt"></i> Servicios Agendados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactanos') }}"> <i class=" fas fa-cogs"></i>Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> <i class=" fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('singup') }}"> <i class=" fas fa-user-plus"></i> Registrarse</a>
                        </li>
                        @auth
                        <li class="nav-link">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>