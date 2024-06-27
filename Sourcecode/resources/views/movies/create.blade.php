@extends('layouts.app')

@section('content')
<div class="container mt-2 container-form">
    <h1>Add Movies</h1>
    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the Title of the Movie..." required>
        </div>
        <div class="form-group">
            <label for="image">Image (URL or Upload File)</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" placeholder="Enter Image URL...">
            <input type="file" class="form-control-file mt-2" id="image_file" name="image_file" accept="image/*">
        </div>
        <div class="form-group">
            <label for="rating">Rating (0-10)</label>
            <input type="number" class="form-control" id="rating" name="rating" step="0.1" min="0" max="10" placeholder="Enter the Rating of the Movie (Can Include Decimals)...">
        </div>
        <div class="form-group">
            <label for="production">Produced By</label>
            <input type="text" class="form-control" id="production" name="production" placeholder="Enter the Person Who Produced the Movie..." required>
        </div>
        <div class="form-group">
            <label for="director">Directed By</label>
            <input type="text" class="form-control" id="director" name="director" placeholder="Enter the Person Who Directed the Movie..." required>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Choose the Date When this Movie Was Released..." required>
        </div>
        <div class="form-group">
            <label for="age_restriction">Age Restriction</label>
            <input type="text" class="form-control" id="age_restriction" name="age_restriction" placeholder="Enter the Age Restriction of this Movie..." required>
        </div>
        <div class="form-group">
            <label for="duration">Duration (Minutes)</label>
            <input type="number" class="form-control" id="duration" name="duration" placeholder="Enter the Duration of this Movie in Minutes..." required>
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="3" placeholder="Write a Synopsis that Captures this Movie..." required></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status - <i>Choose the Status of this Movie Based on its Release Date (If < 2010, then the Movie is no Longer Available)</i> -</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
                <option value="coming_soon">Coming Soon</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genres">Genres (Hold <b>Ctrl</b> to Select Multiple Options)</label>
            <select class="form-control" id="genres" name="genres[]" multiple required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
</div>
@endsection
