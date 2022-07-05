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
            <h1>Contact</h1>
            <ul class="bread-crumb clearfix">
                <li><a href={{route("department.index")}}>Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    <!-- Map Section -->
    {{-- <section class="map-section">
        <div class="map-column">
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="assets/images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section> --}}

    <!-- Contact Section Two -->
    <section class="contact-section-two" style="margin-top: 200px;">
        <div class="auto-container">
            <div class="contact-info-area">
                <div class="contact-info">
                    <div class="row">
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-email-6"></span></div>
                                <h3>Email Address</h3>
                                <ul>
                                    <li><a href="mailto:divti@pal.co.id">divti@pal.co.id</a></li>
                                    <li><br><br></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-call-1"></span></div>
                                <h3>Phone Number</h3>
                                <ul>
                                    <li><a href="tel:3520">ext.3520</a></li>
                                    <li><br><br></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-location"></span></div>
                                <h3>Office Address</h3>
                                <ul>
                                    <li><a href="https://goo.gl/maps/u1vZyt35DoDqvaqTA">QPWV+5HG, Jalan Ujung, Ujung, Kec. Semampir, Kota SBY, Jawa Timur 60155</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-area">
                <div class="sec-title text-center">
                    <div class="sub-title">Write Here</div>
                    <h2>Get In Touch</h2>
                </div>
                <!-- Contact Form-->
                <div class="contact-form">
                    <form method="post" action="http://azim.commonsupport.com/Finandox/sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-md-6 form-group">
                                <label for="name">Enter your name</label>
                                <input type="text" name="username" id="name" placeholder="Enter name here......" required="">
                                <i class="fas fa-user"></i>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="email">Enter your email</label>
                                <input type="email" name="email" id="email" placeholder="Enter email here......" required="">
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="message">Enter your message</label>
                                <textarea name="message" id="message" placeholder="Enter message here......"></textarea>
                                <i class="fas fa-edit"></i>
                            </div>

                            <div class="col-md-12 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Get In Touch</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
