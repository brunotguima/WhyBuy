@extends ('layouts.app')
@section('content')
<div class="container">
        <div class="row">
                         <h1 class="page-header">Edição de Perfil</h1>
            <div class="col-md-6">
                <form action="{{ route('perfil.update', $perfil->id) }}" method="post">
                    {{csrf_field()}}
                     
                    <div class="form-group">
                        <label for="tellUm">Telefone</label>
                        <input id="tellUm" class="form-control" type="text" name="tellUm" value="{{$perfil->tellUm}}">

                    </div>
                    <div class="form-group">
                        <label for="cell">Celular</label>
                        <input id="cell" class="form-control" type="text" name="cell" value="{{$perfil->cell}}">

                    </div>                 
                    <button type="submit" class="btn btn-primary deep-orange">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection