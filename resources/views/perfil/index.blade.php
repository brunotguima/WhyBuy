    @extends('layouts.control_panel')

@section('content')

<div class="col l4">
<h2>Seu perfil</h2>
</div>
<div class="col l4">
<img class="circle" src="{{asset('/images/perfils')}}/{{$mainPerfil->perfil->image}}"></a>
</div>
    @endsection
