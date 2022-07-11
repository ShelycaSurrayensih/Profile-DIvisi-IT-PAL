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

<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>Services Details</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="active">Services Details</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <aside class="sidebar">
                    <!-- Category Widget -->
                    <div class="sidebar-widget-two categories-widget-two">
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('Services.kedudukandih')}}">Departement Infrastruktur & Hardware <i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.kedudukandih')}}">Kedudukan dan
                                        Organisasi<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.tugasdih')}}">Tugas Pokok<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.fungsidih')}}">Fungsi<i class="fa fa-angle-right"></i></a></li>
                                <li><a href="{{ route('Services.kedudukandpa')}}">Departement Pengembangan Aplikasi dan Integrasi <i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.kedudukandpa')}}">Kedudukan dan
                                        Organisasi<i class="fa fa-angle-right"></i></a></li>
                                <li class="current"><a class="nav-link ml-3 my-1" href="{{ route('Services.tugasdpa')}}">Tugas Pokok<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.fungsidpa')}}">Fungsi<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Form Widget -->
                    <!-- Contact Info Widget -->
                    <div class="sidebar-widget-two contact-info-widget">
                        <div class="inner-box" style="background-image: url(assets/images/background/image-18.jpg);">
                            <h3>Need Help?</h3>
                            <ul>
                                <li><a href="mailto:divti@pal.co.id">divti@pal.co.id</a></li>
                                <li><a href="tel:wxt.3520">ext.3520</a></li>
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-lg-8">
                <div class="services-details pl-lg-5">
                    <div class="image-box"><img src="assets/images/resource/service-1.jpg" alt=""></div>
                    <div class="content">
                        <div class="sec-title">
                            <div class="sub-title">Departement Pengembangan Aplikasi dan Integrasi</div>
                            <h2>Tugas</h2>
                        </div>
                        <!-- <div class="text">Kedudukan</div> -->
                        <blockquote>
                            <h4>Tugas</h4><br>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Menjabarkan, menyusun strategi pelaksanaan kebijakan Divisi Teknologi Informasi beserta program kerjanya dalam bidang teknologi informasi dan komunikasi secara terintegrasi di lingkungan Perusahaan dalam mendukung keberlangsungan strategi usaha yang dikembangkan oleh Perusahaan.</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Merencanakan, mengkoodinir & melaksanakan, mengevalusi serta melakukan perbaikan terhadap kegiatan dalam bidang yang menjadi tanggung jawabnya</td>
                                    </tr>
                                </tbody>
                            </table>
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</div>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
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
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Portfolio</a></li>
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
<script src="assets/js/knob.js"></script>
<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from azim.commonsupport.com/Finandox/services-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 07:25:20 GMT -->

</html>