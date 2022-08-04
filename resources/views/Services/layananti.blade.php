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
                                <a href="https://bupot21.pal.co.id/login.php">
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
                                    <a href="https://bupot21.pal.co.id/login.php">
                                        Bukti Potong PPh21
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://helpdesk.pal.co.id/vidcon/">
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
                                    <a href="https://helpdesk.pal.co.id/vidcon/">
                                        Video Conference
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://manrisk.pal.co.id/">
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
                                    <a href="https://manrisk.pal.co.id/">
                                        Manajemen Risiko PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://btdver.pal.co.id/">
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
                                    <a href="https://btdver.pal.co.id/">
                                        BTD Verification
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://izin.pal.co.id/">
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
                                    <a href="https://izin.pal.co.id/">
                                        Perizinan Orang
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://ddrcms.pal.co.id/">
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
                                    <a href="https://ddrcms.pal.co.id/">
                                        Aplikasi Revisi Gambar
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://ppid.pal.co.id/">
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
                                    <a href="https://ppid.pal.co.id/">
                                        Aplikasi PPID
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://edoc.pal.co.id/bp/">
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
                                    <a href="https://edoc.pal.co.id/bp/">
                                        Key Performance Performance
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://infokes.pal.co.id/">
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
                                    <a href="https://infokes.pal.co.id/">
                                        Info Kesehatan PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://edoc.pal.co.id/bp/">
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
                                    <a href="https://edoc.pal.co.id/bp/">
                                        KPKU
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://kopkb.pal.co.id/">
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
                                    <a href="https://kopkb.pal.co.id/">
                                        KOPKB
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://edoc.pal.co.id/bp/">
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
                                    <a href="https://edoc.pal.co.id/bp/">
                                        E-DOC Bangunan Kapal
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://edoc.pal.co.id/rekum/">
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
                                    <a href="https://edoc.pal.co.id/rekum/">
                                        E-DOC Rekum
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://edoc.pal.co.id/harkan/">
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
                                    <a href="https://edoc.pal.co.id/harkan/">
                                        E-DOC Harkan
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://sosialisasi.pal.co.id/">
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
                                    <a href="https://sosialisasi.pal.co.id/">
                                        Media Sosialisasi PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://edoc.pal.co.id/sc/">
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
                                    <a href="https://edoc.pal.co.id/sc/">
                                        Pengarsipan Kontrak SC
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="http://115.85.70.168/agenda">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category" style="background-color: rgb(255, 0, 0); background-image: -webkit-linear-gradient( 0deg, rgb(202, 0, 0) 0%, rgb(244, 69, 69) 100%)">
                                    <ul class="post-categories">
                                        <li>Local Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="http://115.85.70.168/agenda">
                                        Reminder Agenda
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://warranty.pal.co.id/">
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
                                    <a href="https://warranty.pal.co.id/">
                                        Warranry QA
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="http://192.168.255.230/telp/">
                                    <img src="http://old4.commonsupport.com/finandox/wp-content/uploads/2020/03/news-1.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="lower-content">
                                <div class="category" style="background-color: rgb(255, 0, 0); background-image: -webkit-linear-gradient( 0deg, rgb(202, 0, 0) 0%, rgb(244, 69, 69) 100%)">
                                    <ul class="post-categories">
                                        <li>Local Access</a></li>
                                    </ul>
                                </div>
                                <h3 style="text-align: center">
                                    <a href="http://192.168.255.230/telp/">
                                        Telp EXT PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://knowledge.pal.co.id/">
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
                                    <a href="https://knowledge.pal.co.id/">
                                        Knowledge Management PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://drive.pal.co.id/">
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
                                    <a href="https://drive.pal.co.id/">
                                        Drive PAL
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://webvendor.pal.co.id/">
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
                                    <a href="https://webvendor.pal.co.id/">
                                        WEBVENDOR
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://internalauditiso.pal.co.id/">
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
                                    <a href="https://internalauditiso.pal.co.id/">
                                        Internal Audit ISO
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <a href="https://suarapelanggan.pal.co.id/">
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
                                    <a href="https://suarapelanggan.pal.co.id/">
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
