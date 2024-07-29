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

    <div class="wrapper four">
        <div class="type">
            <h3 class="typing">EduBooking</h3>
        </div>
    </div>
    @include('header')

    <div class="container">
        <div class="card">
            <a href="{{ url('student_page') }}">Continue as a student</a>
        </div>

        <div class="card">
            <a href="{{ url('teacher_page') }}">Continue as a teacher</a>
        </div>
    </div>


</body>

</html>

<!--  //? old code, to keep:  
    @include('header')

    <div class="container">
        <div class="card">
            <h2>I'm a student</h2>
            <div class="card-content">
                <p>Choose this option to take appointments with your teachers on different subjects</p>
            </div>
            <a href="{{ url('student_page') }}">Continue as a student</a>
        </div>

        <div class="card">
            <h2>I'm a teacher</h2>
            <div class="card-content">
                <p>Choose this option to see all the upcoming appointments you have with your students</p>
            </div>
            <a href="{{ url('teacher_page') }}">Continue as a teacher</a>
        </div>
    </div> -->