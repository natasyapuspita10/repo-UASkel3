<nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand d-inline-block align-text-top" href="#">
                <img src="{{secure_asset('images/merachy.png')}}" width="35%" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Museum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lainnya</a>
                    </li>
                </ul>
                @auth 
                <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuLink">
                        Halo, {{Auth::user()->name}}!
                        @if(Auth::user()->avatar)
                            <image src="{{ Auth::user()->avatar }}" class="user-photo" alt="user's avatar">
                        @else
                            <image src="https://ui-avatars.com/api?name=Admin" class="user-photo" alt="admin's avatar">
                        @endif
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right:0; left:auto">
                            <li>
                                <a href="#" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                <form method="get" action="{{route('logout')}}" style="display:none" id="logout-form">
                                    <input type="hidden" name="token" value="{{csrf_token()}}">
                                </form>
                            </li>
                        </ul>
                </div>
            @else
                <div class="d-flex">
                    <a href="{{url('/login')}}" class="btn btn-master btn-secondary me-3 masuk">
                        Sign In
                    </a>
                    <a href="#" class="btn btn-master btn-primary daftar">
                        Sign Up
                    </a>
                </div>
            @endif
            </div>
        </div>
    </nav>