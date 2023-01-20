@extends('layouts.app_tamu')
@section('content')
    @include('layouts.navbars_tamu.navbar')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Pilih Kamar yang nyaman disini</h3>
    </div><!-- bradcam_area_end -->

    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h2 class="text-info mt-4">Penawaran kami</h2>
                        <h3>Untuk Anda</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    @foreach ($kamars as $kamar)
                        <div class="single_offers">
                            <div class="about_thumb">
                                <img src="../assets_tamu/img/offers/1.png" alt="">
                            </div>
                            <h4 class="mt-3"><span>NO_Kamar :</span>
                                {{ $kamar->no_kamar }}</h4>
                            <h5>{{ $kamar->jenisKamar->name }} </h5>
                            <h5><span>Rp. </span>{{ $kamar->harga }} </h5>
                            <span>
                                {{ $kamar->deskripsi }}
                            </span>
                            <a href="{{ route('tamu.pesan', $kamar->id) }}" class="book_now mt-4">Pesan Sekarang</a>
                        </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    @include('layouts.footers_tamu.footer')
@endsection
