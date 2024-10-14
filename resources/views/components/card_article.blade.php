<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine articolo">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-subtitle">{{$article->subtitle}}</p>
    <p class="card-text">{{$article->body}}</p>
    <a href="{{{route('article.show', compact('article'))}}}" class="btn btn-primary">Dettaglio articolo</a>
  </div>

</div>