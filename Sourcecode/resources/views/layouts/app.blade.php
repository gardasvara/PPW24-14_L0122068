<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/cinema_icon.png') }}" alt="Cinema Icon" style="width: 20px; height: 20px;">
            Cinema
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <img src="{{ asset('storage/popcorn_icon.png') }}" alt="Home Icon" class="icon" style="width: 20px; height: 20px;">
                        Home
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('movies.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('movies.index') }}">
                        <img src="{{ asset('storage/list_icon.png') }}" alt="List Icon" class="icon" style="width: 20px; height: 20px;">
                        Movies
                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('movies.create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('movies.create') }}">
                        <img src="{{ asset('storage/add_icon.png') }}" alt="Add Icon" class="icon" style="width: 20px; height: 20px;">
                        Add Movies
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="color: white;">
                                <img src="{{ asset('storage/logout_icon.png') }}" alt="Log Out Icon" class="icon" style="width: 20px; height: 20px;">
                                Log Out
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
