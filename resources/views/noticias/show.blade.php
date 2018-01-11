@extends('layouts.app')

@section('title')
{{$noticia->titulo}}
@endsection

@section('container')
<div class= "row">
  <div class="col-lg-6">
    <img src="{{$noticia->image}}" alt="{{$noticia->titulo}}" width="570" height="350">
    <br>
    
    <h2 class="text-left">{{$noticia->titulo}}</h2>
  </div>
</div>
<br>

<div class= "row">
  <div class="col-lg-6">
    <h6><span class="glyphicon glyphicon-calendar" aria-hidden="true"> {{$noticia->created_at}} </span> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"> 40 views</span></h6>
    <div class= "row">
      <p><a href="https://twitter.com/" class="btn btn-info btn-xs" role="button">Twitter</a>
        <a href="https://plus.google.com/?hl=es" class="btn btn-danger btn-xs" role="button">Share</a>
        <a href="https://www.facebook.com/" class="btn btn-primary btn-xs" role="button">Facebook</a>
      </p>
    </div>
    <div class="text-muted">Escrito por: <a href= "/{{$noticia->admin->username}}">{{$noticia->admin->name}} </a></div>
    <br>
    <p class="text-justify">{{$noticia->cuerpo}}</p>
    </div>
    </div>

    <h3>Comentarios<h3>
      <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://periodico-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


  <br>
  @endsection
