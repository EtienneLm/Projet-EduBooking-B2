<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('app.css') }}"> -->
    <title>Teacher choice</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home" class="home-button-img">
        </a>
        <a href="{{ route('login') }}" class="nav-link button">Login</a> 
    </header>
   

    <h1>Select a Teacher</h1>
    <form action="{{ route('teacher-submit-form') }}" method="POST"> {{-- {{ route('student_appointment_choice') }} --}}
        @csrf
        <label for="user">Choose a teacher:</label>
        <select name="user_id" id="user">
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>

    
</body>
</html>
