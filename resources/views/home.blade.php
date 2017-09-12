@extends('layouts.app')

@section('content')

  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="images/Banner-1.png"></a>
    <a class="carousel-item" href="#two!"><img src="images/Banner-2.jpg"></a>
  </div>  
   <h2 class="center"><span class="orange-text">Sobre o Aplicativo</span><h2>
  <div class="container">
  <div class="row">
  <div class="col s2">
   <img src="images/600x600.gif" alt="" class="materialboxed">
 </div>
 <div class="col s2 offset-s2">
<span></span>
 </div>
  </div>
  </div>
        
<script> $('.carousel.carousel-slider').carousel({fullWidth: true});</script>
@endsection
