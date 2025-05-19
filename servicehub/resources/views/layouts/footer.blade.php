<div class="footer_bg">
    <!-- info section -->
    <section class="info_section py-5">
        <div class="container text-center">
            <h3>ServiceHub</h3>
        </div>
        <div class="container info_content mt-4">
            <div class="row">
                <!-- Navegacion -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <h5 class="text-center">Navegación</h5>
                    <ul class="list-unstyled text-center">
                        @guest
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('contactanos') }}">Contáctanos</a></li>
                        <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                        <li><a href="{{ route('sign-in-professional') }}">Cuenta Profesionista</a></li>
                        @endguest
                        @auth
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('contactanos') }}">Contáctanos</a></li>
                        <li><a href="{{ route('favoritos') }}">Servicios Favoritos</a></li>
                        <li><a href="{{ route('agenda') }}">Servicios Agendados</a></li>
                        <li><a href="{{ route('updateprofile') }}">Cuenta</a></li>
                        <li><a href="{{ route('sign-in-professional') }}">Cuenta Profesionista</a></li>
                        @endauth
                    </ul>
                </div>
                <!-- Servicios Populares -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <h5 class="text-center">Servicios Populares</h5>
                    <ul class="list-unstyled text-center">
                        <li><a href="{{ route('gardening') }}">Jardinería</a></li>
                        <li><a href="{{ route('plumb') }}">Plomería</a></li>
                        <li><a href="{{ route('cleaning') }}">Limpieza de Hogar</a></li>
                        <li><a href="{{route('packing')}}">Mudanza</a></li>
                        <li><a href="{{ route('renovation') }}">Obras y Remodelaciones</a></li>
                    </ul>
                </div>
                <!-- Suscripción Premium -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <h5 class="text-center">Suscripción Premium</h5>
                    <ul class="list-unstyled text-center text-white">
                        <li>Promocionamos tu servicio</li>
                        <li>Disfruta de navegación sin anuncios</li>
                        <li>Recomendaciones personalizadas</li>
                        <li>Ofertas de servicios exclusivas</li>
                        <li>(Profesionista)</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                <div class="social-box mb-4 mb-lg-0 text-center">
                    <a href="#"><img src="{{ asset('images/fb.png') }}" alt="Facebook" /></a>
                    <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter" /></a>
                    <a href="#"><img src="{{ asset('images/linkedin1.png') }}" alt="LinkedIn" /></a>
                    <a href="#"><img src="{{ asset('images/instagram1.png') }}" alt="Instagram" /></a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <section class="container-fluid footer_section text-center py-3 bg-dark text-white">
        <p>© 2019 All Rights Reserved By <a href="https://html.design/" class="text-white">Free Html Templates</a></p>
    </section>
</div>