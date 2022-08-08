@section('footer')
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-lg-4">
                    <div class="footer-widget logo-widget">
                        <div class="widget-content">
                            <div class="footer-logo">
                                <a href="index.html"><img class="lazy-image" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/footer-logo.png')}}" alt="" /></a>
                            </div>
                            <div class="text">“Any fool can write code that a computer can understand. Good
                                programmers write code that humans can understand.” – Martin Fowler</div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-4">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <h3>Links</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Visi Misi</a></li>
                                        <li><a href="#">Tentang</a></li>
                                        <li><a href="#">Struktur</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><a href="#">Layanan</a></li>
                                        <li><a href="#">Galeri</a></li>
                                        <li><a href="#">Qna</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-4">
                    <div class="footer-widget instagram-widget">
                        <h3>Galeri Foto</h3>
                        <div class="inner-box">
                            <div class="wrapper-box">
                                @foreach ($galeri as $gal)
                                    @if ($gal->kategori == "Seminar")
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="{{asset('images/'.$gal->gambar)}}" data-src="{{asset('images/'.$gal->gambar)}}" alt="" style="width: 100px; height: 70px;">
                                            <div class="overlay-link"><a href="{{asset('images/'.$gal->gambar)}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="wrapper-box">
                                @foreach ($galeri as $gal)
                                    @if ($gal->kategori == "Project")
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="{{asset('images/'.$gal->gambar)}}" data-src="{{asset('images/'.$gal->gambar)}}" alt="" style="width: 100px; height: 70px;">
                                            <div class="overlay-link"><a href="{{asset('images/'.$gal->gambar)}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="wrapper-box">
                                @foreach ($galeri as $gal)
                                    @if ($gal->kategori == "Kegiatan Divisi")
                                        <div class="image">
                                            <img class="lazy-image owl-lazy" src="{{asset('images/'.$gal->gambar)}}" data-src="{{asset('images/'.$gal->gambar)}}" alt="" style="width: 100px; height: 70px;">
                                            <div class="overlay-link"><a href="{{asset('images/'.$gal->gambar)}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="auto-container">
        <div class="footer-bottom">
            <div class="copyright">Copyright By<a href="{{route('login')}}"> Mahasiswa Polinema</a> - 2022</div>
        </div>
    </div>
</footer>

</div>
@show
