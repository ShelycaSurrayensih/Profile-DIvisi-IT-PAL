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
            <h1>Gallery</h1>
            <ul class="bread-crumb clearfix">
                <li><a href={{route("department.index")}}>Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="sortable-masonry">
            <div class="auto-container">
                <!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns">
                        <li class="active filter" data-role="button" data-filter=".all"><span>Seminar</span></li>
                        <li class="filter" data-role="button" data-filter=".category-1"><span>Project</span></li>
                        <li class="filter" data-role="button" data-filter=".category-2"><span>Kegiatan Divisi</span></li>
                    </ul>
                </div>
            </div>
            <div class="auto-container">
                <div class="items-container row">
                    <!-- Gallery Block One -->
                    @foreach ($galeris as $gal)
                        @if ($gal->kategori == 'Seminar')
                            <div class="col-lg-3 col-md-6 gallery-block-one all">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('images/'.$gal->gambar)}}" alt="" style="width: 370px; height:300px">
                                    </div>
                                    <div class="caption-title">
                                        <h3><a href="#">{{ $gal->nama_kegiatan }}</a></h3>
                                        <div class="view-project"><a data-fancybox="example gallery" href="{{asset('images/'.$gal->gambar)}}" class="zoom-btn"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @foreach ($galeris as $gal)
                        @if ($gal->kategori == 'Project')
                            <div class="col-lg-3 col-md-6 gallery-block-one category-1">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('images/'.$gal->gambar)}}" alt="" style="width: 370px; height:300px">
                                    </div>
                                    <div class="caption-title">
                                        <h3><a href="#">{{ $gal->nama_kegiatan }}</a></h3>
                                        <div class="view-project"><a data-fancybox="example gallery" href="{{asset('images/'.$gal->gambar)}}" class="zoom-btn"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @foreach ($galeris as $gal)
                        @if ($gal->kategori == 'Kegiatan Divisi')
                            <div class="col-lg-3 col-md-6 gallery-block-one category-2">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('images/'.$gal->gambar)}}" alt="" style="width: 370px; height:300px">
                                    </div>
                                    <div class="caption-title">
                                        {{-- <h5>Finance</h5> --}}
                                        <h3><a href="#">{{ $gal->nama_kegiatan }}</a></h3>
                                        <div class="view-project"><a data-fancybox="example gallery" href="{{asset('images/'.$gal->gambar)}}" class="zoom-btn"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-11.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-11.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-12.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-12.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-13.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-13.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-14.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-14.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-15.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-15.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-16.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-16.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-17.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-17.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-31.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-31.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-32.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-32.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-33.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-33.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Gallery Block One -->
                    {{-- <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/gallery/gallery-34.jpg" alt="">
                            </div>
                            <div class="caption-title">
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-34.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End block -->
                </div>
            </div>
        </div>
    </section>
@endsection
