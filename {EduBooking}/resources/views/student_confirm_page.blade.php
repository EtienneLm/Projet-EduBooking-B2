<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Created</title>
    <link rel="stylesheet" href="{{ asset('student_confirm_page.css') }}">
</head>
<body>
    
    @include('header')


    <br>
    <br>
    <br>
    <br>
    <br>

    <a class="return-btn-box" href="{{ url('/student_create_appointment') }}">
        <i class="arrow left"></i>
    </a>

    <div class="whole_page">
        <div class="confirm-message">
            <h1>Appointment created !</h1>
            <h2>So you don't forget it, an email will be sent the day before</h2>
        </div>

        <a class="appointments_btn" href="{{ url('/student_page') }}">My appointments</a>
    </div>
    
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
