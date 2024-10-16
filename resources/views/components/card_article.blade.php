<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine articolo">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-subtitle">{{$article->subtitle}}</p>
    <p class="card-text">{{$article->body}}</p>

    @if($article->tags->isNotEmpty())
    <div class="mb-3">
      @foreach($article->tags as $tag)
        <span class="badge rounded-pill text-bg-primary">#{{$tag->name}}</span>
      @endforeach
    </div>
    @endif

    @auth
    <a href="{{{route('article.show', compact('article'))}}}" class="btn btn-primary">Dettaglio articolo</a>
    @endauth

  </div>

</div>