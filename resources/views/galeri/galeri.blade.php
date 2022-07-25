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
                                        <h3><a href="#">{{ $gal->nama_kegiatan }}</a></h3>
                                        <div class="view-project"><a data-fancybox="example gallery" href="{{asset('images/'.$gal->gambar)}}" class="zoom-btn"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- End block -->
                </div>
            </div>
        </div>
    </section>
@endsection
