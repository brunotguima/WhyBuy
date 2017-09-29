@extends('layouts.app')

@section('content')

  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="images/Banner-1.png"></a>
    <a class="carousel-item" href="#two!"><img src="images/Banner-2.jpg"></a>
  </div>  
   <h2 class="center"><span class="orange-text">SOBRE O APLICATIVO</span><h2>
  <div class="container">
<div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h1 class="center light-orange-text"><i class="material-icons">flash_on</i></h1>
            <h4 class="center">Facilidade e agilidade na procura.</h4>

            <h5 class="light center">O app facilita a vida do usuário, trazendo diversas opções de produtos com base nos seus interesses, sem perder horas procurando, indo sempre direto a melhor oferta!</h5>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h1 class="center light-orange-text"><i class="material-icons">location_on</i></h1>
            <h4 class="center">Baseado sempre em sua Localização.</h4>

            <h5 class="light center">O app traz as informações pertinentes com base na sua localização. Nada de ofertas à Km de distância! Tudo bem pertinho de você.</h5>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h1 class="center light-orange-text"><i class="material-icons">local_grocery_store</i></h1>
            <h4 class="center">Não é um site de compras online!</h4>

            <h5 class="light center">Se você gosta de comprar em lojas físicas, e procura sempre pelo mais barato, esse é o site pra você não perder mais tempo!</h5>
          </div>
        </div>
      </div>
  </div>
  </div>
        
<script> $('.carousel.carousel-slider').carousel({fullWidth: true});</script>
@endsection
