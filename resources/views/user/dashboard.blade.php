@extends('_layouts.app')
@section('content')
<meta http-equiv= "Content-Security-Policy" content="upgrade-insecure-request">
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Tickets
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse($checkouts as $checkout)
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{secure_secure_asset('images/item_bootcamp.png')}}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{$checkout->wisata->title}}</strong>
                                </p>
                                <p>
                                    {{$checkout->created_at->format('M d, Y')}}
                                </p>
                            </td>
                            <td>
                               <strong>Rp. {{$checkout->wisata->price}}</strong>
                            </td>
                            <td>
                                <strong class="{{$checkout->payment_status=='paid'?'text-success':'text-secondary'}}">
                                    {{$checkout->payment_status}}
                                </strong>
                            </td>   
                            <td>
                                @if($checkout->payment_status == 'waiting')
                                <a href="{{$checkout->midtrans_url}}" target="_blank" class="btn btn-primary">Pay Here</a>
                                @endif
                            </td>
                            <td>
                                <a href="https://wa.me/085782557900?text=Hai, saya ingin bertanya tentang kelas {{$checkout->wisata->title}}" class="btn btn-secondary">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr class="align-middle">
                            <td colspan="5">
                                <h4>Oops! You don't have any tickets yet...</h4>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection