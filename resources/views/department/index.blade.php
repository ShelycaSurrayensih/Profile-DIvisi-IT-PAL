@extends('layouts.client.master')
@section('content')
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
                <li><a href="#">Service</a></li>
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
        <div class="slide-item">
            <div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/2.jpg')"></div>

            <div class="auto-container">
                <div class="content-box">
                    <h3>Divisi Teknologi Informasi</h3>
                    <h2>PT PAL Indonesia </h2>
                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">-- Our Services --</span></a><a href="#" class="theme-btn btn-style-two"><span class="btn-title">-- Learn More --</span></a></div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/6.jpg')"></div>

            <div class="auto-container">
                <div class="content-box">
                    <h3>Divisi Teknologi Informasi</h3>
                    <h2>PT PAL Indonesia</h2>
                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">-- Our Services --</span></a><a href="#" class="theme-btn btn-style-two"><span class="btn-title">-- Learn More --</span></a></div>
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
                <div class="col-lg-1 col-md-2 col-sm-6 col-xs-6 col-6">
                    <!-- <div class="feature-block-one">
                            <div class="inner-box">
                                <img src="assets/images/sinergi.png">
                                <h5>Sinergi</h5>
                            </div>
                        </div> -->
                </div>
                <div class="col-lg-1 col-md-2 col-sm-6 col-xs-6 col-6">
                    <!-- <div class="feature-block-one">
                            <div class="inner-box">
                                <img src="assets/images/sinergi.png">
                                <h5>Sinergi</h5>
                            </div>
                        </div> -->
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
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
                        <div class="sub-title">Profil Divisi Teknologi Informasi PT PAL Indonesia</div>
                        <div class="text">PT PAL INDONESIA (PERSERO) sudah lebih dari -+30 tahun berpengalaman dalam bidang Rancang Bangun Kapal (Kapal Komersial, Kapal Perang dan Kapal Khusus) dan Rekayasa umum.<br><br>

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
                        <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/Aris-2.jpg" alt="">
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
                <div class="column counter-column col-xl-3 col-lg-6">
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
                <div class="column counter-column col-xl-3 col-lg-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon"><img src="assets/images/icons/icon-13.png" alt=""></div>
                            <div class="count-outer count-box">
                                <span class="count-text">ISO</span>
                            </div>
                            <div class="counter-title">27001:2018</div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-xl-3 col-lg-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon"><img src="assets/images/icons/icon-12.png" alt=""></div>
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

<!-- Video Section -->
<section class="video-section style-two" style="background-image: url(assets/images/background/image-21.jpg);">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sub-title">Intro Video</div>
        </div>
        <div class="default-video-box text-center wow zoomIn" data-wow-delay="200ms" data-wow-duration="1200ms">
            <a href="https://youtu.be/xPbxKixWaQI" class="overlay-link lightbox-image video-fancybox ripple"><span class="fas fa-play"></span></a>
        </div>
    </div><br><br><br><br><br>
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
@endsection