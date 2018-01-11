@extends('layouts.app')
@section('container')
  <h1>Noticias del reportero {{ $admin->name }}</h1>
  <br>
  <div class="row">
    @foreach ($admin ->noticias as $noticia)
      <div class="col-lg-4">
        @include('noticias.noticia')
      </div>
    @endforeach
  </div>
@endsection
