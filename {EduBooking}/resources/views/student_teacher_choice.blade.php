<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('student_teacher_choice.css') }}">
    <title>Teacher choice</title>
</head>

<body>

    @include('header')

    <a class="return-btn-box" href="{{ url('/student_page') }}">
        <i class="arrow left"></i>
    </a>

    <div class="main-content-wrapper">
        <div class="whole_page">
            <h1>You are a student, please select a teacher:</h1>
            <form action="{{ route('submit-teacher') }}" method="POST">
                @csrf
                <label for="user" class="label">Choose a teacher:</label>
                <select name="user_id" id="user" class="select-dropdown">
                    @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="submit_button">Submit</button>
            </form>
        </div>
    </div>


</body>

</html>