@extends('layouts.base')

@section('pageTitle', 'Boolflix - Home')

@section('mainContent')
    <main class="pb-5">
        <div class="container">
            <div class="row row-cols-4 g-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header _cardTitle">
                                {{$movie->title}}
                            </div>
                            <ul class="list-group list-group-flush">
                                @if ($movie->title != $movie->original_title)
                                    <li class="list-group-item">Titolo originale: {{$movie->original_title}}</li>
                                @endif
                                <li class="list-group-item">Nazionalit&agrave;: {{$movie->nationality}}</li>
                                <li class="list-group-item">Data: {{$movie->date}}</li>
                                <li class="list-group-item">Voto: {{$movie->vote}}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>    
@endsection