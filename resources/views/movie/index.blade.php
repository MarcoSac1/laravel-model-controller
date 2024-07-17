@extends('app')

@section('main-content')

    <h1>Movies List</h1>
    <hr>
    <div class="container">
        @foreach ( $movies as $movie )
        <article class="col-4 mb-3 " style="width: 14rem;">
            <div class="card-body ">
                <div class="card text-center">
                    <div class="card-header">
                        <h1>Titolo: {{$movie->title}}</h1>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Nazionalità: {{$movie->nationality}}</h5>
                    </div>
                    <div class="card-footer text-body-secondary">
                        Data di Publicazione: {{$movie->date}}
                        Voto: {{ $movie->vote}}
                        <hr>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
@endsection
