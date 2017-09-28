<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'WhyBuy - Painel de Controle') }}</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div id="app">
                <div class="col l4">
        <header>
             <ul id="slide-out" class="side-nav fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="http://www.appm.pt/wp-content/uploads/2013/12/background.jpg">
      </div>
      @isset($mainPerfil->perfil->image)
      <img class="circle" src="{{asset('/images/perfils')}}/{{$mainPerfil->perfil->image}}"></a>
      @endisset
      <span class="white-text name">{{$mainPerfil->name}}</span></a>
      <span class="white-text email">{{$mainPerfil->email}}</span></a>
    </div></li>
    <li><a href="perfil"><i class="material-icons">person</i>Seu Perfil</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

</header> 
  </div>
</div class="col l8 offset-l8 right">
<main>

<div class='container right'>
@yield('content')
</div>
</main>
</div>