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
            <h1>Departement Divisi IT</h1>
            <ul class="bread-crumb clearfix">
                <li><a href={{route("department.index")}}>Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!-- Services Section Three -->
    <section class="services-section-three style-two">

        <div class="auto-container">
            <div class="row">
                <!-- Services Block One -->
                {{-- <div class="service-block-one col-lg-2">

                </div> --}}
                <div class="service-block-one col-lg-6">
                    <div class="inner-box">
                        <div><img src="assets/images/cpu.png"></div><br>
                        <h3><a href={{route("Services.kedudukandih")}} style="color: black">DEPARTEMEN INFRASTRUKTUR DAN HARDWARE</a></h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-6">
                    <div class="inner-box">
                        <div><img src="assets/images/devops.png"></div><br>
                        <h3><a href={{route("Services.kedudukandpa")}} style="color: black">DEPARTEMEN PENGEMBANGAN APLIKASI DAN INTEGRASI</a></h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
                {{-- <!-- Services Block One -->
                <div class="service-block-one col-lg-4">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-assets"></span><span class="round-shape"></span></div>
                        <h3>Property Planning</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-4">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-world"></span><span class="round-shape"></span></div>
                        <h3>Transport & Export</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-4">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-money-1"></span><span class="round-shape"></span></div>
                        <h3>Saving Tax</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-4">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-notebook"></span><span class="round-shape"></span></div>
                        <h3>Growth Business</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
