<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>BooBoo</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('/front_end/images/bluelogo.png')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('/front_end/css/bootstrap.min.css')}}">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('/front_end/css/slick.css')}}">
    
    <!--====== Magnific Popup css ======--> 
    <link rel="stylesheet" href="{{asset('/front_end/css/magnific-popup.css')}}">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{asset('front_end/css/LineIcons.css')}}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('front_end/css/default.css')}}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('front_end/css/style.css')}}">
  
  
</head>

<body>
  
    <!--====== HEADER ONE PART START ======-->

    <header class="header-area">

        <div class="navbar-area navbar-one navbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{asset('/front_end/images/logo.png')}}" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar col-md-6" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Harga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <div id="home" class="header-content-area d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-wrapper">
                            <div class="header-content">
                                <h3 class="header-title">Arisan Online ? Yuk Daftar Sekarang.</h3>
                                <p class="text">Mencari solusi terbaik untuk melakukan arisan online dengan cara yang lebih mudah dan terpercaya hanya di bookingbook.</p>
                                <div class="header-btn rounded-buttons">
                                    <table class="table-bordeless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                @if (Route::has('register'))
                                                    <div class="top-right links">
                                                        @auth
                                                            <a class="main-btn rounded-one" href="{{ url('/home') }}">Hello</a>
                                                        @else
                                                            <a class="main-btn rounded-one" href="{{ route('register') }}">Daftar</a>
                                                        @endauth
                                                    </div>
                                                @endif
                                                </td>
                                                <td class="pl-2">
                                                @if (Route::has('login'))
                                                    <div class="top-right links">
                                                        @auth
                                                            <a class="main-btn rounded-one" href="{{ url('/home') }}">Home</a>
                                                        @else
                                                            <a class="main-btn rounded-one" href="{{ route('login') }}">Login</a>
                                                        @endauth
                                                    </div>
                                                @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                            </div> <!-- header content -->

                            <div class="header-image d-none d-lg-block">
                                <div class="image">
                                    <img src="{{asset('/front_end/images/1.png')}}" alt="Header">
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="{{asset('front_end/images/header-shape.svg')}}" alt="shape">
            </div> 
        </div>
    </header>

    <section id="features" class="features-area pt-60 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-school-compass"></i>
                            <img class="shape" src="{{asset('front_end/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Arisan Bergroup</a></h4>
                            <p class="text">Kamu dapat membuat group arisan bersama dengan teman - teman.</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one" href="/login">Tersedia</a>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-construction"></i>
                            <img class="shape" src="{{asset('front_end/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Arisan Individual</a></h4>
                            <p class="text">Temukan layanan arisan individual dengan solusi terbaik dengan cara terbaik.</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one" href="/login">Belum Tersedia</a>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-cup"></i>
                            <img class="shape" src="{{asset('front_end/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#">Tabung Terus</a></h4>
                            <p class="text">Punya barang impian ? Ayo mulai menabung dari sekarang.</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one" href="/login">Belum Tersedia</a>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="about" class="about-area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-feature mt-30">
                        <div class="about-feature-image">
                            <img src="{{asset('front_end/images/2.png')}}" alt="feature">
                        </div>
                        <div class="about-feature-content">
                            <h2 class="feature-title">Bookingbook Indonesia</h2>
                            <p class="text">Bookingbook adalah penyedia layanan arisan online baik group atau individu.</p>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src="{{asset('front_end/images/3.png')}}" alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Group Arisan</h5>
                            <p class="text">Kesulitan untuk mengatur jadwal dan pendataan group ? Pengguna tidak perlu lagi khawatir karena bookingbook siap membantu.</p>
                        </div>
                    </div> <!-- about feature items -->
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src="{{asset('front_end/images/4.png')}}" alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Sederhana</h5>
                            <p class="text">Mempermudah dan mempersederhana alur pembuatan group arisan. Pengaturan jadwal pengundian, penginputan data peserta dan berbagai layanan menarik lainnya.</p>
                        </div>
                    </div> 
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src="{{asset('front_end/images/5.png')}}" alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Layanan</h5>
                            <p class="text">Kualitas layanan kami mempermudah pengguna dengan tampilan responsive untuk pengaksesan dari berbagai platform.</p>
                        </div>
                    </div> 
                    <div class="about-feature-items d-sm-flex mt-30">
                        <div class="feature-items-icon">
                            <img src="{{asset('front_end/images/6.png')}}" alt="Icon">
                        </div>
                        <div class="feature-items-content media-body">
                            <h5 class="items-title">Penjadwalan</h5>
                            <p class="text">Buat alur pengundian sesuai dengan jadwal yang telah ditentukan. Pelanggan tidak perlu lagi khawatir karena semua telah dibuat otomatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section id="pricing" class="pricing-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h4 class="title">Harga Paket</h4>
                        <p class="text">Temukan kemudahan layanan dengan meningkatkan layanan ke layanan premium untuk kemudahan terbaik.</p>
                    </div> 
                </div>
            </div>
            
            <div class="row justify-content-center">                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing mt-40">
                        <div class="pricing-header">
                            <h5 class="sub-title">Basic</h5>
                            <span class="price">Rp 10.500</span>
                            <p class="year">/ Transaksi</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Tersedia 8 Group</li> 
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="/" disabled>Belum Tersedia</a>
                        </div>
                        <div class="bottom-shape">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g><g data-name="Group 747"><path data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>     
                         
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing mt-40">
                        <div class="pricing-header">
                            <h5 class="sub-title">Pro</h5>
                            <span class="price">Rp 12.000</span>
                            <p class="year">/ Transaksi</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Tersedia 10 group</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="/" disabled>Belum Tersedia</a>
                        </div>
                        <div class="bottom-shape">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g><g data-name="Group 747"><path data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>    
                          
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing mt-40">
                        <div class="pricing-header">
                            <h5 class="sub-title">Enterprise</h5>
                            <span class="price">Rp 15.000</span>
                            <p class="year">/ Transaksi</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Tersedia 15 group</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="/">Belum Tersedia</a>
                        </div>
                        <div class="bottom-shape">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g><g data-name="Group 747"><path data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="contact" class="contact-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h4 class="title">Bantuan Pelanggan</h4>
                        <p class="text">Punya pertanyaan ? Langsung tanya ke kami tentang masalah pelanggan pada form dibawah.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact mt-30">
                        <h4 class="contact-title">Kami senang mendengar dari Anda atau memiliki proyek dalam pikiran ? mari kita bicara.</h4>
                        <ul class="contact-info">
                            <li><i class="lni-money-location"></i> Tangerang - Indonesia</li>
                            <li><i class="lni-phone-handset"></i> 0822-17797018</li>
                            <li><i class="lni-envelope"></i> help@bookingbook.my.id</li>
                        </ul>
                    </div> <!-- contact -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-15">
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="form-input mt-15">
                                <label>Nama Lengkap</label>
                                <div class="input-items default">
                                    <input name="name" type="text" placeholder="Nama Lengkap">
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input name="email" type="text" placeholder="Email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Pesan</label>
                                <div class="input-items default">
                                    <textarea name="message" placeholder="Pesan"></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input standard-buttons mt-20">
                                <button class="main-btn standard-two" type="submit">Kirim</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-70 pb-100">
            <div class="container">
                <div class="row">
                </div> <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-sm-12">
                        <div class="footer-support ">
                            <span class="number">0822-17797018</span>
                            <span class="mail">help@bookingbook.my.id</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                            <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Layanan</h6>
                            <ul>
                                <li><a href="/">Tentang Kami</a></li>
                                <li><a href="/">Harga</a></li>
                                <li><a href="/">Kontak</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-link">
                            <h6 class="footer-title">Help & Suuport</h6>
                            <ul>
                                <li><a href="/">Support Center</a></li>
                                <li><a href="/">FAQ</a></li>
                                <li><a href="/">Terms & Conditions</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">&copy; Copyright Bookingbook 2020. All Rights Reserved
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== jquery js ======-->
    <script src="{{asset('/front_end/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('/front_end/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('/front_end/js/bootstrap.min.js')}}"></script>
    <script src="assets/js/popper.min.js"></script>


    <!--====== Images Loaded js ======-->
    <script src="{{asset('/front_end/js/imagesloaded.pkgd.min.js')}}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('/front_end/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/front_end/js/scrolling-nav.js')}}"></script>
    
    
    <!--====== Slick js ======-->
    <script src="{{asset('/front_end/js/slick.min.js')}}"></script>
    
    
    <!--====== Main js ======-->
    <script src="{{asset('/front_end/js/main.js')}}"></script>

</body>

</html>
