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
        <h1>Tugas dan Tanggung Jawab</h1>
        <ul class="bread-crumb clearfix">
            <li><a href={{route("department.index")}}>Home</a></li>
            <li class="active">Services</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->

<!-- Services Section Three -->
<section class="services-section-three style-two">
    <div class="col-lg-8 offset-2">
        <div class="services-details pl-lg-5">
            <div class="content">
                <blockquote>
                    <h4>Kedudukan</h4><br>
                    <p>Divisi Teknologi Informasi adalah unit kerja struktural tingkat Divisi dalam Organisasi
                        Direktorat Keuangan dan dipimpin oleh seorang Kepala Divisi Teknologi Informasi,
                        berkedudukan langsung dibawah dan berlanggung jawab kepada Direktur Keuangan
                </blockquote><br>
                <blockquote>
                    <h4>Organisasi</h4><br>
                    <p>Kepala Divisi Teknologi Informasi, membawahi dan membina :</p>
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
                                <td>Sekretariat Divisi Teknologi</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Departemen Infastruktur dan Hardware</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Departemen Pengembangan Aplikasi dan Integrasi</td>
                            </tr>
                        </tbody>
                    </table>
                </blockquote>
                <blockquote>
                    <h4>Tugas Pokok</h4><br>
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
                                <td>Menjabarkan, menyusun strategis dan mengembangkan pelaksanaan kebijakan
                                    perusahaan beserta program kerjanya dalam bidang Teknologi Informasi di lingkungan
                                    perusahaan dalam mendukung keberlsngsungan strategi usaha yang Oikembangian
                                    perusahaan</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Merencanakan, mengkoordinasikan dan melaksanakan pengawasan sumber daya untuk
                                    pelaksanaan pekerjaan infrastruktur teknologi informasi, pengembangan, penelitian dan
                                    integrasi aplikasi beserta sosialisasinya serta pengelolaan knowledge management di
                                    perusahaan</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>User Help Desk</td>
                            </tr>
                        </tbody>
                    </table>
                </blockquote><br>
                <blockquote>
                    <h4>Fungsi</h4><br>
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
                                <td>Menyiapkan dan mengembangkan sarana dan prasarana komunikasi dengan menggunakan
                                    Teknologi Informasi.</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mengembangkan dan mengintegrasikan Sistem Informasi guna mencapai efektivitas
                                    operasi serta optimalnya operasional dalam mendukung kegiatan perusahaan.</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Merencanakan, mengkoordinir, mengelola dan melaksanakan sosialisasi knowledge
                                    managemen</td>
                            </tr>
                        </tbody>
                    </table>
                </blockquote><br>
            </div>
        </div>
    </div>
</section>
@endsection