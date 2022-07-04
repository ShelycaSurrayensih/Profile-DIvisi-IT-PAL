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
            <h1>Hot Issue & Hopes</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('department.index')}}">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!-- Services Section Three -->
    <section class="services-section-three style-two">
        {{-- <div class="auto-container">

        </div> --}}
        <div class="auto-container">
            <h1 class="text-center text-uppercase font-weight-bold">Hot Issue</h1>
            <div class="row">
                <!-- Services Block One -->

                <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/HI1.png">
                        <h3>Project schedulling masih manual</h3>
                        <br>
                        <br>
                    </div>
                </div>
                 <!-- Services Block One -->
                 <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/HI2.png">
                        <h3>Infrastruktur jaringan digital di area produksi kurang memadai</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
                 <!-- Services Block One -->
                 <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/HI3.png">
                        <h3>Fasilitas & peralatan produksi belum terkomputerisasi</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/HI4.png">
                        <h3>Pemenuhan persyaratan sistem manajemen Divisi TI masih rendah</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="auto-container">
            <h1 class="text-center text-uppercase font-weight-bold">Hopes</h1>
            <div class="row">
                <!-- Services Block One -->
                <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/Hope1.png">
                        <h3>Project scheduling sudah terintegrasi</h3>
                        <br>
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/Hope2.png">
                        <h3>Tersedia jaringan digital yang memadai</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/Hope3.png">
                        <h3>Fasilitas produksi sudah terkomputerisasi</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
                <!-- Services Block One -->
                <div class="service-block-one col-lg-3">
                    <div class="inner-box">
                        <img src="assets/images/hotissue/Hope3.png">
                        <h3>Sistem manajemen Divisi TI sesuai strandard</h3>
                        {{-- <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
