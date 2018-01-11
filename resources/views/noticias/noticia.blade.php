<a href="/noticias/{{$noticia->id}}" class="thumbnail">
  <img src="{{$noticia->image}}" alt="{{$noticia->cuerpo}}">

</a>
<div class="text-muted">Escrito por: <a href= "/{{$noticia->admin->username}}">{{$noticia->admin->name}} </a></div>
<div class="card-text">
  {{ $noticia->created_at }}
</div>
