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
@forelse ($promocaos as $promocao)
       <div class="col s6 m4 center">
          <div class="card">
            <div class="card-painel orange">
              <span class="card-title black-text center">{{$promocao->nomeProd}}</span></br>
              <span class="card-title black-text center">{{$promocao->marcaProd}}</span></br>
              <span class="card-title black-text center">{{$promocao->valorProd}}</span></br>
            </div>
            <div class="card-action orange">
             <form style="display: inline;" action="{{route('promocao.destroy',$promocao->id)}}" method="post">
                           {{csrf_field()}}
                  <input type="hidden" name="_method" value="delete">
                  <button type="submit" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete_forever</i></button></a>
               </form>
            </div>
          </div>
        </div>
        @empty
  <i class="large material-icons">sentiment_very_dissatisfied</i>
            <h4 class="center"><span class="orange-text">Você ainda não possui uma Promoção cadastrada.  By: Homão da Poha</span></h4>

@endforelse
      </div>
  </div>
  @isset ($promocaorrorMessage)
    <script>Materialize.toast('Já existe um registro no nosso banco de dados com esse Nome ou CNPJ!', 5000);</script>
    @endisset
 @endsection