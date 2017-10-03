<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WhyBuy') }}</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="page-header">
            <nav class="nav-wrapper">
                <div class='row'><a href="/" class="brand-logo center"><img src="../images/logocabeca.png" alt="logotipo"></a>
                    <div class="col s4">
                        <ul id="nav-mobile">
                            <li><a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a></li>

                            <ul id="slide-out" class="side-nav">
                                <!-- aqui é as informações do usuario -->
                                <li>
                                    <div class="user-view">
                                        <div class="background">
                                            <!-- aqui tu bota uma imagem ou nao -->
                                            <img src="{{ asset('images/victor.jpg')}}">
                                        </div>
                                        <!-- aqui são as informações do usuario -->
                                        @isset($mainPerfil->perfil->image)
                                        <img class="circle responsive-img" src="{{asset('/images/perfils')}}/{{$mainPerfil->perfil->image}}"></a>
                                        @endisset @isset($mainPerfil->nome)
                                        <a href="#!name"><span class="white-text name">{{$mainPerfil->name}}</span></a> @endisset
                                        @empty($mainPerfil->nome)
                                        <a href="{{route('login')}}"><span class="white-text">Faça o Login</span>
                                        @endempty
                                        @isset($mainPerfil->email)
                                        <a href="#!email"><span class="white-text email">{{$mainPerfil->email}}</span></a>                                        @endisset @empty($mainPerfil->email)
                                        <a href="{{route('register')}}"><span class="white-text">Ou registre-se</span>
                                        @endempty
    </div></li>
    <!-- aqui são os links -->
    <li><a href="/"><i class="material-icons">home</i>Home</a></li>
                                <li><a href="/sobrenos"><i class="material-icons">group</i>Sobre Nós</a></li>
                                <li><a href="/suporte"><i class="material-icons">contact_mail</i>Suporte</a></li>
                            </ul>
                        </ul>
                        </div>
                        <div class="col s8 right-align">
                            <div class="row">
                                @if (Auth::guest())
                                <ul id="nav-mobile" class="right hide-and-down">
                                    <a class='dropdown-button btn orange darken-4' data-activates='dropdown1'>Login ou Cadastro</a>
                                    <ul id='dropdown1' class='dropdown-content'>
                                        <li><a href="{{ route('login') }}">Entre</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                                    </ul>
                                </ul>
                                @else
                                <a class='dropdown-button btn orange darken-4' href='#' data-activates='dropdown1'>Olá {{ Auth::user()->name }}!</a>
                                <ul id='dropdown1' class='dropdown-content'>
                                    <li><a href="/perfil">
                                            cadastro de Perfil
                                        </a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
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
<<<<<<< HEAD
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Contatos Pessoais</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Brunoguima99">Bruno Guimarães</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/luana.caetanorondon">Luana Caetano</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100004115914623">Filicio Rocha</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/gabriel.jacinto.16">Gabriel Pereira</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/victorhugo.martonifranco">Victor Hugo Martoni</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100005638779563">Gustavo Borborena</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/slepwalkingmi">Milena Cavallaro</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/juuhhferreira">Juliana Ferreira</a></li>
                        </ul>
=======
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2017 WhyBuy - 3ºEmia - Etec Pedro Ferreira Alves
                        <a class="grey-text text-lighten-4 right" href="https://play.google.com/store/apps?hl=pt_BR">Experimente também em seu Smartphone!</a>
>>>>>>> 99d136fe8c8445fb9003775b3e9cad869e7cd2be
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 WhyBuy - 3ºEmia - Etec Pedro Ferreira Alves
                    <a class="grey-text text-lighten-4 right" href="#!">Experimente também em seu Smartphone!</a>
                </div>
            </div>
        </footer>
        </div>
        <script>
            $(".button-collapse").sideNav();
        </script>
</body>

</html>