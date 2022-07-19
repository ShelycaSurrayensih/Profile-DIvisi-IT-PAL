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
                        <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png"
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
            <div class="thumb" align="center"><img src="assets/images/MapRoad.jpg" alt=""></div>
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

@endsection
