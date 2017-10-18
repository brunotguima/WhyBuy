@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col l12 center">
<h2>Seu Empreendimento <a class="btn-floating btn-large waves-effect waves-light red right" href="/empreendimentos/create"><i class="material-icons">add</i></a> </h2> 
</div>
</div>
<div class="row">
<div class="col s12 center">
@if($empreendimentos == null)
  <i class="large material-icons">sentiment_very_dissatisfied</i>
            <h4 class="center"><span class="orange-text">Você ainda não possui um empreendimento cadastrado.</span></h4>
            @else
@foreach ($empreendimentos as $e)
        <div class="col s6 m4 center">
          <div class="card">
          
            <div class="card-image">
              <img src="{{asset('/images/empreendimentos')}}/{{$e->EmpImage}}"> 
            </div>

            <div class="card-content">
              <span class="card-title black-text center">{{$e->nomeEstab}}</span>
              <span>CNPJ:</span><p>{{$e->cnpj}}</p>
              <span>Inscrição Estadual:</span><p>{{$e->inscEst}}</p>
              <span>CEP:</span><p>{{$e->cep}}</p>
              <span>Cidade:</span><p>{{$e->cidade}}</p>
              <span>Estado:</span><p>{{$e->estado}}</p>
              <span>Ramo de Atividade:</span><p>{{$e->ramoAtiv}}</p>
              <span>Nome Fantasia:</span><p>{{$e->nomeFant}}</p>
            </div>
            <div class="card-action">
              <form style="display: inline;" action="{{route('empreendimentos.destroy', $e->id)}}" method="post">
                                    {{csrf_field()}}
                  <input type="hidden" name="_method" value="delete">
                  <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
               </form>
            </div>
          </div>
        </div>
@endforeach
@endif
      </div>
  </div>
  @isset ($errorMessage)
    <script>Materialize.toast('Já existe um registro no nosso banco de dados com esse Nome ou CNPJ!', 5000);</script>
    @endisset
 @endsection