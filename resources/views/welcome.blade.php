@extends('layouts.app')

@section('title')
La opinión de Poza Rica
@endsection

@section('container')

  <div class="row">
    @forelse($noticias as $noticia)
      <div class="col-lg-4">
        @include('noticias.noticia')
      </div>
  @empty
    <p>Ups!No hay noticias destacadas</p>
  @endforelse
  @if(count($noticias))
    <div class="mt-2 mx-auto">
    {{ $noticias->links('pagination::bootstrap-4') }}
    </div>
  @endif
 </div>


@endsection
