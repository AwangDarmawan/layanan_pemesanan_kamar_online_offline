@extends('layouts.app_tamu')
@section('content')

@include("layouts.navbars_tamu.navbar")
<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <h3>About Kamar Kita</h3>
</div>
<!-- bradcam_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>Abaout as</span>
                        <h3> Penginapan<br>
                                Kamar Kita</h3>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam est, minima autem illo expedita ad porro voluptatem, repudiandae molestiae deserunt, quis recusandae pariatur quos esse doloremque modi excepturi alias quae!</p>
                    <a href="#" class="line-button">Learn More</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about_thumb d-flex">
                    <div class="img_1">
                        <img src="../assets_tamu/img/about/about_1.png" alt="">
                    </div>
                    <div class="img_2">
                        <img src="../assets_tamu/img/about/about_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<div class="about_main_info">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="single_about_info">
                    <h3>Sejarah Kamar Kita</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repudiandae blanditiis sunt molestiae. Delectus magnam architecto voluptas eligendi cumque repellendus dolores praesentium sapiente nobis voluptatem asperiores autem, quaerat error id.</p>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="single_about_info">
                    <h3>Keunggulan Kamar Kita</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero beatae illo doloremque, possimus natus eum nisi quam hic vel et esse aspernatur consequuntur necessitatibus exercitationem eius reprehenderit suscipit soluta numquam?</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about_info_area_start -->
<div class="about_info_area row" >
    <div class="about_active owl-carousel col-md-6"style="width: 50%">
        <div class="single_slider about_bg_1"></div>
        <div class="single_slider about_bg_1"></div>
        <div class="single_slider about_bg_1"></div>
        <div class="single_slider about_bg_1"></div>
    </div>
    <diV class="col-md-6">
        
        <h1>Fasilitas Kamar Kita</h1><br>
            <h3>fasilitas a</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aliquam iure consequuntur perspiciatis veniam, explicabo necessitatibus sit esse in natus, unde exercitationem id labore quo enim cupiditate. Dolor, ut reiciendis!</p>
         
            <h3>fasilitas b</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aliquam iure consequuntur perspiciatis veniam, explicabo necessitatibus sit esse in natus, unde exercitationem id labore quo enim cupiditate. Dolor, ut reiciendis!</p>
            <h3>fasilitas c</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aliquam iure consequuntur perspiciatis veniam, explicabo necessitatibus sit esse in natus, unde exercitationem id labore quo enim cupiditate. Dolor, ut reiciendis!</p>
            <h3>fasilitas d</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aliquam iure consequuntur perspiciatis veniam, explicabo necessitatibus sit esse in natus, unde exercitationem id labore quo enim cupiditate. Dolor, ut reiciendis!</p>
            
    </div>
        
</div>
<!-- about_info_area_start -->

<!-- forQuery_start -->
<div class="forQuery">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-md-12">
                <div class="Query_border">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="Query_text">
                                    <p>Bisa juga hubungi kami untuk Reservasi, silahkan!</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="phone_num">
                                    <a href="#" class="mobile_no">+62 867 0000 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forQuery_end-->

 <!-- instragram_area_start -->
 <div class="instragram_area">
    <div class="single_instagram">
        <img src="../assets_tamu/img/instragram/1.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="../assets_tamu/img/instragram/2.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="../assets_tamu/img/instragram/3.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="../assets_tamu/img/instragram/4.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="../assets_tamu/img/instragram/5.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
</div>
<!-- instragram_area_end -->
<!-- about_main_info_end -->
@include('layouts.footers_tamu.footer')
@endsection