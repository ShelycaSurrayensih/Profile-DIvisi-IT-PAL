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
                <div class="news-block-two blog-single-post">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="category">Business</div>
                            <ul class="post-meta">
                                <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                            </ul>
                            <h2>Lorem ipsum dolor sit amet, consecte <br>cing elit, sed do eiusmod tempor.</h2>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                            </div>
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-7.jpg" alt=""></a></div>
                            <div class="text-block-wrapper">
                                <div class="text-block">
                                    <h3>A cleansing hot shower or bath</h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. </div>
                                </div>
                                <div class="text-block">
                                    <h3>Setting the mood with incense</h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. </div>
                                </div>
                                <div class="text-block">
                                    <h3>Excepteur sint occaecat cupidatat</h3>
                                    <ul class="list">
                                        <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                        <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                        <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                        <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                        <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                    </ul>
                                </div>
                            </div>
                            <blockquote>
                                <h5>by Hetmayar</h5>
                                <div class="text">Viral dreamcatcher keytar typewriter, aest hetic offal umami. Aesthetic polaroid pug pitchfork post-ironic.</div>
                                <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                            </blockquote>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-8.jpg" alt=""></a></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</div>
                                </div>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </div>
                            <div class="post-share">
                                <div class="left-column">
                                    <h4>Releted Tags</h4>
                                    <ul class="tag-list clearfix">
                                        <li><a href="blog-details.html"><span>Popular</span></a></li>
                                        <li><a href="blog-details.html"><span>desgin</span></a></li>
                                        <li><a href="blog-details.html"><span>ux</span></a></li>
                                    </ul>
                                </div>
                                <div class="right-column">
                                    <h4>Social Share</h4>
                                    <ul class="social-links">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-post-pagination">
                                <div class="wrapper-box">

                                    <div class="prev-post">
                                        <h5> Previous Post</h5>
                                        <h4>Tips On Minimalist</h4>
                                    </div>

                                    <div class="page-view"><span class="fa fa-th"></span></div>

                                    <div class="next-post">
                                        <h5>Next Topic </h5>
                                        <h4>Less Is More</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="related-post">
                                <div class="group-title">
                                    <h3>Related Post</h3>
                                </div>
                                <div class="row">
                                    <div class="news-block-five col-md-6">
                                        <div class="inner-box">
                                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-10.jpg" alt=""></a></div>
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
                                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="assets/images/resource/image-spacer-for-validation.png" data-src="assets/images/resource/news-11.jpg" alt=""></a></div>
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
                                        <img src="assets/images/resource/author-3.jpg" alt="Awesome Image">
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
                                        <div class="author-thumb"><img src="assets/images/resource/thumb-12.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h5>Rosalina Kelian</h5><span class="date">February 18, 2020</span>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                            <a class="reply-btn" href="#"><span class="fal fa-reply"></span> Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <!--Comment Box-->
                                <div class="comment-box comment-reply">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="assets/images/resource/thumb-13.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h5>Steven Rich</h5><span class="date">February 20, 2020</span>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
                                            <a class="reply-btn" href="#"><span class="fal fa-reply"></span> Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <!--Comment Box-->
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="assets/images/resource/thumb-14.jpg" alt=""></div>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h5>William Cobus</h5><span class="date">February 25, 2020</span>
                                            </div>
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