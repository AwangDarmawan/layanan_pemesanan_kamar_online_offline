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

    <!-- CSS here -->
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets_tamu/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets_tamu/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets_tamu/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets_tamu/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets_tamu/css/themify-icons.css">
    <link rel="stylesheet" href="../assets_tamu/css/nice-select.css">
    <link rel="stylesheet" href="../assets_tamu/css/flaticon.css">
    <link rel="stylesheet" href="../assets_tamu/css/gijgo.css">
    <link rel="stylesheet" href="../assets_tamu/css/animate.css">
    <link rel="stylesheet" href="../assets_tamu/css/slicknav.css">
    <link rel="stylesheet" href="../assets_tamu/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    @yield('header')

    @yield('content')

    @yield('footer')
    @include('components.form_reservasi')
<!-- JS here -->
    <script src="../assets_tamu/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../assets_tamu/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets_tamu/js/popper.min.js"></script>
    <script src="../assets_tamu/js/bootstrap.min.js"></script>
    <script src="../assets_tamu/js/owl.carousel.min.js"></script>
    <script src="../assets_tamu/js/isotope.pkgd.min.js"></script>
    <script src="../assets_tamu/js/ajax-form.js"></script>
    <script src="../assets_tamu/js/waypoints.min.js"></script>
    <script src="../assets_tamu/js/jquery.counterup.min.js"></script>
    <script src="../assets_tamu/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets_tamu/js/scrollIt.js"></script>
    <script src="../assets_tamu/js/jquery.scrollUp.min.js"></script>
    <script src="../assets_tamu/js/wow.min.js"></script>
    <script src="../assets_tamu/js/nice-select.min.js"></script>
    <script src="../assets_tamu/js/jquery.slicknav.min.js"></script>
    <script src="../assets_tamu/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets_tamu/js/plugins.js"></script>
    <script src="../assets_tamu/js/gijgo.min.js"></script>
<!--contact js-->
    <script src="../assets_tamu/js/contact.js"></script>
    <script src="../assets_tamu/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets_tamu/js/jquery.form.js"></script>
    <script src="../assets_tamu/js/jquery.validate.min.js"></script>
    <script src="../assets_tamu/js/mail-script.js"></script>

    <script src="../assets_tamu/js/main.js"></script>
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