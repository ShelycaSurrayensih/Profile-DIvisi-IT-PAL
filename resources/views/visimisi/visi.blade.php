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
                <div class="slide-item">
                    <div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/2.jpg')"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Divisi Teknologi Informasi</h3>
                            <h2>PT PAL Indonesia</h2>
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
                                <div class="sub-title">Visi :</div>
                                <div class="text">
                                    Menjadi Penggerak Dibidang Teknologi Untuk Mendukung Proses Bisnis Perusahaan.<br>
                                </div>
                            </div>
                            <div class="sec-title">
                                <div class="sub-title">Misi :</div>
                                <div class="text">
                                    1. Kami adalah penyedia solusi teknologi terintegrasi yang handal dan berkualitas.<br>
                                    2. Kami adalah penyedia layanan teknologi yang sesuai dengan standard yang berlaku.<br>
                                    3. Kami berkomitmen melakukan transformasi digital pada sektor bisnis perusahaan.<br>
                                </div>
                            </div>
                            <div class="sec-title">
                                <div class="sub-title">Tujuan :</div>
                                <div class="text">
                                    Teknologi Informasi (TI) sebagai Bisnis Driver pada Tahun 2025.<br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="image-one">
                                <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/image-10.jpg" alt="">
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
@endsection
