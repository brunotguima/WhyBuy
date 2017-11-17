@extends('layouts.app') 
@section('content')

<div class="container">
    @foreach($empreendimento as $emp)
    <div class="row">
        </br>
        <div class="card orange ">
            <h5 class="center-align white-text">INFORMAÇÕES DO EMPREENDIMENTO</h5>
        </div>
        <div class="col s6">
            <div class="row left">
                <div style="width:450px; height:350px;">
                    <div class="card-panel orange">
                        <div class="row center">
                            <h6 for="nomeFantasia" class="control-label white-text ">Nome Fantasia:</label></h6>
                            <h5 class="white-text">{{$emp->nomeFantasia}}</h5>
                            <li class="divider"></li>
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
            <h5 class="center-align white-text">PROMOÇÕES E OFERTAS</h5>
        </div>
        <div class="center">
        <form action="{{route('promocao.create')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="{{$emp->id}}" name="emp_id" >
         <a class="btn-floating btn-large waves-effect waves-light orange" type="submit"><i class="material-icons">add</i></a>  
        </form>
    </div>
    </div>
    <div class="row">
            @foreach($promocoes as $promocao)
<div class="col s6 m6 l6">
    <div class="card horizontal">
      <div class="card-image">
        <img class="circle" src="{{asset('/images/empreendimentos')}}/{{$emp->EmpImage}}">  
      </div>
      <div class="card-stacked">
       <div class="card-content">
        <label for="marcaProd">Nome do Produto</label>
          <p>{{$promocao->nomeProd}}</p>
        <label for="marcaProd">Marca do Produto</label>
          <p>{{$promocao->marcaProd}}</p>
        <label for="categoria">Categoria do Produto</label>
          <p>{{$promocao->categoria}}</p>
        <label for="valorProd">Valor do Produto</label>
          <p>{{$promocao->valorProd}}</p>
        </div>
        <div class="card-action">
         <form style="display: inline;" action="{{route('promocao.destroy',$promocao->id)}}" method="post">
                                    {{csrf_field()}}
                  <input type="hidden" name="_method" value="delete">
                  <button type="submit" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete_forever</i></button></a>
               </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection