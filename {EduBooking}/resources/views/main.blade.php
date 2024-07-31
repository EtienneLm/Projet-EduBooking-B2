<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <title>Main Page</title>
</head>

<body>
    @include('header')

    <div class="footer">
        <p class="book-appointments-txt">Book appointments in 2 minutes !</p>

        <div class="btn-container">
            <div class="continue-btn">
                <a href="{{ url('student_page') }}">Continue as a student</a>
            </div>
            <div class="continue-btn">
                <a href="{{ url('teacher_page') }}">Continue as a teacher</a>
            </div>
        </div>
    </div>

</body>

</html>