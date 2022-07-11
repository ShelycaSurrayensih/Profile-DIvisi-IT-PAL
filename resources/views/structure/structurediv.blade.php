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
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                            required>
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
        <h1>Struktur Organisasi</h1>
        <h1>Divisi Teknologi Informasi</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('department.index')}}">Home</a></li>
            <li class="active">Struktur Organisasi</li>
        </ul>
    </div>
</section>
<!--End Banner Section -->

<!--Main Section -->
<br>
<br>
<div class="container text-center">
    <h2>Struktur Organisasi</h2>
    <img src="assets/images/gallery/gallery-36.png" alt="">
</div>
<div class="container text-center">
    <h2>Informasi Jabatan</h2>
    <br><br><img src="assets/images/gallery/gallery-35.png" alt="">
</div>
<br>
<br>
<!--End Main Section -->
@endsection