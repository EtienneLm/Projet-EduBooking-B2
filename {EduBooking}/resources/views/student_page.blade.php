<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('student_page.css') }}">
    <title>Student Page</title>
</head>
<body>
    
    @include('header')

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

    <div class="main-content-wrapper">
        <div class="whole-page">
            <!-- <h1>Here are all of your appointments:</h1> -->
            <div class="deletion-message"></div> 
            <form class="appointment-form" action="{{ route('delete_appointment') }}" method="POST">
                @csrf
                <select name="appointment_id" id="appointment" class="select-appointments">
                    @forelse ($appointments as $appointment)
                        <option value="{{ $appointment->id }}">
                        Date: {{ $appointment->appointment_day }} - Teacher: {{ $appointment->teacher->name }} - Comment: {{ $appointment->user_comment }} 
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

            @if ($userAppointmentsCount >= 3)
            <h3 class="max-amount-txt">Max amount of appointments</h3>
            @endif
        </div>
    </div>
</body>
</html>
