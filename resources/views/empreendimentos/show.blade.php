@extends('layouts.app') 
@section('content')

<div class="container">
    @foreach($empreendimento as $emp)
    <div class="row">
        </br>
        <div class="card orange center">
            <h4 class="center-align" class="white-text">INFORMAÇÕES DO EMPREENDIMENTO</h4>
        </div>
        <div class="col s6">
            <div class="row left">
                <div style="width:450px; height:350px;">
                    <div class="card-panel orange">
                        <div class="row center">
                            <label for="nomeFantasia" class="control-label white-text ">Nome Fantasia:</label>
                            <h7 class="white-text">{{$emp->nomeFantasia}}</h7>
                            <br />

                            <label for="cnpj" class="control-label white-text">CNPJ:</label>
                            <h7 class="white-text">{{$emp->cnpj}}</h7>
                            <br />

                            <label for="inscEst" class="control-label white-text">Inscrição Estadual:</label>
                            <h7 class="white-text">{{$emp->inscEst}}</h7>
                            <br />

                            <label for="cep" class="control-label white-text">CEP:</label>
                            <h7 class="white-text">{{$emp->cep}}</h7>
                            <br />

                            <label for="cidade" class="control-label white-text">Cidade:</label>
                            <h7 class="white-text">{{$emp->cidade}}</h7>
                            <br />

                            <label for="estado" class="control-label white-text">Estado:</label>
                            <h7 class="white-text">{{$emp->estado}}</h7>
                            <br />

                            <label for="razaoSocial" class="control-label white-text">Razão Social:</label>
                            <h7 class="white-text">{{$emp->razaoSocial}}</h7>
                            <br />

                            <label for="ramoAtiv" class="control-label white-text">Ramo de Atividade:</label>
                            <h7 class="white-text">{{$ramoAtividade->name}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div style="width: 450px; height: 350px;">
                {!!Mapper::render()!!}
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="card orange center">
            <h4 class="center-align" class="white-text">PROMOÇÕES E OFERTAS</h4>
        </div>
    </div>
            @foreach($promocoes as $promocao)
<div class="row">
<div class="col s12 m7">
    <h2 class="header">{{$promocao->nomeProd}}</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>{{$promocao->marcaProd}}</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection