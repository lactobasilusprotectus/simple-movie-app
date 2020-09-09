@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-6">
{{--        popular movie --}}
        <div class="popular-movies">
            <h2 class="tracking-wider uppercase text-orange-500 text-lg font-semibold">Film populer</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach

            </div>
        </div>
{{--        end popular movie --}}

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Sedang di putar</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach

            </div>
        </div>

    </div>
@endsection
