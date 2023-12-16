@extends('_layouts.app')
@section('content')
<section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        Disover New Places
                    </p>
                    <h2 class="primary-header">
                        Dream
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">   
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <!-- gambar -->
                                <img src="{{asset('images/mbloc1.jpg)}} height="150" class="cover">
                                <h1 class="package">
                                    <!-- nanti diubah pake codingan -->
                                    {{$place->title}} 
                                </h1>
                                <p class="description">
                                    Detail Tempat In Here
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="#" class="basic-form">
                                <!-- Nama -->
                                <div class="mb-4">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input name="name" type="text" class="form-control" 
                                    aria-describedby="fullnameCheckout" required>
                                </div>
                                <!-- email -->
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control"
                                    aria-describedby="emailCheckout" required>
                                </div>
                                <!-- occupation -->
                                <div class="mb-4">
                                    <label for="occupation" class="form-label">Occupation</label>
                                    <input name="occupation" type="text" class="form-control" 
                                    aria-describedby="occupationCheckout" required>
                                </div>
                                <!-- phone -->
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input name="phone" type="number" class="form-control" 
                                    aria-describedby="phoneCheckout" required>
                                </div>
                                <!-- alamat -->
                                <div class="mb-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control" 
                                    aria-describedby="addressCheckout" required>
                                </div>
                                <button type="submit" class=" btn btn-primary pay">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection