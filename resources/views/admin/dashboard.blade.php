@extends('_layouts.app')
@section('content')
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        My Places
                    </div>
                    <div class="card-body">
                        @include('components\alert')
                        <table class="table table-stripped">
                            <thead>
                                <th>User</th>
                                <th>Wisata</th>
                                <th>Price</th>
                                <th>Register Data</th>
                                <th>Paid Status</th>
                            </thead>
                            <tbody>
                                @forelse($checkouts as $checkout)
                                    <tr>
                                        <td>{{$checkout->user->name}}</td>
                                        <td>{{$checkout->wisata->title}}</td>
                                        <td>Rp. {{$checkout->wisata->price}}</td>
                                        <td>{{$checkout->created_at->format('M d Y')}}</td>
                                        <td>{{$checkout->payment_status}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Places Registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection