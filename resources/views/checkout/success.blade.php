@extends('_layouts.app')
@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('images/hiasan.png')}}" height="290" class="mb-5" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        Ready? Set, Travel!
                    </p>
                    <h2 class="primary-header ">
                        Checkout Success
                    </h2>
                    <!-- ganti url aja -->
                    <a href="#" class="btn btn-primary mt-3">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection