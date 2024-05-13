<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <title>Main Page</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home button as a logo image" class="home-button-img">
        </a>
        <div class="center-content">
            @if(auth()->check())
                <span>Welcome, {{ auth()->user()->name }}!</span>
            @else
                <span>&nbsp;</span>
            @endif
        </div>
        <div class="auth-link">
            @if(auth()->check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link button">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="nav-link button">Login</a>
            @endif
        </div>
    </header>

    <div class="container">
        <div class="card">
            <h2>Je suis étudiant</h2>
            <div class="card-content">
                <p>Bienvenue, étudiant!</p>
                <p>Choisissez cette option si vous êtes un étudiant inscrit.</p>
            </div>
            <a href="{{ url('student_teacher_choice') }}">Continuer en tant qu'étudiant</a>
        </div>
        <div class="card">
            <h2>Je suis enseignant</h2>
            <div class="card-content">
                <p>Bienvenue, enseignant!</p>
                <p>Choisissez cette option si vous êtes un enseignant.</p>
            </div>
            <a href="{{ url('teacher_page') }}">Continuer en tant qu'enseignant</a>
        </div>
    </div>
</body>
</html>
