<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        kamarKita
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />

    <!-- CSS here -->
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets_tamu/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets_tamu/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets_tamu/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets_tamu/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets_tamu/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets_tamu/css/nice-select.css">
    <link rel="stylesheet" href="../../assets_tamu/css/flaticon.css">
    <link rel="stylesheet" href="../../assets_tamu/css/gijgo.css">
    <link rel="stylesheet" href="../../assets_tamu/css/animate.css">
    <link rel="stylesheet" href="../../assets_tamu/css/slicknav.css">
    <link rel="stylesheet" href="../../assets_tamu/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    @include('layouts.navbars_tamu.navbar')

    <div class="bradcam_area" style="background-color:black">
        <h3>Halaman RESERVASI</h3>
    </div><!-- bradcam_area_end -->

    <div class="container">
        <div class="row justify-content-center">


            <div class="card-body my-5 py-5">
                <h3 class="my-5">RESERVASI DISINI</h3>
                <form action="{{ route('tamu.pesan.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <input type="hidden" value="{{ $id_kamar }}" name="kamar_id">
                        <div class="col-xl-6">
                            <label for="exampleFormControlInput1">Tanggal Check-in</label>
                            <input type="date" name="tgl_masuk" class="form-control" id=""
                                placeholder="Tanggal Check in">
                        </div>
                        <div class="col-xl-6">
                            <label for="exampleFormControlInput1">Tanggal Check-out</label>
                            <input type="date" name="tgl_keluar" class="form-control" id=""
                                placeholder="Tanggal Check out">
                        </div>


                    </div>
                    <div class="row mt-3">

                        <div class="col-xl-6">
                            <label for="exampleFormControlInput1">Lama Menginap</label>
                            <input readonly type="text" class="form-control" id=""
                                placeholder="lama menginap akan muncul disini">
                        </div>

                    </div>

                    <div class="col-xl-12 mt-5 mx-0 px-0">
                        <button type="submit" class="boxed-btn3">RESERVASI</button>
                    </div>
                </form>
                {{-- <form>
        <h6 class="">Data Tamu</h6>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi dengan nama">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Alamat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="isi dengan nama">
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Jenis Kelamin</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Laki-laki</option>
                    <option>perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">NO. Hp</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0895XXXXXXXX">
            </div>
        </div>
        <h6>Data Kamar Yang Akan Disewa</h6>
        <div class="form-group col-md-4 pe-0">
            <label for="exampleFormControlInput1">Pilih Kamar</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>A</option>
                <option>B</option>
            </select>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Check-in</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan tanggal masuk/menempati kamar">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Check-out</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan tanggal keluar kamar">
            </div>
        </div>
        <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2" >Batal</button>
        <span>
        <button type="submit" class="btn bg-gradient-primary col-md-5 mt-2 ms-1" >Reservasi</button>
        </span>
    </form>
       --}}
            </div>
        </div>
    </div>

    @include('layouts.footers_tamu.footer')
    <!-- JS here -->
    <script src="../../assets_tamu/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../../assets_tamu/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../assets_tamu/js/popper.min.js"></script>
    <script src="../../assets_tamu/js/bootstrap.min.js"></script>
    <script src="../../assets_tamu/js/owl.carousel.min.js"></script>
    <script src="../../assets_tamu/js/isotope.pkgd.min.js"></script>
    <script src="../../assets_tamu/js/ajax-form.js"></script>
    <script src="../../assets_tamu/js/waypoints.min.js"></script>
    <script src="../../assets_tamu/js/jquery.counterup.min.js"></script>
    <script src="../../assets_tamu/js/imagesloaded.pkgd.min.js"></script>
    <script src="../../assets_tamu/js/scrollIt.js"></script>
    <script src="../../assets_tamu/js/jquery.scrollUp.min.js"></script>
    <script src="../../assets_tamu/js/wow.min.js"></script>
    <script src="../../assets_tamu/js/nice-select.min.js"></script>
    <script src="../../assets_tamu/js/jquery.slicknav.min.js"></script>
    <script src="../../assets_tamu/js/jquery.magnific-popup.min.js"></script>
    <script src="../../assets_tamu/js/plugins.js"></script>
    <script src="../../assets_tamu/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="../../assets_tamu/js/contact.js"></script>
    <script src="../../assets_tamu/js/jquery.ajaxchimp.min.js"></script>
    <script src="../../assets_tamu/js/jquery.form.js"></script>
    <script src="../../assets_tamu/js/jquery.validate.min.js"></script>
    <script src="../../assets_tamu/js/mail-script.js"></script>

    <script src="../../assets_tamu/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>



</body>

</html>
