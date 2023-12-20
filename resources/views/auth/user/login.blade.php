@extends('_layouts.app')
@section('content')
    <section class="login-user">
        <div class="left">
             <!-- Gambar Di kiri -->
            <img src="{{secure_asset('images/hiasan.png')}}" alt="">
        </div>

        <div class="right">
            <!-- logo -->
            <img src="{{secure_asset('images/merachy.png')}}" class="logo" alt="">
            <h1 class="header-third">
                Find The Best Destination Today!
            </h1>
            <!-- pemanis -->
            <p class="subheader">
                Log In to experience it
            </p>
            <p>
                <!-- login google oauth -->
                <a class="btn btn-border btn-google-login" href="{{route('user.login.google')}}">
                    <img src="{{secure_asset('images/google.svg')}}" class="icon" alt=""> Sign In with Google
                </a>
            </p>
            <!-- buttin back to home -->
            <a class="balik" href="{{route('user.dashboard')}}">
                <p>
                    Back To Main Page
                </p>
            </a>
        </div>
    </section>  
@endsection