

<nav id="navs" class="cd-auto-hide-header navbar navbar-expand-lg sticky-top navbar-light">
    <div class="container-fluid">
        <div class="navbar-collapse collapse nav-content order-2">
            <ul class="nav navbar-nav">
                <li class="nav-item prod">
                    <a class="nav-link {{ Request::is('productos*') ? 'active' : null }}" href="{{route('productos')}}">PRODUCTOS</a>
                </li>
                <li class="nav-item proy">
                    <a class="nav-link {{ Request::is('proyectos*') ? 'active' : null }}" href="{{route('proyectos')}}">PROYECTOS</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row  order-1 order-md-2 ">
            <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : null }}" href="{{route('home')}}"><img style="width: 200px;" src="{{asset('frontend/img/logos/logo-seguiar.png')}}"></a></li>

        </ul>

        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item cont">
                    <a class="nav-link {{ Request::is('contacto*') ? 'active' : null }}" href="{{route('contacto')}}">CONTACTO</a>
                </li>
                <li class="nav-item noti">
                    <a class="nav-link {{ Request::is('noticias*') ? 'active' : Request::is('noticia*') ? 'active' : null }}" href="{{route('noticias')}}">NOTICIAS</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>
