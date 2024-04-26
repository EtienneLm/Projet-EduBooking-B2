<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('app.css') }}"> -->
    <title>Teacher Page</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home" class="home-button-img">
        </a>
        <a href="{{ route('login') }}" class="nav-link button">Login</a> 
    </header>

    <form action="{{ route('add_teacher') }}" method="POST">
    @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label>User Type:</label>
        <div>
            <input type="radio" id="student" name="user_type" value="1" required>
            <label for="student">Student</label>
        </div>
        <div>
            <input type="radio" id="teacher" name="user_type" value="2" required>
            <label for="teacher">Teacher</label>
        </div>

        <button type="submit">Submit</button>
    </form>
    
    <h3> --------------------------------------------------------- </h3>

    <h1>Select a User</h1>
    <form action="/your-submission-route" method="POST">
        @csrf
        <label for="user">Choose a user:</label>
        {{-- Temporary debug to display the users data
        @dump($users) --}}

        <select name="user_id" id="user">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
