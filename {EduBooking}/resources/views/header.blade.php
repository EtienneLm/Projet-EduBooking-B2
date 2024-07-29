<link rel="stylesheet" href="{{ asset('header.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

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

    <div class="notification-bell">
        <a href="{{ url('/notifications') }}">
            <div class="bell-icon">
                <i class="fa fa-bell"></i>
                <span class="notification-count">4</span>
            </div>
        </a>
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
