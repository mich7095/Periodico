@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Registro Confirmado</div>
<div class="panel-body">
Tu Email se verificó satisfactoriamente. Haz click aquí para <a href="{{url('/login')}}">iniciar sesión</a>
</div>
</div>
</div>
</div>
</div>
@endsection
