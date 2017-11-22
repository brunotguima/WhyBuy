<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WhyBuy') }}</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
</head>
<body>
    <div id="app">
        <header class="page-header">
            <nav class="nav-wrapper">
                <div class='row'><a href="C:\Users\LABORATORIO\Desktop\WhyBuy\resources\views\home.blade.php"><img src="../images/logocabeca.png" alt="logotipo" class="brand-logo center"></a>
                    <div class="col s4">
                        <ul id="nav-mobile">
                            <li><a id="button-collapse" data-activates="slide-out" class=" button-collapse show-on-large"><i class="material-icons ">menu</i></a></li>

                            <ul id="slide-out" class="side-nav">
                                <!-- aqui é as informações do usuario -->
                                <li>
                                    <div class="user-view">
                                        <div class="background">
                                            <!-- aqui tu bota uma imagem ou nao -->
                                            <img src="{{ asset('images/laranja.jpg')}}">
                                        </div>
                                        <!-- aqui são as informações do usuario -->
                                        @isset($mainPerfil->perfil->image)
                                        <img class="circle responsive-img" src="{{asset('/images/perfils')}}/{{$mainPerfil->perfil->image}}">
                                        @endisset 
                                        @isset($mainPerfil->name)
                                        <a href="#!name"><span class="white-text name">{{$mainPerfil->name}}</span></a> 
                                        <a href="#!email"><span class="white-text email">{{$mainPerfil->email}}</span></a>                                       
                                        @endisset 
                                        @empty($mainPerfil->name)
                                        <a href="{{route('login')}}"><span class="white-text">Faça o Login</span>
                                        <a href="{{route('register')}}"><span class="white-text">Ou registre-se</span>
                                        @endempty
    </div>
</li>
    <!-- aqui são os links -->
                                <li><a href="/"><i class="material-icons">home</i>Página Inicial</a></li>
                                <li><a href="/sobrenos"><i class="material-icons">group</i>Sobre Nós</a></li>
                                <li><a href="/suporte"><i class="material-icons">contact_mail</i>Suporte</a></li>
                                <li class="divider"></li>
                                @if (Auth::check()) 
                                <li><a href="/perfil"><i class="material-icons">person</i>Seu Perfil</a></li>     
                                <li><a href="/empreendimentos"><i class="material-icons">shopping_basket</i>Seus Empreendimentos</a></li>                               
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"> <i class="material-icons">cancel</i>
                                            Sair
                                        </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                @endif
                            </ul>
                        </ul>
                        </div>
                        <nav>
                            <div class="nav-wrapper">
                                <ul id="nav-mobile" class="right">
                                    <li><a href='/maps'class="waves-effect waves-light btn-large card-panel orange darken-4">ACESSE O MAPA<i class="material-icons right">shop</i></a></li>
                                    
                                </ul>
                            </div>
                        </nav>
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
                        <h5 class="center-align" class="white-text">Projeto WhyBuy</h5>
                        <li class="divider"></li>
                        <p class="center-align" class="grey-text text-lighten-4">O projeto foi desenvolvido para facilitar a inclusão e promover novas lojas físicas, que hoje vem perdendo espaço para lojas virtuais ou físicas que já são reconhecidas.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="center-align" class="white-text" >Contato</h5>
                        <li class="divider"></li>
                        
                        <ul>
                        <div class="row">
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/Brunoguima99"> <i class="tiny material-icons">account_circle</i> Bruno G.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/luana.caetanorondon"> <i class="tiny material-icons">account_circle</i> Luana C.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/profile.php?id=100004115914623"> <i class="tiny material-icons">account_circle</i> Filicio R.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/gabriel.jacinto.16"> <i class="tiny material-icons">account_circle</i> Gabriel P.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/victorhugo.martonifranco"> <i class="tiny material-icons">account_circle</i> Victor H.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/profile.php?id=100005638779563"> <i class="tiny material-icons">account_circle</i> Gustavo B.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/slepwalkingmi"> <i class="tiny material-icons">account_circle</i> Milena C.</a></li>
                            <li><a class="grey-text text-lighten-3 col s6" href="https://www.facebook.com/juuhhferreira"> <i class="tiny material-icons">account_circle</i> Juliana F.</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 WhyBuy - 3ºEmia - Etec Pedro Ferreira Alves
                    <a class="grey-text text-lighten-4 right" href="#!">Experimente em seu Smartphone!</a>
                </div>
            </div>
        </footer>
        </div>
        <script>
            $("#button-collapse").sideNav();
        </script>
</body>

</html>