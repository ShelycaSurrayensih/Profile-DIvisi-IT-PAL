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
                <h1>Layanan TI</h1>
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
                <div class="row">
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://helpdesk.pal.co.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://helpdesk.pal.co.id/">
                                        Helpdesk TI
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://eoffice.pal.co.id">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://eoffice.pal.co.id">
                                        E-Office PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://kawasan.co.id/helpdesk/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://kawasan.co.id/helpdesk/">
                                        Helpdesk Kawasan
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Slip Gaji Online HCM
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Bukti Potong PPh21
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Video Conference
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Manajemen Risiko PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        BTD Verification
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Perizinan Orang
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Aplikasi Revisi Gambar
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Aplikasi PPID
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Key Performance
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Info Kesehatan PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        KPKU
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        KOPKB
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        E-DOC Bangunan Kapal
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        E-DOC Rekum
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        E-DOC Harkan
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Media Sosialisasi PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Pengarsipan Kontrak SC
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Reminder
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Warranry QA
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Telp EXT PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Knowledge Management PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Drive PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        WEBVENDOR
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Internal Audit ISO
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://hcmpal.web.id/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category">
                                    <ul class="post-categories">
                                        <li>Public Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="https://hcmpal.web.id/">
                                        Survey Kepuasan Pelanggan
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End News Section -->

@endsection
