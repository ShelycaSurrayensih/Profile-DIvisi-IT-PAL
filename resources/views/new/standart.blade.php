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

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Block Two -->
                <div class="news-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-4.jpg" alt=""></a></div>
                        <div class="lower-content">
                            <div class="category">Business</div>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consecte <br>cing elit, sed do eiusmod tempor.</a></h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            <div class="wrapper">
                                <div class="author-box">
                                    <div class="thumb"><img src="assets/images/resource/thumb-4.jpg" alt=""></div>
                                    <h5>by Hetmayar</h5>
                                </div>
                                <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Block Two -->
                <div class="news-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-5.jpg" alt=""></a></div>
                        <div class="lower-content">
                            <div class="category">Business</div>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                            <h2><a href="blog-details.html">Adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore.</a></h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            <div class="wrapper">
                                <div class="author-box">
                                    <div class="thumb"><img src="assets/images/resource/thumb-5.jpg" alt=""></div>
                                    <h5>by Hetmayar</h5>
                                </div>
                                <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Block Two -->
                <div class="news-block-two">
                    <div class="inner-box">
                        <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-6.jpg" alt=""></a></div>
                        <div class="lower-content">
                            <div class="category">Business</div>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                            <h2><a href="blog-details.html">Magna aliqua. Ut enim ad minim venia <br>m, quis nostrud exercitation ullamco</a></h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            <div class="wrapper">
                                <div class="author-box">
                                    <div class="thumb"><img src="assets/images/resource/thumb-6.jpg" alt=""></div>
                                    <h5>by Hetmayar</h5>
                                </div>
                                <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Block Two -->
                <div class="news-block-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="category">Business</div>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                            <h2><a href="blog-details.html">Laboris nisi ut aliquip ex ea commodo <br>consequat. Duis aute irure dolor.</a></h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                            <div class="wrapper">
                                <div class="author-box">
                                    <div class="thumb"><img src="assets/images/resource/thumb-7.jpg" alt=""></div>
                                    <h5>by Hetmayar</h5>
                                </div>
                                <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box" style="background-image: url(assets/images/background/image-17.jpg);">
                        <div class="lower-content">
                            <div class="quote"><span class="fa fa-quote-left"></span></div>
                            <h2><a href="blog-details.html">Excepteur sint occaecat cupida <br>tat non proident, sunt in.</a></h2>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- News Block Four -->
                <div class="news-block-four">
                    <div class="inner-box" style="background-image: url(assets/images/background/image-16.jpg);">
                        <div class="lower-content">
                            <div class="category">Business</div>
                            <h2><a href="blog-details.html">Culpa qui officia deserunt mollit anim <br>id est laborum. Sed ut perspiciatis</a></h2>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="page-pagination">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fas fa-angle-double-left"></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><span class="fas fa-angle-double-right"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar">

                    <!-- About Widget -->
                    <div class="sidebar-widget about-me">
                        <div class="sidebar-title">
                            <h3>About Me</h3>
                        </div>
                        <div class="widget-content">
                            <div class="image"><img src="assets/images/resource/author-2.jpg" alt=""></div>
                            <h4>Rosalina D. Willaimson</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <div class="sidebar-title">
                            <h3>Search Objects</h3>
                        </div>
                        <form method="post" action="http://azim.commonsupport.com/Finandox/contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search your keyword..." required="">
                                <button type="submit"><span class="icon far fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Post Widget -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h3>Popular Feeds</h3>
                        </div>
                        <div class="widget-content">

                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/thumb-8.jpg" alt=""></a></div>
                                <div class="date"><span class="fa fa-calendar-alt"></span> Feb 25, 2020</div>
                                <h4><a href="blog-details.html">Lorem ipsum dolor sit <br>cing elit, sed do. </a></h4>
                            </div>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/thumb-9.jpg" alt=""></a></div>
                                <div class="date"><span class="fa fa-calendar-alt"></span> Feb 20, 2020</div>
                                <h4><a href="blog-details.html">Lorem ipsum dolor sit <br>cing elit, sed do.</a></h4>
                            </div>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/thumb-10.jpg" alt=""></a></div>
                                <div class="date"><span class="fa fa-calendar-alt"></span> Feb 14, 2020</div>
                                <h4><a href="blog-details.html">Lorem ipsum dolor sit <br> cing elit, sed do.</a></h4>
                            </div>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/thumb-11.jpg" alt=""></a></div>
                                <div class="date"><span class="fa fa-calendar-alt"></span> Feb 14, 2020</div>
                                <h4><a href="blog-details.html">Lorem ipsum dolor sit <br> cing elit, sed do.</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories">
                        <div class="sidebar-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li class="current"><a href="blog-details.html">Business</a> <span class="total-post">26</span></li>
                                <li><a href="blog-details.html">Consultant</a> <span class="total-post">30</span></li>
                                <li><a href="blog-details.html">Creative</a> <span class="total-post">71</span></li>
                                <li><a href="blog-details.html">UI/UX</a> <span class="total-post">68</span></li>
                                <li><a href="blog-details.html">Technology</a><span class="total-post">70</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Social Icon -->
                    <div class="sidebar-widget social-links-widget">
                        <div class="sidebar-title">
                            <h3>Never Miss News</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Twitter Widget -->
                    <div class="sidebar-widget twitter-widget">
                        <div class="sidebar-title">
                            <h3>Twitter Feeds</h3>
                        </div>
                        <div class="widget-content">
                            <div class="post">
                                <div class="icon"><span class="fab fa-twitter"></span></div>
                                <div class="text">Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @ ThemeForest https://t.co/2r1POjOjgV C… https://t.co/rDAnPyClu1</div>
                                <div class="date">Jan 25, 2020</div>
                            </div>
                            <div class="post">
                                <div class="icon"><span class="fab fa-twitter"></span></div>
                                <div class="text">Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @ ThemeForest https://t.co/2r1POjOjgV C… https://t.co/rDAnPyClu1</div>
                                <div class="date">Jan 25, 2020</div>
                            </div>
                            <div class="post">
                                <div class="icon"><span class="fab fa-twitter"></span></div>
                                <div class="text">Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @ ThemeForest https://t.co/2r1POjOjgV C… https://t.co/rDAnPyClu1</div>
                                <div class="date">Jan 25, 2020</div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Widget -->
                    <div class="sidebar-widget instagram-widget">
                        <div class="sidebar-title">
                            <h3>Instagram Feeds</h3>
                        </div>
                        <div class="inner-box">
                            <div class="wrapper-box">
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-1.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-2.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-3.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-4.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-5.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-6.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-7.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-7.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-8.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-8.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                                <div class="image">
                                    <img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/gallery/instagram-9.jpg" alt="">
                                    <div class="overlay-link"><a href="assets/images/gallery/instagram-9.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                </div>
                            </div><!-- /.gallery-wrapper -->
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <div class="sidebar-widget popular-tags">
                        <div class="sidebar-title">
                            <h3>Popular Tags</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="clearfix">
                                <li><a href="blog-details.html"><span>Popular</span></a></li>
                                <li><a href="blog-details.html"><span>desgin</span></a></li>
                                <li><a href="blog-details.html"><span>ux</span></a></li>
                                <li><a href="blog-details.html"><span>usability</span></a></li>
                                <li><a href="blog-details.html"><span>develop</span></a></li>
                                <li><a href="blog-details.html"><span>icon</span></a></li>
                                <li><a href="blog-details.html"><span>business</span></a></li>
                                <li><a href="blog-details.html"><span>consult</span></a></li>
                                <li><a href="blog-details.html"><span>kit</span></a></li>
                                <li><a href="blog-details.html"><span>keyboard</span></a></li>
                                <li><a href="blog-details.html"><span>mouse</span></a></li>
                                <li><a href="blog-details.html"><span>tech</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Add Banner Widget -->
                    <div class="sidebar-widget">
                        <div class="add-banner-widget" style="background-image: url(assets/images/background/image-15.jpg);">
                            <div class="content">
                                <h5>350x600</h5>
                                <h3>Add Banner</h3>
                            </div>
                        </div>
                    </div>

                </aside>
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