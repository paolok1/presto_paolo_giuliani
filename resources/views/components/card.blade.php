<div class="card mx-auto text-center mb-3" style="width: 18rem;">
  <img src="https://picsum.photos/200" class="card-img-top" alt="immagine dell'articolo {{$article->title}}">
  <div class="card-body">
      <h4 class="card-title">{{$article->title}}</h4>
      <h6 class="card-subtitle txt-body-secondary">{{$article->price}} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5 ">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
            @if($article->category)
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-outline-info">{{ $article->category->name }}</a>
              @else
              <span class="badge bg-secondary">Nessuna categoria</span>
            @endif
        </div>
  </div>