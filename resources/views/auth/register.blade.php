<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Register | Booking Book </title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('/front_end/images/favicon.png')}}" type="image/png">

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
                        <nav class="navbar navbar-expand-sm">
                            <a class="navbar-brand col-md-4" href="{{url('/')}}">
                                <img src="{{asset('/front_end/images/logo.png')}}" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="col-md-6">

                            </div>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                        <a class="page-scroll" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item active">
                                    @if (Route::has('register'))
                                            @auth
                                                <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a class="page-scroll" href="{{ route('login') }}">login</a>
                                            @endauth
                                    @endif
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>

    <!--====== HEADER ONE PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <section id="contact" class="contact-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-30">
                    <img src="{{asset('/front_end/images/register.png')}}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-6 pt-3">
                    <div class="contact-form form-style-one mt-15">
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <!-- form-input name -->
                            <div class="form-input mt-15"> 
                                <label>{{ __('Name') }}</label>
                                <div class="input-items default">
                                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <i class="lni-user"></i>
                                </div>
                            </div> 
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- end form-input name -->
                            <!-- form-input email -->
                            <div class="form-input mt-15">
                                <label>{{ __('E-Mail Address') }}</label>
                                <div class="input-items default">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- end form-input email -->
                            <!-- form-input password -->
                            <div class="form-input mt-15">
                                <label>{{ __('Password') }}</label>
                                <div class="input-items default">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <i class="lni lni-key"></i>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- end form-input password -->
                            <!-- form-input confirm password -->
                            <div class="form-input mt-15">
                                <label>{{ __('Confirm Password') }}</label>
                                <div class="input-items default">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <i class="lni lni-key"></i>
                                </div>
                            </div>
                            <!-- end form-input confirm password -->
                            <div class="form-group">
                            <div class="form-input standard-buttons mt-10">
                                <button type="submit" class="main-btn standard-two">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
</form>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
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

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->   
    
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
