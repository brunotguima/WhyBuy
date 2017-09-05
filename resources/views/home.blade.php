@extends('layouts.app')

@section('content')

  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="images/Banner-1.png"></a>
    <a class="carousel-item" href="#two!"><img src="images/Banner-2.jpg"></a>
  </div>
        
<script> $('.carousel.carousel-slider').carousel({fullWidth: true});</script>
@endsection
