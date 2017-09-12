<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'WhyBuy') }}</title>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header class="page-header">
                <nav class="nav-wrapper">
                    <div class='row'><a href="/" class="brand-logo center"><img src="images/logocabeca.png" alt="Logotipo" height='100' width="100"></a>
                        <div class="col s4"><ul id="nav-mobile" class="left hide-on-med-and-down">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/sobrenos">Sobre Nós</a></li>
                                <li><a href="/suporte">Suporte</a></li>
                            </ul></div>
                        <div class="col s8 right-align">
                            <div class="row">
                                @if (Auth::guest())
                                <a class='dropdown-button btn orange darken-4'  data-activates='dropdown1'>Login ou Cadastro</a>
                                <ul id='dropdown1' class='dropdown-content'>
                                    <li><a href="{{ route('login') }}">Entre</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                                </ul>
                                @else
                                <a class='dropdown-button btn orange darken-4' href='#' data-activates='dropdown1'>Olá {{ Auth::user()->name }}!</a>
                                <ul id='dropdown1' class='dropdown-content'>
                                    <li><a href="">
                                            Painel de Controle
                                        </a></li>
                                    <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                            Sair
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                                @endif
                            </div>  
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer class="page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Projeto WhyBuy</h5>
                            <p class="grey-text text-lighten-4">O projeto é desenvolvido por alunos do 3ºEMIA!</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Contatos Pessoais</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3"     href="https://www.facebook.com/Brunoguima99">Bruno Guimarães</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/luana.caetanorondon">Luana Caetano</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100004115914623">Filicio Rocha</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/gabriel.jacinto.16">Gabriel Pereira</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/victorhugo.martonifranco">Victor Hugo Martoni</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100005638779563">Gustavo Borborena</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/slepwalkingmi">Milena Cavallaro</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/juuhhferreira">Juliana Ferreira</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2017 WhyBuy - 3ºEmia - Etec Pedro Ferreira Alves
                        <a class="grey-text text-lighten-4 right" href="#!">Baixe o App na Google Play!</a>
                    </div>
                </div>            
            </footer>
        </div>
    </body>
</html>
