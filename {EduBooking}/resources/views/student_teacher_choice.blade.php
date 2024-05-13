<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('teacher_choice.css') }}">
    <title>Teacher choice</title>
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

    <a href="{{ route('home') }}">&larr; Return</a>
   
    <div class="whole_page">
        <div class="container">
            <h2>You are a student, please select a teacher:</h2>
            <form action="{{ route('submit-teacher') }}" method="POST">
            @csrf
                <label for="user" class="label">Choose a teacher:</label>
                <select name="user_id" id="user" class="select-dropdown">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="submit_button">Submit</button>
            </form>
        </div>
    </div>

    
</body>
</html>
