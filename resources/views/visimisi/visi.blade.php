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
                <!-- Page Banner Section -->
                <section class="page-banner">
                    <div class="image-layer lazy-image" data-bg="url({{asset('assets/images/background/image-11.jpg')}})"></div>
                    <div class="bottom-rotten-curve alternate"></div>

                    <div class="auto-container">
                        <h1>Visi - Misi - Tujuan</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('department.index')}}">Home</a></li>
                            <li class="active">Visi Misi</li>
                        </ul>
                    </div>

                </section>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- About Section Two -->
        <section class="about-section-two">
            <div class="thumb" align="center"><img src="{{asset('assets/images/VisiMisi.jpg')}}" alt=""></div>
        </section>
@endsection
