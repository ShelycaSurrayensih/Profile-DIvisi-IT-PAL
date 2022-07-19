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
        <h1>Blog Grid</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('department.index')}}">Home</a></li>
            <li class="active">News</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="row">
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
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
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-2.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-3.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>28th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-12.jpg" alt=""></a></div>
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
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-13.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-14.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>28th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-15.jpg" alt=""></a></div>
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
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-16.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-17.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>28th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-18.jpg" alt=""></a></div>
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
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-19.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                    </div>
                </div>
            </div>
            <!-- News Block One -->
            <div class="news-block-one col-lg-4">
                <div class="inner-box">
                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-20.jpg" alt=""></a></div>
                    <div class="lower-content">
                        <div class="category">Business</div>
                        <ul class="post-meta">
                            <li><a href="#"><i class="far fa-calendar-alt"></i>28th March 2020</a></li>
                            <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                        </ul>
                        <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
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