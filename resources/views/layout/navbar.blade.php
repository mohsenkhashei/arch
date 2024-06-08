<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{url('home')}}">
        <img src="{{url('images/v18_140.png')}}" alt="Logo"> <!-- Replace with the path to your logo -->
        ARCH DESIGN BOARD.
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item nav-item-active">
                <a class="nav-link" href="{{url('home')}}"><span class="fa fa-home"></span> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}"><span class="fa fa-users"></span> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}"><span class="fa fa-phone"></span> Contact Us</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{url('boards')}}"><span class="fa fa-bars"></span> Boards</a>
            </li>
            @endauth

        </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}"><span class="fa fa-sign-in"></span> Sign In</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <span class="nav-link">Hello, {{ Auth::user()->name }} <span class="fa fa-user-circle"></span></span>
                </li>
                <li class="nav-item"></li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="fa fa-sign-out"></span> Sign out
                </a>
            </li>
            @endauth
            </ul>

    </div>
</nav>
