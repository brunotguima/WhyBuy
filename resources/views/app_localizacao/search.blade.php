@extends('layouts.app')

@section('content')
<div class="container">
 <select name="categoria" id="categoria" class="form-control container">
                                @foreach($ramoAtividade as $ramoAtiv)
                                <option value="11">{{$ramoAtiv->name}}</option>
                                @endforeach
                            </select>
</div>
<script>
    $(document).ready(function () {
        $('#ramoAtiv').select2();
    });
</script>
@endsection