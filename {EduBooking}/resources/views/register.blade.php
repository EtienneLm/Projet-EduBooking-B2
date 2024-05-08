@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('header.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('register.css') }}">
    <title>Register Page</title>
</head>

@section('content')
<body>
    <img src="{{ asset('Image/logo_Edubooking-removebg-preview.png') }}" alt="EduBooking Logo" class="logo-img" aria-label="EduBooking Logo">

    <div class="container" aria-label="Registration Form Container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" aria-label="User Registration Form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Conor McGregor" required autocomplete="name" autofocus aria-label="Name Input">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="conor_mcgregor@gmail.com" required autocomplete="email" aria-label="Email Input">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="bLoqH8uiK!2" required autocomplete="new-password" aria-label="Password Input">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="bLoqH8uiK!2" required autocomplete="new-password" aria-label="Confirm Password Input">
                    </div>

                    <label>User Type:</label>
                    <div>
                        <input type="radio" id="student" name="user_type" value="1" required>
                        <label for="student">Student</label>
                    </div>
                    <div>
                        <input type="radio" id="teacher" name="user_type" value="2" required>
                        <label for="teacher">Teacher</label>
                    </div>

                    <button type="submit" class="btn btn-primary" aria-label="Register Button">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection