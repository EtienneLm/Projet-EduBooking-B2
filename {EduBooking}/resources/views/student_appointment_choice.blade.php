<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('appointment_choice.css') }}">
    <title>Appointment Choice</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home" class="home-button-img">
        </a>
        <a href="{{ route('login') }}" class="nav-link button">Login</a> 
    </header>
   
    <h1>Selected Teacher Details</h1>
    @if(isset($teacher))
        <p>Name: {{ $teacher->name }}</p>
        <p>Email: {{ $teacher->email }}</p>
    @else
        <p>No teacher selected.</p>
    @endif

</body>
</html>
