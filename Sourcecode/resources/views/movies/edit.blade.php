@extends('layouts.app')

@section('content')
<div class="container mt-2 container-form">
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image (URL or Upload File)</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $movie->image) }}" placeholder="Enter image URL">
            <input type="file" class="form-control-file mt-2" id="image_file" name="image_file" accept="image/*">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" step="0.1" min="0" max="10" value="{{ $movie->rating }}" required>
        </div>
        <div class="form-group">
            <label for="production">Produced By</label>
            <input type="text" class="form-control" id="production" name="production" value="{{ $movie->production }}" required>
        </div>
        <div class="form-group">
            <label for="director">Directed By</label>
            <input type="text" class="form-control" id="director" name="director" value="{{ $movie->director }}" required>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $movie->release_date->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label for="age_restriction">Age Restriction</label>
            <input type="text" class="form-control" id="age_restriction" name="age_restriction" value="{{ $movie->age_restriction }}" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration (Minutes)</label>
            <input type="number" class="form-control" id="duration" name="duration" value="{{ $movie->duration }}" required>
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="3" required>{{ $movie->synopsis }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available" {{ $movie->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $movie->status == 'unvailable' ? 'selected' : '' }}>Unavailable</option>
                <option value="coming_soon" {{ $movie->status == 'coming_soon' ? 'selected' : '' }}>Coming Soon</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genres">Genres (Hold <b>Ctrl</b> to Select Multiple Options)</label>
            <select class="form-control" id="genres" name="genres[]" multiple required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ in_array($genre->id, $movie->genres->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
</div>
@endsection
