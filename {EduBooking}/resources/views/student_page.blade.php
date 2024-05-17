<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('student_page.css') }}">
    <title>Student Page</title>
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

    <a class="return-btn-box" href="{{ url('/') }}">
        <i class="arrow left"></i>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteBtn = document.querySelector('.delete-btn');
            const messageDiv = document.createElement('div');
            messageDiv.className = 'deletion-message';
            messageDiv.textContent = 'Appointment deleted';
            deleteBtn.closest('form').addEventListener('submit', function(event) {
                document.body.appendChild(messageDiv);
                messageDiv.style.display = 'block'; 
                setTimeout(() => {
                    messageDiv.style.display = 'none'; 
                }, 1000);
            });
        });
    </script>

    <div class="whole-page">
        <h1>Here are all of your appointments:</h1>
        <div class="deletion-message"></div> 
        <form class="appointment-form" action="{{ route('delete_appointment') }}" method="POST">
            @csrf
            <select name="appointment_id" id="appointment" class="select-appointments">
                @forelse ($appointments as $appointment)
                    <option value="{{ $appointment->id }}">
                        {{ $appointment->appointment_day }} - {{ $appointment->user_comment }} - Teacher ID: {{ $appointment->teacher_user_id }}
                    </option>
                @empty
                    <option>No appointments available.</option>
                @endforelse
            </select>
            <div class="button-container">
                <button type="submit" class="delete-btn">Delete Selected Appointment</button>
            </div>
        </form>

        <div class="button-container">
            <a href="{{ url('student_teacher_choice') }}" class="go-create-btn">Create an appointment</a>
        </div>


        @if ($userAppointmentsCount >= 5)
        <h3>Max amount of appointments</h3>
        @endif
    </div>
    
</body>
</html>
