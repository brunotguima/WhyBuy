<!DOCTYPE html>
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
    </head>
    <body>
        <div id="app">
            <header class="page-header">
                <nav class="nav-wrapper">
                    <div class='row'>
                        <div class="col s3"><a href="/" class="brand-logo"><img src="images/logotipo.png" alt="Logotipo" height='64' width="120"></a></div>
                        <div class="col s4"><ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/downloads">Download</a></li>
                                <li><a href="/sobrenos">Sobre Nós</a></li>
                                <li><a href="/suporte">Suporte</a></li>

                            </ul></div>
                        <div class="col s5 right-align">
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
                            </li>
                            @endif
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
                            <p class="grey-text text-lighten-4">Blablabla</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Blablabla</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2017 WhyBuy - 3ºEmia - Etec Pedro Ferreira Alves
                        <a class="grey-text text-lighten-4 right" href="#!">blablabla</a>
                    </div>
                </div>            
            </footer>
        </div>
    </body>
</html>
