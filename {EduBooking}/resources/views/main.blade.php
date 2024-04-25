<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>Main Page</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home" class="home-button-img">
        </a>
        <!-- Make sure to point to the correct route for registration or login -->
        <a href="{{ route('login') }}" class="nav-link button">login</a> <!-- Updated to point to registration -->
    </header>

    <h1>Hello World</h1>
    <div class="container">
        <div class="card">
            <h2>Je suis étudiant</h2>
            <div class="card-content">
                <p>Bienvenue, étudiant!</p>
                <p>Choisissez cette option si vous êtes un étudiant inscrit.</p>
            </div>
            <a href="{{ url('test') }}">Continuer en tant qu'étudiant</a>
        </div>
        <div class="card">
            <h2>Je suis enseignant</h2>
            <div class="card-content">
                <p>Bienvenue, enseignant!</p>
                <p>Choisissez cette option si vous êtes un enseignant.</p>
            </div>
            <a href="{{ url('en_rende.html') }}">Continuer en tant qu'enseignant</a> <!-- Verify the route -->
        </div>
    </div>
</body>
</html>
