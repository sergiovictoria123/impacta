<div class="bg-primary text-light text-center footer-font-size p-2">
    MÁS PUBLICIDAD! <strong>SUBSCRÍBETE A NUESTRA NEWSLETTER</strong> <a href="https://impactacomunicacion.com/" class="text-white" target="blank">Clic aquí</a>
</div>
<nav class="navbar navbar-expand-lg bg-light p-2">
    <div class="container-fluid">
        <!-- Primera columna: Logo -->
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('storage/images/logos/impacta1.svg') }}" alt="Logo Impacta" style="height: 20px;">
        </a>

        <!-- Botón del navbar para pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del navbar colapsable -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
            <!-- Segunda columna: Opciones del menú -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} text-primary" href="/about">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }} text-primary" href="/services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }} text-primary" href="/projects">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} text-primary" href="/contact">Contacto</a>
                </li>
            </ul>

            <!-- Tercera columna: Iconos de redes sociales -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/impactabranding/" target="_blank">
                        <img src="{{ asset('storage/images/logos/instagram_nav.svg') }}" alt="Logo Instagram" width="30" height="24" class="instagram-logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/impactabranding" target="_blank">
                        <img src="{{ asset('storage/images/logos/facebook_nav.svg') }}" alt="Logo Facebook" width="30" height="24">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>