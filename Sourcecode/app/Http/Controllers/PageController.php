<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    // Menambahkan middleware 'auth' di constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $bestAvailMovies = Movie::where('status', 'available')
            ->where('release_date', '>=', '2015-01-01')
            ->orderBy('rating', 'desc')
            ->take(4)
            ->get();

        $extraordinaryMovies = Movie::where('status', 'available')
            ->orderBy('release_date', 'desc')
            ->take(4)
            ->get();

        $shortestMovies = Movie::whereIn('status', ['available', 'unavailable'])
            ->orderBy('duration', 'asc') 
            ->take(4)
            ->get();

        $longestMovies = Movie::whereIn('status', ['available', 'unavailable'])
            ->orderBy('duration', 'desc') 
            ->take(4)
            ->get();

        $oldFashionedMovies = Movie::orderBy('release_date', 'asc')
            ->take(4)
            ->get();

        $topMovies = Movie::orderBy('rating', 'desc')
            ->take(4)
            ->get();

        $underratedMovies = Movie::whereIn('status', ['available', 'unavailable'])
            ->orderBy('rating')
            ->take(4)
            ->get();

        $comingSoon = Movie::where('status', 'coming_soon')
            ->take(4)
            ->get();

        return view('home', compact('bestAvailMovies', 'extraordinaryMovies', 'shortestMovies', 'longestMovies', 'oldFashionedMovies', 'underratedMovies', 'topMovies', 'comingSoon'));
    }
}
