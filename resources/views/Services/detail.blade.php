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
            <h1>Sharing Knowledge</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('department.index')}}">Home</a></li>
                <li class="active">Detail</li>
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
                    <div class="news-block-two blog-single-post">
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="category"><a href="{{asset('dokument/'.$sharings->dokumen)}}" style="color: white">Download pdf</a></div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>{{$sharings->tanggal_dibuat}}</a></li>
                                </ul>
                                <h2>{{$sharings->judul}}</h2>
                                <div class="text"><p>{{$sharings->description}}</p></div>
                                <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png') }}" data-src="{{ asset('assets/images/resource/news-7.jpg')}}" alt=""></a></div>
                                <div class="related-post">
                                    <div class="group-title">
                                        <h3>Related Post</h3>
                                    </div>
                                    <div class="row">
                                        <div class="news-block-five col-md-6">
                                            <div class="inner-box">
                                                <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/news-10.jpg')}}" alt=""></a></div>
                                                <div class="lower-content">
                                                    <ul class="post-meta">
                                                        <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                                    </ul>
                                                    <h3><a href="blog-details.html">A series of iOS 7 inspire vector icons sense.</a></h3>
                                                    <div class="text">Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news-block-five col-md-6">
                                            <div class="inner-box">
                                                <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/news-11.jpg')}}" alt=""></a></div>
                                                <div class="lower-content">
                                                    <ul class="post-meta">
                                                        <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                                    </ul>
                                                    <h3><a href="blog-details.html">A series of iOS 7 inspire vector icons sense.</a></h3>
                                                    <div class="text">Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-box-two">
                                    <div class="wrapper-area">
                                        <div class="img-box">
                                            <img src="{{asset('assets/images/resource/author-3.jpg')}}" alt="Awesome Image">
                                        </div>
                                        <div class="content">
                                            <h5>Written by</h5>
                                            <h3>Steve Anderson</h3>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation is enougn for today.</div>
                                        </div>

                                    </div>
                                </div>
                                <div class="comments-area">
                                    <div class="group-title">
                                        <h3>03 Comments</h3>
                                    </div>
                                    <!--Comment Box-->
                                    <div class="comment-box">
                                        <div class="comment">
                                            <div class="author-thumb"><img src="{{asset('assets/images/resource/thumb-12.jpg')}}" alt=""></div>
                                            <div class="comment-inner">
                                                <div class="comment-info"><h5>Rosalina Kelian</h5><span class="date">February 18, 2020</span></div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                <a class="reply-btn" href="#"><span class="fal fa-reply"></span> Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Comment Box-->
                                    <div class="comment-box comment-reply">
                                        <div class="comment">
                                            <div class="author-thumb"><img src="{{asset('assets/images/resource/thumb-13.jpg')}}"  alt=""></div>
                                            <div class="comment-inner">
                                                <div class="comment-info"><h5>Steven Rich</h5><span class="date">February 20, 2020</span></div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
                                                <a class="reply-btn" href="#"><span class="fal fa-reply"></span> Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Comment Box-->
                                    <div class="comment-box">
                                        <div class="comment">
                                            <div class="author-thumb"><img src="{{asset('assets/images/resource/thumb-14.jpg')}}" alt=""></div>
                                            <div class="comment-inner">
                                                <div class="comment-info"><h5>William Cobus</h5><span class="date">February 25, 2020</span></div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                <a class="reply-btn" href="#"><span class="fal fa-reply"></span> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <div class="group-title">
                                        <h3>Post Comment</h3>
                                    </div>
                                    <!-- Contact Form-->
                                    <div class="contact-form">
                                        <form method="post" action="http://azim.commonsupport.com/Finandox/sendemail.php" id="contact-form">
                                            <div class="row clearfix">
                                                <div class="col-md-12 form-group">
                                                    <textarea name="message" placeholder="Enter message here......"></textarea>
                                                    <i class="fas fa-edit"></i>
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <input type="text" name="username" placeholder="Enter name here......" required="">
                                                    <i class="fas fa-user"></i>
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <input type="email" name="email" placeholder="Enter email here......" required="">
                                                    <i class="fas fa-envelope"></i>
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <input type="email" name="email" placeholder="Type your website...." required="">
                                                    <i class="fas fa-globe"></i>
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Post Comment</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">

                        <!-- About Widget -->
                        <div class="sidebar-widget about-me">
                            <div class="sidebar-title"><h3>About Me</h3></div>
                            <div class="widget-content">
                                <div class="image"><img src="{{asset('assets/images/resource/author-2.jpg')}}" alt=""></div>
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
                            <div class="sidebar-title"><h3>Search Objects</h3></div>
                            <form method="post" action="http://azim.commonsupport.com/Finandox/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search your keyword..." required="">
                                    <button type="submit"><span class="icon far fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h3>Popular Feeds</h3></div>
                            <div class="widget-content">

                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/thumb-8.jpg')}}" alt=""></a></div>
                                    <div class="date"><span class="fa fa-calendar-alt"></span> Feb 25, 2020</div>
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit <br>cing elit, sed do. </a></h4>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="{{asset('assets/images/resource/image-spacer-for-validation.pn')}}" data-src="{{asset('assets/images/resource/thumb-9.jpg')}}" alt=""></a></div>
                                    <div class="date"><span class="fa fa-calendar-alt"></span> Feb 20, 2020</div>
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit <br>cing elit, sed do.</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categories</h3></div>
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
                            <div class="sidebar-title"><h3>Never Miss News</h3></div>
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
                            <div class="sidebar-title"><h3>Twitter Feeds</h3></div>
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
                            </div>
                        </div>

                        <!-- Gallery Widget -->
                        <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title"><h3>Instagram Feeds</h3></div>
                            <div class="inner-box">
                                <div class="wrapper-box">
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-1.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-2.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-3.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-4.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-4.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-5.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-5.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-6.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-6.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-7.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-7.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-8.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-8.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/instagram-9.jpg')}}" alt="">
                                        <div class="overlay-link"><a href="{{asset('assets/images/gallery/instagram-9.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                </div><!-- /.gallery-wrapper -->
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Popular Tags</h3></div>
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


    </section>
@endsection
