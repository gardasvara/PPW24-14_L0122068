@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center custom-jumbotron">
        <h1 class="display-4">Cinema</h1>
        <p class="lead">Discover the best movies and enjoy the cinema experience.</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h1 class="text-white text-uppercase">Movies to Explore</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Shortest-Length Movies to Savor',
                'movies' => $shortestMovies,
                'badgeColor' => 'danger'
            ])@endcomponent
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Long-Duration Movies to Discover',
                'movies' => $longestMovies,
                'badgeColor' => 'success'
            ])@endcomponent
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Even If It\'s Underrated, Maybe You Like These Movies?',
                'movies' => $underratedMovies,
                'badgeColor' => 'warning'
            ])@endcomponent
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Extraordinary Smash Hit Movies',
                'movies' => $extraordinaryMovies,
                'badgeColor' => 'danger'
            ])@endcomponent
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Top Movies of All Time',
                'movies' => $topMovies,
                'badgeColor' => 'success'
            ])@endcomponent
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Old Fashioned Movies',
                'movies' => $oldFashionedMovies,
                'badgeColor' => 'primary'
            ])@endcomponent
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @component('components.movie-card', [
                'title' => 'Coming Soon Movies',
                'movies' => $comingSoon,
                'badgeColor' => 'info'
            ])@endcomponent
        </div>
    </div>
</div>
@endsection
