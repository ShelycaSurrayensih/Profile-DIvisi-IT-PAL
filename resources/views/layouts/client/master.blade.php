    {{-- <!-- Header Section Begin -->
    @include('layouts.client.partials.header')
    <!-- Header Section End -->

    <!-- Footer Section Begin -->
    @include('layouts.client.partials.footer')
    <!-- Footer Section End --> --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Divisi Teknologi Informasi</title>
        <!-- Stylesheets -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Responsive File -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- Color File -->
        <link href="assets/css/color.css" rel="stylesheet">
        <link href="assets/css/color-2.css" rel="stylesheet">
        <link href="assets/css/color-3.css" rel="stylesheet">
        <!--  RTL Style -->
        <link href="assets/css/rtl-home.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="assets/images/favicon-pal.png" type="image/x-icon">
        <link rel="icon" href="assets/images/favicon-pal.png" type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
        <style>
            h2 {
                text-shadow: 2px 2px #ffffff;
            }
        </style>
    </head>
    <body>
        @include('layouts.client.partials.header')
        @yield('content')
    </body>
    @include('layouts.client.partials.footer')
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fal fa-arrow-circle-up"></span></div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/lazyload.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
