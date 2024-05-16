<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Appointment</title>
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('appointment_created.css') }}">
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

    <br>
    <br>
    <br>
    <br>
    <br>

    <a class="return-btn-box" href="{{ url('/create_appointment') }}">
        <i class="arrow left"></i>
    </a>


    {{-- <h1>Your Appointments</h1>
    <form>
        <label for="appointments">Select an Appointment:</label>
        <select name="appointments" id="appointments">
            @forelse($appointments as $appointment)
                <option value="{{ $appointment->id }}">
                    {{ $appointment->appointment_day }} - {{ $appointment->user_comment }} - Teacher ID: {{ $appointment->teacher_user_id }}
                </option>
            @empty
                <option>No appointments available.</option>
            @endforelse
        </select>
    </form> --}}


</body>
</html>
