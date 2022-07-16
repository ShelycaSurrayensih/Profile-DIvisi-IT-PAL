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
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('department.index')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>

    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title">Divisi Teknologi</div>
                <h2>Program Kerja</h2>
            </div>
            <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">2022</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false"> 2023</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">2024</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">2025</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Divisi Teknologi Informasi</div>
                                    <h2>Quick Win</h2>
                                </div>
                                <div class="text">
                                1. Dashboard performance management mobile (HP Android + Tablet)<br>
                                2. Data akuisisi (CCTV,  Sensor, Barcode)<br>
                                3. Upgrade infrastruktur jaringan digital 4.0 di area produksi<br>
                                4. Sertifikasi ISO 27001<br>
                                5. ERP IM 4.0 tahap 1 & 2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Divisi Teknologi Informasi</div>
                                    <h2>Program Kerja <br>2023.</h2>
                                </div>
                                <div class="text">
                                1. ITML skor 3,6 <br>
                                2. INDI 4.0 skor 3,0 <br>
                                3. Dashboard management<br>
                                4. Upgrade data center tier-3<br>
                                5. CRM (Customer Relationship Management)<br>
                                6. Audit management<br>
                                7. Big Data<br>
                                8. Predictive Analysis<br>
                                9. Security architecture<br>
                                10. Komputerisasi fasilitas & peralatan produksi tahap 1<br>
                                11. ERP IM 4.0 tahap 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Divisi Teknologi Informasi</div>
                                      <h2>Program Kerja <br>2024.</h2>
                                </div>
                                <div class="text">
                                1. Big data (lanjutan) <br>
                                2. ITML skor 4,0<br>
                                3. INDI 4.0 skor 3,5<br>
                                4. Dashboard Management (lanjutan)<br>
                                5. Predictive analysis (lanjutan)<br>
                                6. Audit management (lanjutan)<br>
                                7. E-Research management<br>
                                8. Security architecture (advanced)<br>
                                9. Komputerisasi fasilitas & peralatan produksi tahap 2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Divisi Teknologi Informasi</div>
                                    <h2>Program Kerja <br>2025.</h2>
                                </div>
                                <div class="text">
                                1. Big data (lanjutan) <br>
                                2. ITML skor 4,1<br>
                                3. INDI 4.0 skor 3,6<br>
                                4. Dashboard Management (lanjutan)<br>
                                5. Komputerisasi fasilitas & peralatan produksi tahap 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="assets/images/resource/image-18.jpg" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
