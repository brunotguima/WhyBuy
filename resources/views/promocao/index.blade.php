@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col l12 center orange-text">
<h2>Promoção cadastrada <a class="btn-floating btn-large waves-effect waves-light orange right" href="promocao/create"><i class="material-icons">add</i></a> </h2> 
</div>
</div>
<div class="row">
<div class="col s12 center">
@isset($promocaos)
@forelse ($promocaos as $promocao)
        <div class="col s6 m4 center">S
            <div class="card-content">
              <span class="card-title black-text center">{{$promocao->nomeProd}}</span>
            </div>
            <div class="card-action">
              <form style="display: inline;" action="{{route('promocao.destroy',$promocao -> id)}}" method="post">
                                    {{csrf_field()}}
                  <input type="hidden" name="_method" value="delete">
                  <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
               </form>
            </div>
          </div>
        </div>
        @empty
  <i class="large material-icons">sentiment_very_dissatisfied</i>
            <h4 class="center"><span class="orange-text">Você ainda não possui uma Promoção cadastrada.</span></h4>

@endforelse
@endisset
      </div>
  </div>
  @isset ($promocaorrorMessage)
    <script>Materialize.toast('Já existe um registro no nosso banco de dados com esse Nome ou CNPJ!', 5000);</script>
    @endisset
 @endsection