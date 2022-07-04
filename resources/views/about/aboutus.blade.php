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
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
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
                            <li><a href="#" target="_blank"><span class="fab fa-linkedin"></span></a></li>
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
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="assets/images/sticky-logo.png" alt="" title=""></a>
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
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://twitter.com/ptpal_indonesia"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/HumasPTPAL/"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="https://www.instagram.com/ptpal_indonesia/"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w"><span class="fab fa-youtube"></span></a></li>
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
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Page Banner Section -->
    <section class="page-banner">
     <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('department.index')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>

    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title">Divisi Teknologi</div>
                <h2>Program Kerja</h2>
            </div>
            <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">2022</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false"> 2023</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">2024</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">2025</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Quick Win</h2>
                                </div>
                                <div class="text">
                                1. Dashboard performance management mobile (HP Android + Tablet)<br>
                                2. Data akuisisi (CCTV,  Sensor, Barcode)<br>
                                3. Upgrade infrastruktur jaringan digital 4.0 di area produksi<br>
                                4. Sertifikasi ISO 27001<br>
                                5. ERP IM 4.0 tahap 1 & 2
                                </div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">
                                1. ITML skor 3,6 <br>
                                2. INDI 4.0 skor 3,0 <br>
                                3. Dashboard management<br>
                                4. Upgrade data center tier-3<br>
                                5. CRM (Customer Relationship Management)<br>
                                6. Audit management<br>
                                7. Big Data<br>
                                8. Predictive Analysis<br>
                                9. Security architecture<br>
                                10. Komputerisasi fasilitas & peralatan produksi tahap 1<br>
                                11. ERP IM 4.0 tahap 3
                                </div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                      <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">
                                1. Big data (lanjutan) <br>
                                2. ITML skor 4,0<br>
                                3. INDI 4.0 skor 3,5<br>
                                4. Dashboard Management (lanjutan)<br>
                                5. Predictive analysis (lanjutan)<br>
                                6. Audit management (lanjutan)<br>
                                7. E-Research management<br>
                                8. Security architecture (advanced)<br>
                                9. Komputerisasi fasilitas & peralatan produksi tahap 2
                                </div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">
                                1. Big data (lanjutan) <br>
                                2. ITML skor 4,1<br>
                                3. INDI 4.0 skor 3,6<br>
                                4. Dashboard Management (lanjutan)<br>
                                5. Komputerisasi fasilitas & peralatan produksi tahap 3
                                </div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
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
                                    <li><a href="https://www.facebook.com/HumasPTPAL/"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/ptpal_indonesia"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                    <li><a href="https://www.instagram.com/ptpal_indonesia/"><span class="fab fa-instagram"></span></a></li>
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
                                            <li><a href={{route("department.index")}}>Home</a></li>
                                            <li><a href={{route("visimisi.visi")}}>Visi & Misi</a></li>
                                            <li><a href={{ route("about.aboutus")}}>About</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href={{ route("galeri.galeri")}}>Gallery</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><a href="#">News</a></li>
                                            <li><a href="#">Press Release</a></li>
                                            <li><a href="#">Case Study</a></li>
                                            <li><a href="#">Terms</a></li>
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

<!-- Mirrored from azim.commonsupport.com/Finandox/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 07:25:07 GMT -->
</html>
