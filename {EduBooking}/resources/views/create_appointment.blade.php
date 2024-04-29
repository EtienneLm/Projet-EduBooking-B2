<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Appointment</title>
    <link rel="stylesheet" href="{{ asset('header.css') }}">
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home" class="home-button-img">
        </a>
        <a href="{{ route('login') }}" class="nav-link button">Login</a>
    </header>

    <a href="{{ route('student_appointment_choice') }}">&larr; Return</a>
    
    @if(isset($teacher))
        <h2>You chose {{ $teacher->name }}</h2>
        <p>The 23 avril - 15h40</p>
    @else
        <p>No teacher selected.</p>
    @endif

    <h2>Enter all the informations to create your appointment:</h2>

    <form action="{{ route('store_appointment') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="subject_id" value="1"> 

        <label for="day">Day:</label>
        <input type="date" id="appointment_day" name="appointment_day" required>

        <label for="comment">Comment:</label>
        <input type="text" id="user_comment" name="user_comment" required>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
