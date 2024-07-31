<link rel="stylesheet" href="{{ asset('header.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<header>
    <!-- <a href="{{ url('/') }}">
        <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home button as a logo image" class="home-button-img">
    </a> -->

    <!-- <div class="center-content">
        @if(auth()->check())
        <span>Welcome, {{ auth()->user()->name }}!</span>
        @else
        <span>&nbsp;</span>
        @endif
    </div> -->
    <a class="home-txt-btn" href="{{ url('/') }}">
        <div class="typing_text {{ Request::is('/') ? 'four' : 'small' }}">
            <div class="type">
                <h3 class="typing">EduBooking</h3>
            </div>
        </div>
    </a>


    <div class="btn-block">

        <div>
            <a class="contact-btn" href="">Contact</a>
        </div>

        <div class="notification-block">
            <a class="notification-btn" href="{{ url('/notifications') }}">
                <div class="notification-bell_icon">
                    <img src="{{ asset('Image/white-notif-icon.png') }}" alt="Account Icon" class="auth-icon-bell">
                </div>
                <span class="notification-count">4</span>
            </a>
        </div>

        <div class="auth-btn">
            @if(auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link button">
                    <img src="{{ asset('Image/account-icon.png') }}" alt="Account Icon" class="auth-icon-account">
                </button>
            </form>
            @else
            <a href="{{ route('login') }}" class="nav-link button">
                <img src="{{ asset('Image/account-icon.png') }}" alt="Account Icon" class="auth-icon-account">
            </a>
            @endif
        </div>

    </div>

</header>