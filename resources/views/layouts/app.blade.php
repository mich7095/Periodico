<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Noticia')</title>

    <!-- Styles -->

    <link href="{{ asset ('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset ('css/main.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<header>
  <a href="/" title="La Opinión de Poza Rica" rel="home">
    <div class="header-image-wrap"><img src="http://www.laopinion.net/wp-content/uploads/2016/06/LOCab.png" class="header-image" width="1600" height="250" alt="La Opinión de Poza Rica"></div>
  </a>

</header>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
              </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <li><a href="opinion.html">La opinión</a></li>
<!--
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="categoria/poza-rica.html">Poza Rica</a></li>
                          <li><a href="categoria/papantla.html">Papantla</a></li>
                          <li><a href="categoria/tuxpan.html">Tuxpan</a></li>
                          <li><a href="categoria/huasteca.html">Huasteca</a></li>
                          <li><a href="categoria/xalapa.html">Xalapa</a></li>
                          <li class="divider"></li>
                          <li><a href="categoria/justicia.html">Justicia</a></li>
                          <li class="divider"></li>
                          <li><a href="categoria/estatal.html">Estatal</a></li>
                          <li class="divider"></li>
                          <li><a href="categoria/nacional.html">Nacional</a></li>
                          <li class="divider"></li>
                          <li><a href="categoria/extras.html">Extras</a></li>
                        </ul>

                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Extremo
                          <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="categoria/atletismo.html">Atletismo</a></li>
                            <li><a href="categoria/beisbol.html">Beisbol</a></li>
                            <li><a href="categoria/futbol.html">Futbol</a></li>
                            <li><a href="categoria/futbol-infantil.html">Futbol infantil</a></li>
                            <li><a href="categoria/liga-mx.html">Liga MX</a></li>
                            <li><a href="categoria/otros-deportes.html">Otros deportes</a></li>
                          </ul>
                        </li>
                        <li><a href="cotorreo.html">Cotorreo</a></li>
                        <li><a href="viernes-social.html">Viernes social</a></li>
                        <li><a href="show-time.html">Show time</a></li>
                        <li><a href="opinion.html">La opinión</a></li>-->
                      </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="active"><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <div class="container">
          @yield ('container')
        </div>
    </div>

    <!-- Scripts -->

    <script src="{{ asset ('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>
