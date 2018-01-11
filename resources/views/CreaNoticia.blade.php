@extends('layouts.app')

@section('title')
Redactar nueva noticia
@endsection

@section('container')

<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 animated fadeInDown">
    <form action="/noticias/create" method="post" enctype="multipart/form-data" class="form">

      <div class="form-group @if($errors->has('noticia')) has-error @endif" >
        {{ csrf_field() }}
        <label for="titulo_noticia">Titulo de la noticia</label>
        <input required type="text" class="form-control" name="noticia" placeholder="Escribe el título de la noticia" required="">
        @if($errors->has('noticia'))
          @foreach($errors->get('noticia') as $error)
          <p class="text-danger">{{$error}}</p>
          @endforeach
        @endif
      </div>

      <div class="form-group">
        <label for="fecha">Fecha</label>
        <div class='input-group date'>
          <input type='timestamp' class="form-control" name="fecha" placeholder="año/mes/dia" required="" />
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
      </div>


      <div class="form-group">
      <label>Agregar una imagen</label>
      <div class="input-group">
      
  <input type="file" class="form-control-file" name="image">
</div>
</div>



<br>
<div class="form-group">
  <label for="cuerpo_noticia">Cuerpo de la noticia</label>
  <textarea class="form-control" rows="3" name="cuerpo" required=""></textarea>

</div>
<div class="form-group">
  <input type="submit" value="Guardar Datos" class="btn btn-md btn-success">
</div>
</form>
</div>
</div>
@endsection
