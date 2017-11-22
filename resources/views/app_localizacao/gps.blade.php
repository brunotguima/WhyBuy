@extends('layouts.app')

@section('content')
<script type="text/javascript" src="js/gps.js"></script>
<div>
	{!!Mapper::render()!!}

</div>
<ul id="slide-out1" class="side-nav">
                    <li><div class="user-view">
                      <div class="background">
                        <img src="https://img3.stockfresh.com/files/s/stevanovicigor/m/35/5077608_stock-photo-low-poly-triangular-abstract-background.jpg">
                      </div>
                      
                      <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
                      <a href="#!name"><span class="white-text name">
</span></a>
                      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                    <li><a href="#!">Second Link</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="subheader">Subheader</a></li>
                    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                  </ul>
@endsection