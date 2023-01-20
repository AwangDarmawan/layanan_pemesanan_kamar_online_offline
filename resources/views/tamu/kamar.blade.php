@extends('layouts.app_tamu')
@section('content')

@include("layouts.navbars_tamu.navbar")

 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg_1">
    <h3>Kamar yang nyaman</h3>
</div><!-- bradcam_area_end -->

<div class="offers_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span>Penawaran kami</span>
                    <h3>Untuk Anda</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="../assets_tamu/img/offers/1.png" alt="">
                    </div>
                    <h4 class="mt-3"><span>NO_Kamar :</span> 
                        isino kamar</h4>
                    <h5>isi jenis kamar </h5>
                    <h5><span>Rp. </span>isi harga kamar </h5>
                    <span >
                        deskripsi kamar
                    </span>
                    <a href="{{ url('tamu/kamar/pesan') }}" class="book_now mt-4">Pesan Sekarang</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="../assets_tamu/img/offers/2.png" alt="">
                    </div>
                    <h3>Up to 35% savings on Club <br>
                        rooms and Suites</h3>
                    <ul>
                        <li>Luxaries condition</li>
                        <li>3 Adults & 2 Children size</li>
                    </ul>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="../assets_tamu/img/offers/3.png" alt="">
                    </div>
                    <h3>Up to 35% savings on Club <br>
                        rooms and Suites</h3>
                    <ul>
                        <li>Luxaries condition</li>
                        <li>3 Adults & 2 Children size</li>
                    </ul>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footers_tamu.footer')
@endsection