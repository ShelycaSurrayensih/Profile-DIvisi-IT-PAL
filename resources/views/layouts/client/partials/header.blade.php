<header class="main-header header-style-two">
    <!-- Header Top Two -->
    <div class="header-top-two">
        <div class="auto-container">
            <div class="inner">
                <div class="top-left">
                    <ul class="contact-info">
                        <li><a href="mailto:mailto:divti@pal.co.id"><i class="far fa-envelope"></i>divti@pal.co.id</a></li>
                        <li><i class="far fa-phone"></i> ext.3520</li>
                    </ul>
                </div>

                <div class="top-middile">
                    <div class="text">Welcome To Information Technology Division (PT PAL)</div>
                </div>

                <div class="top-right">
                    <!-- <div class="language">
                        <form action="#" class="language-switcher">
                            <select class="selectpicker">
                                <option value="1">EN</option>
                                <option value="1">FR</option>
                                <option value="1">SP</option>
                                <option value="1">BE</option>
                            </select>
                        </form>
                    </div> -->
                    <ul class="social-links clearfix">
                        <li><a href="https://www.facebook.com/HumasPTPAL/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="https://twitter.com/ptpal_indonesia" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.instagram.com/ptpal_indonesia/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fab fa-linkedin"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w" target="_blank"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="{{asset('assets/images/logo-2.png')}}" alt=""></a></div>
                    </div>
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon fal fa-bars"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href={{route("department.index")}}>Home</a></li>
                                <li><a href={{route("visimisi.visi")}}>Visi & Misi</a></li>
                                        <li><a href={{ route("about.aboutus")}}>About Us</a></li>
                                         <li><a href={{route('structure.structurediv')}}>Structure</a></li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href={{route("Services.Departement")}}>Departement</a></li>
                                        <li><a href={{route("Services.hotissue")}}>Hot Issue</a></li>
                                        <li><a href={{route("Services.tugastanggungjawab")}}>Tugas & Tanggung Jawab</a></li>
                                        <li><a href={{route("Services.sharing")}}>Sharing Knowledge</a></li>
                                        <li><a href="https://portal.pal.co.id/">Layanan TI</a></li>
                                    </ul>
                                </li>
                                <li><a href={{ route("galeri.galeri")}}>Gallery</a></li>

                                        <li><a href={{route('qna.qna')}}>Qna</a></li>
                                <li><a href={{route("contact.contacts")}}>Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Link Btn-->
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><img src="{{ asset('assets/images/bumn4.png')}}" alt=""></a></div>
                    <!-- <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo-2.png')}}" alt=""></a></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="/" title=""><img src="{{ asset('assets/images/sticky-logo-2.png')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->


    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="{{asset('assets/images/logo-2.png)')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://twitter.com/ptpal_indonesia"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/HumasPTPAL/"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="https://www.instagram.com/ptpal_indonesia/"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.youtube.com/channel/UCe-18Eak4NoI34ts2_vLZ6w"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
