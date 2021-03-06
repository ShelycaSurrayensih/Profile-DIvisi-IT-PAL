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
        <h1>Services Details</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="active">Services Details</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4">
                <aside class="sidebar">
                    <!-- Category Widget -->
                    <div class="sidebar-widget-two categories-widget-two">
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('Services.kedudukandih')}}">Departement Infrastruktur & Hardware <i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.kedudukandih')}}">Kedudukan dan
                                        Organisasi<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.tugasdih')}}">Tugas Pokok<i class="fa fa-angle-right"></i></a></li>
                                <li class="current"><a class="nav-link ml-3 my-1" href="{{ route('Services.fungsidih')}}">Fungsi<i class="fa fa-angle-right"></i></a></li>
                                <li><a href="{{ route('Services.kedudukandpa')}}">Departement Pengembangan Aplikasi dan Integrasi <i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.kedudukandpa')}}">Kedudukan dan
                                        Organisasi<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.tugasdpa')}}">Tugas Pokok<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="nav-link ml-3 my-1" href="{{ route('Services.fungsidpa')}}">Fungsi<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Form Widget -->
                    <!-- Contact Info Widget -->
                    <div class="sidebar-widget-two contact-info-widget">
                        <div class="inner-box" style="background-image: url(assets/images/background/image-18.jpg);">
                            <h3>Need Help?</h3>
                            <ul>
                                <li><a href="mailto:divti@pal.co.id">divti@pal.co.id</a></li>
                                <li><a href="tel:wxt.3520">ext.3520</a></li>
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-lg-8">
                <div class="services-details pl-lg-5">
                    <div class="image-box"><img src="assets/images/resource/service-1.jpg" alt=""></div>
                    <div class="content">
                        <div class="sec-title">
                            <div class="sub-title">Departement Infrastruktur & Hardware</div>
                            <h2>Fungsi</h2>
                        </div>
                        <!-- <div class="text">Kedudukan</div> -->
                        <blockquote>
                            <h4>Fungsi</h4><br>
                            <p>Merancang strategi perencanaan dalam bidang teknologi informasi</p>

                            Merencanakan pekerjaan yang meliputi :
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Pengembangan dan evaluasi hardware teknologi informasi yang digunakan perusahan.</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Pengembangan dan evaluasi sistem jaringan (networking) yang digunakan perusahaan</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Mengkoodinirdan melaksanakan ;</p>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Mengikuti perkembangan teknologi komputerisasi yang sesuai dengan kebutuhan
                                            perusahaan, guna menjamin kondisi kehandalan sistem informasi dan sisi hadware
                                            dan networking yang selalu dalam kondisi terupdate.</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Memberikan sosialisasi kepada seluruh user terkait dengan jaringan dan hardware
                                            yang perlu dimutakhirkan disesuaikan dengan perkembangan teknologi dan kebutuhan
                                            perusahaan.</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Perawatan, perbaikan dan penyelesaian segala permasalahan terkait infrastruktur dan
                                            hardware</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Pembuatan buku panduan operasional untuk keperdingan perawatan dan trouble
                                            shooting jaringan dan hardware.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection