<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('notification.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Notifications</title>
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

    <div class="whole-page">
        <h1>Notifications</h1>
        <div class="container">
            <h2>Upcoming Features:</h2>
            <p>
                - Full responsiveness across all devices<br>
                - Email notifications<br>
                - Enhanced accessibility: improved readability, error messages, ARIA labels and alt text<br>
                - UI enhancements: header, cards, and more<br>
            </p>
        </div>
    </div>


    
</body>
</html>
