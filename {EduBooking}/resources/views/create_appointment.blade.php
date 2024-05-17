<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Appointment</title>
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('create_appointment.css') }}">
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

    <a class="return-btn-box" href="{{ url('/student_teacher_choice') }}">
        <i class="arrow left"></i>
    </a>

    <div class="whole-page">
        <h1>Create Appointment</h1>
        <form action="{{ route('store_appointment') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="teacher_user_id" value="{{ $teacherId }}">

            <label class="label" for="subject_id">Subject:</label>
            <select id="subject_id" name="subject_id" class="select-dropdown" required>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>

            <label class="label" for="appointment_day">Day:</label>
            <input type="date" id="appointment_day" name="appointment_day" class="select-dropdown" required>

            <script>
                const input = document.getElementById('appointment_day');
                input.addEventListener('input', function (e) {
                    const selectedDate = new Date(this.value);
                    const currentDate = new Date();
                    if (selectedDate < currentDate) {
                        alert("Please select a date after today.");
                        this.value = ''; // to clear 
                    }
                    const day = selectedDate.getDay();
                    if (day === 0 || day === 6) {
                        alert("Weekends are not selectable.");
                        this.value = ''; 
                    }
                });
            </script>


            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const submitBtn = document.querySelector('.submit_btn');
                    const messageDiv = document.createElement('div');
                    messageDiv.className = 'creation-message';
                    messageDiv.textContent = 'Appointment created';
                    messageDiv.style.display = 'none';
                    document.body.appendChild(messageDiv);

                    submitBtn.closest('form').addEventListener('submit', function(event) {
                        event.preventDefault();
                        messageDiv.style.display = 'block';
                        setTimeout(() => {
                            messageDiv.style.display = 'none';
                        }, 10000);
                        setTimeout(() => {
                            event.target.submit();
                        }, 100); 
                    });
                });
            </script>  

            <label class="label" for="user_comment">Comment:</label>
            <input type="text" id="user_comment" name="user_comment" class="select-dropdown" maxlength="30" placeholder="I have bad grades" required>

            <button type="submit" class="submit_btn" href="{{ url('/appointment_created') }}">Submit</button>
        </form> 

        @if ($userAppointmentsCount >= 3)
            <h2>Max amount of appointments: 3</h2>
        @endif
    </div>

</body>
</html>
