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


    <form action="{{ route('store_appointment') }}" method="POST">
    @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="teacher_user_id" value="{{ $teacherId }}">

        <label for="subject_id">Subject:</label>
        <select id="subject_id" name="subject_id" required>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>

        <label for="appointment_day">Day:</label>
        <input type="date" id="appointment_day" name="appointment_day" required>

        <script>                                                            
            const input = document.getElementById('appointment_day');      
            input.addEventListener('input', function (e) {
                const day = new Date(this.value).getDay();                  // disable weekends
                if (day === 0 || day === 6) {
                    alert("Weekends are not selectable.");
                    this.value = ''; 
                }                                                       
            });
        </script>                                                           


        <label for="user_comment">Comment:</label>
        <input type="text" id="user_comment" name="user_comment" maxlength="20" required>

        <button href="{{ route('login') }}" type="submit">Submit</button>
    </form>

</body>
</html>
