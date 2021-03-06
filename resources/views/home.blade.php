@extends('layouts.app')

@section('content')
<div class="row">
  <div class="carousel carousel-slider">
    <a class="carousel-item"><img src="images/Banner-1.png"></a>
    <a class="carousel-item"><img src="images/Banner-2.jpg"></a>
    <a class="carousel-item"><img src="images/Banner-3.jpg"></a>
  </div>  
  </div>
  <div class="row">
  <div class="card-panel orange ">
  <h2 class="center"><span class="white-text">COLABORADORES</span></h2>
  <div class="divider">
  </div>
  </br>
  
    <a class="carousel-item"><img src="images/Colaboradores/mauchsouza.jpg" width="390px" height="160px"></a>
    <a class="carousel-item"><img src="images/Colaboradores/sportcaetano.png" width="290" height="160px"></a>
    <a class="carousel-item"><img src="images\Colaboradores\Rose-cabelereira.png" width="290" height="180px"></a>
    <a class="carousel-item"><img src="images\Colaboradores\Reifer Logo Camiseta.png" width="310" height="180px"></a>
    </div>
  </div>
  <div class="container">
   <h2 class="center"><span class="orange-text">SOBRE O APLICATIVO</span></h2>
  
<div class="row col s12">
        <div class="col s12 ">
          <div class="icon-block">
            <h1 class="center light-orange-text"><i class="material-icons">flash_on</i></h1>
            <h4 class="center">Facilidade e agilidade na procura</h4>

            <h5 class="light center">O app facilita a vida do usuário, trazendo diversas opções de produtos com base nos seus interesses, sem perder horas procurando, indo sempre direto a melhor oferta!</h5>
          </div>
        </div>
        <div class="col s12 ">
          <div class="icon-block">
            <h1 class="center light-orange-text"><i class="material-icons">local_grocery_store</i></h1>
            <h4 class="center">Não é um site de compras online!</h4>

            <h5 class="light center">Se você gosta de comprar em lojas físicas, e procura sempre pelo mais barato, esse é o site pra você não perder mais tempo!</h5>
          </div>
        </div>
      </div>
  </div>
  </div>
        
<script> $('.carousel.carousel-slider').carousel({fullWidth: true, indicators:true});
    $(document).ready(function(){
      $('.carousel').carousel({indicators:true});
    });</script>
@endsection
