<x-layout>
    <div class="container-fluid pt-5">
        <div class="row mb-4">
            <div class="col-12 col-md-4">
                <div class="rounded shadow bg-body-tertiary p-3">
                    <h1 class="display-5 text-center">Revisor Dashboard</h1>
                </div>
            </div>
        </div>

        @if (session()->has('message'))
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-6 alert alert-success text-center shadow rounded">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        @if ($article_to_check)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        @if ($article_to_check->images->count())
                            @foreach ($article_to_check->images as $key => $image)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow"
                                        alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-fluid rounded shadow">
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>

                <div class="col-md-4 ps-md-4 d-flex flex-column justify-content-between">
                    <div>
                        <h1>{{ $article_to_check->title }}</h1>
                        <h3>Autore: {{ $article_to_check->user->name }}</h3>
                        <h4>{{ $article_to_check->price }} €</h4>
                        <h4 class="fst-italic {{ $article_to_check->category ? 'text-muted' : 'text-danger' }}">
                            #{{ $article_to_check->category?->name ?? 'Categoria mancante' }}
                        </h4>
                        <p class="h6">{{ $article_to_check->description }}</p>
                    </div>

                    <div class="d-flex pb-4 justify-content-around mt-4">
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 px-4 fw-bold shadow">Rifiuta</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success py-2 px-4 fw-bold shadow">Accetta</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center text-center min-vh-50">
                <div class="col-12">
                    <h1 class="fst-italic display-4">Nessun articolo da revisionare</h1>
                    <a href="{{ route('homepage') }}" class="btn btn-primary mt-3">Torna all'homepage</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
            


