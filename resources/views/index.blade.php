@extends('_layouts.app')
@section('content')
    <section>
        <div>

        </div>
    </section>
    <section class="background">
        <div class="head">
            <div class="subhead">
                <div class="konten">
                    <div class="title">
                        <h1>
                            Mau Kemana Hari Ini?
                        </h1>
                        <p>Jelajahi peninggalan sejarah di Jakarta.</p>
                        <button type="button">Lihat Yuk!</button>
                    </div>
                    <div class="pict1">
                        <img src="{{asset('images/museum.jpg')}}" class="pict1">
                    </div>
                </div>
            </div>      
        </div>
    </section>

    <section class="background2">
        <div class="head">
            <div class="subhead">
                <div class="konten">
                    <div class="pict1">
                        <img src="{{asset('images/polaroid.png')}}" class="pict1">
                    </div>
                    <div class="title">
                        <h1>
                            Our Pick!
                        </h1>
                        <p>Rekomendasi tempat paling hits minggu ini!</p>
                        <div class="rekom">
                            <p>
                                Chillax Sudirman
                            </p>
                            <p>
                                PIK by The Sea
                            </p>
                            <p>
                                Blok M
                            </p>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>

    <section class="container  part2">
        <div class="judul">
            <h1>
                Bingung mau kemana?
            </h1>
            <h3>Jangan khawatir! Ayo travel bersama Merachy!</h3>
            <br>
            <p>Pilih kategori yang menarik untuk kamu lihat</p>
        <div class="container">
            <div class="row align-items-start kategori">
                <div class="col kat">
                    <img src="{{asset('images/1.png')}}" class="pict2">
                    
                </div>
                <div class="col kat">
                    <img src="{{asset('images/2.png')}}" class="pict2">
                </div>
                <div class="col kat">
                    <img src="{{asset('images/3.png')}}" class="pict2">
                </div>
            </div>        
        </div>
    </section>

    <section class="four">
        <div class="container">
            <div class="visit">
                <h3>Visit Here!</h3>
            </div>
            <div class="row align-items-start place">
                <div class="card col">
                    <div class="place">
                        <img src="{{asset('images/mbloc1.jpg')}}">
                    </div>
                    <div class="detail">
                        <h5>
                            Museum Nasional Indonesia
                        </h5>
                    <div class="detail-text">
                        <!-- link to checkout -->
                        <a href="./checkout.html">  selengkapnya
                           <img src="{{asset('images/arrow.png')}}" width="18px"> </a>
                        <p class="tulisan">Rp35.000</p>
                    </div>
                    </div>
                </div>
                <div class="card col">
                    <div class="place">
                        <img src="{{asset('images/mbloc1.jpg')}}">
                    </div>
                    <div class="detail">
                        <h5>
                            Museum Macan
                        </h5>
                    <div class="detail-text">
                        <a href="#">  selengkapnya
                           <img src="{{asset('images/arrow.png')}}" width="18px"> </a>
                        <p class="tulisan">Rp100.000</p>
                    </div>
                    </div>
                </div>
                <div class="card col">
                    <div class="place">
                        <img src="{{asset('images/mbloc1.jpg')}}">
                    </div>
                    <div class="detail">
                        <h5>
                            Seaworld
                        </h5>
                    <div class="detail-text">
                        <a href="#">  selengkapnya
                           <img src="{{asset('images/arrow.png')}}" width="18px"> </a>
                        <p class="tulisan">Rp9S.000</p>
                    </div>
                    </div>
                </div>
                <div class="card col">
                    <div class="place">
                        <img src="{{asset('images/mbloc1.jpg')}}">
                    </div>
                    <div class="detail">
                        <h5>
                            Taman Mini Indonesia Indah
                        </h5>
                    <div class="detail-text">
                        <a href="#">  selengkapnya
                           <img src="{{asset('images/arrow.png')}}" width="18px"> </a>
                        <p class="tulisan">Rp10.000</p>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection