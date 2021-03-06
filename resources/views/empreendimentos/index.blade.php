@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col l12 center orange-text">
<h2>Seu Empreendimento <a class="btn-floating btn-large waves-effect waves-light orange right" href="/empreendimentos/create"><i class="material-icons">add</i></a> </h2> 
</div>
</div>
<div class="row">
<div class="col s12 center">
@isset($empreendimentos)
@forelse ($empreendimentos as $e)
        <div class="col s6 m4 center">
          <div class="card">
          
            <div class="card-image">
              <img src="{{asset('/images/empreendimentos')}}/{{$e->EmpImage}}"> 
            </div>

            <div class="card-content">
              <span class="card-title black-text center">{{$e->nomeFantasia}}</span>
            </div>
            <div class="card-action">

            <a href="/empreendimentos/{{$e->slug}}"><button  class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">pageview</i></button></a>

              <form style="display: inline;" action="{{route('empreendimentos.destroy',$e->id)}}" method="post">
                                    {{csrf_field()}}
                  <input type="hidden" name="_method" value="delete">
                  <button type="submit" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete_forever</i></button></a>
               </form>
            </div>
          </div>
        </div>
        @empty
            <i class="large material-icons orange-text">sentiment_very_dissatisfied</i>
            <h4 class="center"><span class="orange-text">Você ainda não possui um empreendimento cadastrado.</span></h4>

@endforelse
@endisset
      </div>
  </div>
  @isset ($errorMessage)
    <script>Materialize.toast('Já existe um registro no nosso banco de dados com esse Nome ou CNPJ!', 5000);</script>
    @endisset
 @endsection