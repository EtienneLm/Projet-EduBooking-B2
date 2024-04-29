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

    <form action="{{ route('store_appointment') }}" method="POST">
    @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

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
        <input type="text" id="user_comment" name="user_comment" required>

        <button href="{{ route('login') }}" type="submit">Submit</button>
    </form>

</body>
</html>
