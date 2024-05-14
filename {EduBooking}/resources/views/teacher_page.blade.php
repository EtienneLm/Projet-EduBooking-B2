<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('teacher_page.css') }}">
    <title>Teacher Page</title>
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
                // Optionally, you could prevent default to handle the submission via AJAX and only display this on success.
                // event.preventDefault();
                document.body.appendChild(messageDiv);
                messageDiv.style.display = 'block'; // Show the message
                setTimeout(() => {
                    messageDiv.style.display = 'none'; // Hide the message after 10 seconds
                }, 1000);
            });
        });
    </script>


    <div class="whole-page">
        <h1>Here are all of your appointments:</h1>
        <div class="deletion-message"></div> <!-- Place for the deletion message -->
        <form class="appointment-form" action="{{ route('delete_appointment') }}" method="POST">
            @csrf
            <select name="appointment_id" id="appointment" class="select-appointments">
                @forelse ($appointments as $appointment)
                    <option value="{{ $appointment->id }}">
                        {{ $appointment->appointment_day }} - {{ $appointment->user->name }} - {{ $appointment->user_comment }}
                    </option>
                @empty
                    <option>No appointments available.</option>
                @endforelse
            </select>
            <button type="submit" class="delete-btn">Delete Selected Appointment</button>
        </form>
    </div>


{{--
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

    <h1>Add New Subject</h1>
    <form action="{{ route('add_subject') }}" method="POST">
        @csrf
        <label for="subject_name">Subject Name:</label>
        <input type="text" id="subject_name" name="name" required>

        <button type="submit">Add Subject</button>
    </form>

    <h3> --------------------------------------------------------- </h3>

    <h1>Select a User</h1>
    <form action="/tochange" method="POST">
        @csrf
        <label for="user">Choose a user:</label>
        <select name="user_id" id="user">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
    --}}
    
</body>
</html>
