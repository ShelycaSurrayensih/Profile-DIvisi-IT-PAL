<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Finandox/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 07:22:04 GMT -->

<head>
    <meta charset="utf-8">
    <title>Divisi Teknologi Informasi</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color-2.css" rel="stylesheet">

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

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap style-two">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-two">
            <!-- Header Top Two -->
            <div class="header-top-two">
                <div class="auto-container">
                    <div class="inner">
                        <div class="top-left">
                            <ul class="contact-info">
                                <li><a href="mailto:mailto:divti@pal.co.id"><i class="far fa-envelope"></i>divti@pal.co.id</a></li>
                                <li><i class="far fa-phone"></i> ext.3520</li>
                            </ul>
                        </div>

                        <div class="top-middile">
                            <div class="text">Welcome To Information Technology Division (PT PAL)</div>
                        </div>

                        <div class="top-right">
                            <!-- <div class="language">
                            <form action="#" class="language-switcher">
                                <select class="selectpicker">
                                    <option value="1">EN</option>
                                    <option value="1">FR</option>
                                    <option value="1">SP</option>
                                    <option value="1">BE</option>
                                </select>
                            </form>
                        </div> -->
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="https://www.instagram.com/ptpal_indonesia/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="https://id.linkedin.com/company/pt-pal-indonesia" target="_blank"><span class="fab fa-linkedin"></span></a></li>
                                <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Logo-->
                            <div class="logo-box">
                                <div class="logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""></a></div>
                            </div>
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon fal fa-bars"></span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href={{route("department.index")}}>Home</a></li>
                                        <li><a href={{route("visimisi.visi")}}>Visi & Misi</a></li>
                                        <li><a href={{ route("about.aboutus")}}>About Us</a></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href={{route("Services.Departement")}}>Departement</a></li>
                                                <li><a href={{route("Services.hotissue")}}>Hot Issue</a></li>
                                                <li><a href="services-details.html">Tugas & Tanggung Jawab</a></li>
                                                <li><a href={{route("Services.sharing")}}>Sharing Knowledge</a></li>
                                                <li><a href="https://portal.pal.co.id/">Layanan TI</a></li>
                                            </ul>
                                        </li>
                                        <li><a href={{ route("galeri.galeri")}}>Galeri</a></li>
                                        <li class="dropdown"><a href="#">News</a>
                                            <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href={{route('structure.structurediv')}}>Structure</a></li>
                                                {{-- <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li> --}}

                                                {{-- <li class="dropdown"><a href="shop.html">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Products</a></li>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li> --}}
                                                <li><a href={{route('qna.qna')}}>Qna</a></li>
                                                {{-- <li><a href="404.html">404</a></li> --}}
                                            </ul>
                                        </li>

                                        <li><a href={{route("contact.contacts")}}>Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Link Btn-->
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><img src="assets/images/bumn.png" alt=""></a></div>
                            <!-- <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""></a></div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" title=""><img src="assets/images/sticky-logo-2.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#" target="_blank"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="https://www.instagram.com/ptpal_indonesia/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="http://azim.commonsupport.com/Finandox/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Idea</a></li>
                        <li><a href="{{route('department.index')}}">Service</a></li>
                        <li><a href="#">Growth</a></li>
                        <li><a href="#">Plan</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Banner Section -->
        <section class="banner-section style-two">
            <div class="banner-carousel theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                <!-- Slide Item -->
                {{-- <div class="slide-item">
                    <div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/2.jpg')"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Divisi Teknologi Informasi</h3>
                            <h2>PT PAL Indonesia</h2>

                        </div>
                    </div>
                </div> --}}

                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/6.jpg')"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Divisi Teknologi Informasi</h3>
                            <h2>PT PAL Indonesia </h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- Feature Section -->
        <section class="feature-section">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6 offset-2">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <img src="assets/images/sinergi.png">
                                    <h5>Sinergi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    {{-- img src="assets/images/conversation.png" alt="" --}}
                                    <img src="assets/images/conversation.png">
                                    <h5>Interaktif</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <img src="assets/images/adaptation.png">
                                    <h5>Adaptif</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <img src="assets/images/product-development.png">
                                    <h5>Produktif</h5>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon"><span class="flaticon-money-1"></span></div>
                                <h5>Insurance</h5>
                            </div>
                        </div>
                    </div>  --}}
                        {{-- <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon"><span class="flaticon-notebook"></span></div>
                                <h5>Criminal Case</h5>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section Two -->
        <section class="about-section-two">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="sec-title">
                                <div class="sub-title" style="font-size: 24px!important">Profil Divisi Teknologi Informasi PT PAL Indonesia</div>
                                <div class="text" style="font-size: 18px!important">PT PAL INDONESIA (PERSERO) sudah lebih dari -+30 tahun berpengalaman dalam bidang Rancang Bangun Kapal (Kapal Komersial, Kapal Perang dan Kapal Khusus) dan Rekayasa umum.<br><br>

                                    Rancang bangun kapal mencakup berbagai jenis kapal ; Kapal angkutan/muatan curah sampai dengan 50.000 DWT, Kapal Penumpang sampai diatas 500 penumpang, Tanker sampai dengan 30.000 LTDW, Kapal Kontainer sampai sampai 1,600 TEU'S, Kapal Patroli Cepat sampai 57 meter, Tug Boat dan Kapal Pemukat sampai dengan 60 GrossTon. Sebagai tambahan, PT PAL INDONESIA (PERSERO) telah banyak berhasil memproduksi Floating Pier untuk pemeliharaan tentang segala kapal yang tertentu.<br><br>

                                    PT PAL INDONESIA (PERSERO) telah menerapkan NAPA/CadMatic software untuk meningkatkan kemampuan design dan produksi pembuatan kapal perusahaan melakukan autoimmunisasi dan efisiensi. Dan PAL INDONESIA melakukan share dengan perusahaan yang dominan untuk pasar pembuatan kapal negeri.<br></div>
                            </div>
                            <div class="author-info">
                                <div class="wrapper-box">
                                    <h2>Aris Mulyono</h2>
                                    <div class="designation">Kepala Divisi Teknologi Informasi</div>
                                    <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod..</div> -->
                                </div>
                                <!-- <div class="signature"><img src="assets/images/resource/signature-2.png" alt=""></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="image-one">
                                <div class="lazy-image owl-lazy img-home" src="assets/images/resource/image-spacer-for-validation.png"
                                style="height: 800px!important;width: 600px!important;" data-src="assets/images/resource/Aris-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Road -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Divisi Teknologi Informasi</div>
                    <h2>ROADMAP</h2>
                    <div class="thumb"  align="center"><img src="assets/images/MapRoad.jpg" alt=""></div>
                </div>
            </div>
        </section>

        <!-- Funfacts Section -->
        <section class="funfacts-section" style="background-image: url(assets/images/background/image-19.jpg);">
            <div class="auto-container">
                <!-- Fact Counter -->
                <div class="fact-counter-two">
                    <div class="row">
                        <!--Column-->
                        <div class="column counter-column col-xl-4 col-lg-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-12.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="4.0">0</span>
                                    </div>
                                    <div class="counter-title">ITML</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        {{-- <div class="column counter-column col-xl-3 col-lg-6">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-13.png" alt=""></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="71">0</span><span>%</span>
                                </div>
                                <div class="counter-title">Business Monitoring</div>
                            </div>
                        </div>
                    </div> --}}

                        <!--Column-->
                        <div class="column counter-column col-xl-4 col-lg-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-14.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3.5">0</span>
                                    </div>
                                    <div class="counter-title">INDI 4.0</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-xl-3 col-lg-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-15.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="42">0</span><span>%</span>
                                    </div>
                                    <div class="counter-title">Rating Helpdesk</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Statistic Section -->
        <section class="statistic-section">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="graph"><img src="assets/images/resource/graph.png" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="sub-title">Our Startegy</div>
                            <h2>Get Done With <br> Us Your Project</h2>
                        </div>
                        <div class="progress-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <h5>Business Planing</h5>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="74%">
                                    <div class="count-text">74%</div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <h5>Business Planing</h5>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="64%">
                                    <div class="count-text">64%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section Two -->
        <section class="services-section-two">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="left-column" style="background-image: url(assets/images/background/image-8.jpg);">
                        <div class="sec-title light">
                            <div class="sub-title">Get In Touch</div>
                            <h2>Get Us Here Or <br> Share Details</h2>
                        </div>
                        <!-- Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="http://azim.commonsupport.com/Finandox/sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md-12 form-group">
                                        <input type="text" name="username" placeholder="Enter name here......" required="">
                                        <i class="fas fa-user"></i>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <input type="email" name="email" placeholder="Enter email here......" required="">
                                        <i class="fas fa-envelope"></i>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <textarea name="message" placeholder="Enter message here......"></textarea>
                                        <i class="fas fa-edit"></i>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Get In Touch</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="services-content">
                            <div class="sec-title">
                                <div class="sub-title">Our Services</div>
                                <h2>What Actually We <br>Do Here.</h2>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="icon"><img src="assets/images/icons/icon-16.png" alt=""></div>
                                <h2>Capital Market</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="icon"><img src="assets/images/icons/icon-17.png" alt=""></div>
                                <h2>Insurance & Planning</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="icon"><img src="assets/images/icons/icon-18.png" alt=""></div>
                                <h2>Financial Strategy</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Portfolio</div>
                    <h2>Case Study</h2>
                </div>
                <div class="row">
                    <!-- Gallery Block One -->
                    <div class="col-lg-4 col-md-6 style-two gallery-block-one">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-18.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-4 col-md-6 style-two gallery-block-one">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-19.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-4 col-md-6 style-two gallery-block-one">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-20.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-4 col-md-6 style-two gallery-block-one">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-21.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-4 col-md-6 style-two gallery-block-one">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-22.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-4 col-md-6 style-two gallery-block-one">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-23.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section class="video-section style-two" style="background-image: url(assets/images/background/image-21.jpg);">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Intro Video</div>
                </div>
                <div class="default-video-box text-center wow zoomIn" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <a href="https://youtu.be/xPbxKixWaQI" class="overlay-link lightbox-image video-fancybox ripple"><span class="fas fa-play"></span></a>
                </div>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Team</div>
                    <h2>Leadership Team</h2>
                </div>
                <div class="row">
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/team-1.jpg" alt=""></div>
                            <div class="content">
                                <div class="designation">Founder</div>
                                <h3>Rosalina D. William</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" target="_blank"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/team-2.jpg" alt=""></div>
                            <div class="content">
                                <div class="designation">CEO</div>
                                <h3>Velavos H. DesuJa</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" target="_blank"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/team-3.jpg" alt=""></div>
                            <div class="content">
                                <div class="designation">Developer</div>
                                <h3>Abdur Rahman J.</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" target="_blank"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/team-1.jpg" alt=""></div>
                            <div class="content">
                                <div class="designation">Founder</div>
                                <h3>Rosalina D. William</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" target="_blank"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/team-2.jpg" alt=""></div>
                            <div class="content">
                                <div class="designation">CEO</div>
                                <h3>Velavos H. DesuJa</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" target="_blank"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/team-3.jpg" alt=""></div>
                            <div class="content">
                                <div class="designation">Developer</div>
                                <h3>Abdur Rahman J.</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#" target="_blank"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="testimonial-section" style="background-image: url(assets/images/background/image-7.jpg);">
            <div class="auto-container">
                <div class="sec-title">
                    <div class="sub-title">Testimonials</div>
                    <h2>Clients Feedback</h2>
                </div>
                <div class="row">
                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "2" } , "1000":{ "items" : "3" }}}'>
                        <div class="slide-item">
                            <!-- Testimonial-block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="fal fa-star"></span></div>
                                    <div class="quote"><span class="fal fa-quote-left"></span></div>
                                    <h4>Design Quality</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb"><img src="assets/images/resource/thumb-1.jpg" alt=""></div>
                                    <h4>Alexer Valvin</h4>
                                    <div class="designation">Founder, Coxer IT</div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <!-- Testimonial-block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="fal fa-star"></span></div>
                                    <div class="quote"><span class="fal fa-quote-left"></span></div>
                                    <h4>Design Quality</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb"><img src="assets/images/resource/thumb-2.jpg" alt=""></div>
                                    <h4>Hilix Darwin Kalia</h4>
                                    <div class="designation">Founder, Coxer IT</div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <!-- Testimonial-block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="fal fa-star"></span></div>
                                    <div class="quote"><span class="fal fa-quote-left"></span></div>
                                    <h4>Design Quality</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb"><img src="assets/images/resource/thumb-3.jpg" alt=""></div>
                                    <h4>Kilbar D. Baldos</h4>
                                    <div class="designation">Founder, Coxer IT</div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <!-- Testimonial-block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="fal fa-star"></span></div>
                                    <div class="quote"><span class="fal fa-quote-left"></span></div>
                                    <h4>Design Quality</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb"><img src="assets/images/resource/thumb-1.jpg" alt=""></div>
                                    <h4>Alexer Valvin</h4>
                                    <div class="designation">Founder, Coxer IT</div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <!-- Testimonial-block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="fal fa-star"></span></div>
                                    <div class="quote"><span class="fal fa-quote-left"></span></div>
                                    <h4>Design Quality</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb"><img src="assets/images/resource/thumb-2.jpg" alt=""></div>
                                    <h4>Hilix Darwin Kalia</h4>
                                    <div class="designation">Founder, Coxer IT</div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <!-- Testimonial-block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="icon"><span class="fal fa-star"></span></div>
                                    <div class="quote"><span class="fal fa-quote-left"></span></div>
                                    <h4>Design Quality</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
                                </div>
                                <div class="author-info">
                                    <div class="thumb"><img src="assets/images/resource/thumb-3.jpg" alt=""></div>
                                    <h4>Kilbar D. Baldos</h4>
                                    <div class="designation">Founder, Coxer IT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">News</div>
                    <h2>News From Resource</h2>
                </div>
                <div class="row">
                    <!-- News Block One -->
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block One -->
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Business consultant is involved in the planning.</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block One -->
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-3.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>28th March 2020</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Business consultant is a professional who analyzes.</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-lg-4">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="footer-logo">
                                        <a href="index.html"><img class="lazy-image" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/footer-logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</div>
                                    <ul class="social-links clearfix">
                                        <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#" target="_blank"><span class="fab fa-vimeo-v"></span></a></li>
                                        <li><a href="https://www.instagram.com/ptpal_indonesia/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h3>Links</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Visi Misi</a></li>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Structure</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">Qna</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4">
                            <div class="footer-widget instagram-widget">
                                <h3>Photo Showcase</h3>
                                <div class="inner-box">
                                    <div class="wrapper-box">
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-1.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-2.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-3.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-4.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-5.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-6.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-7.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-7.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-8.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-8.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/gallery-9.jpg" alt="">
                                            <div class="overlay-link"><a href="assets/images/gallery/gallery-9.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                    </div><!-- /.gallery-wrapper -->
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="auto-container">
                <div class="footer-bottom">
                    <div class="copyright">Copyright By<a href="#">Template_path</a> - 2020</div>
                </div>
            </div>
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
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

</body>

<!-- Mirrored from azim.commonsupport.com/Finandox/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 07:22:52 GMT -->

</html>
