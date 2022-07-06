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
                <li class="active">Services</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
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
