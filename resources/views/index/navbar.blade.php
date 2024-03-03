@include('index.home')

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Apartment Booking</a>
    <button class="navbar-toggler shadow-none text-white" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i> Menu
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('apartment') }}">Apartment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ourteam') }}">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
        <span class="navbar-text">
            <button class="btn btn-outline-warning shadow-none"
                onclick="window.location='{{ route('login') }}'">Login/Register</button>
        </span>

    </div>
</nav>
