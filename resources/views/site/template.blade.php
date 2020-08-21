
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<title> {{$setting->headerSite}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/site/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/site/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/site/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/site/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/site/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/site/css/custom.css">
    
    <!-- Style customizer (Remove these lines please) -->
    <link rel="stylesheet" href="/site/css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="/site/js/vendor/modernizr-2.8.3.min.js"></script>
    @yield('css')
</head>
<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header  class="header-area header-wrapper bg-white clearfix">
            <div class="header-top-bar bg-dark ptb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7  hidden-xs">
                            <div class="header-top-left">
                                <nav class="header-top-menu zm-secondary-menu">
                                    <ul>
                                    <li><a href="{{route('home')}}">{{$setting->headerSite}}</a></li> 
                                    <li><a href="{{route('about')}}">Haqqımızda</a></li>
                                    <li><a href="{{route('contact')}}">Bizimlə Əlaqə</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                            <div class="header-top-right clierfix text-right">
                                {{-- <div class="header-social-bookmark topbar-sblock">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div> --}}
                                <div class="zmaga-calendar topbar-sblock">
                                    <span class="calendar uppercase">{{date('d.m.Y')}}</span>
                                </div>
                                <div class="user-accoint topbar-sblock">
                                    <span class="login-btn uppercase">Login</span>
                                    <div class="login-form-wrap bg-white">

                                     @include('site.loginform')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-5 col-xs-12 header-mdh">
                            <div class="global-table">
                                <div class="global-row">
                                    <div class="global-cell">
                                        <div class="logo">
                                            <a href="{{route('home')}}">
                                                <img src="/site/images/logo/1.png" alt="main logo">
                                            </a>
                                            <p class="site-desc">News blog & Magazine Template</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 col-sm-7 col-xs-12 col-lg-offset-1 header-mdh hidden-xs">
                            <div class="global-table">
                                <div class="global-row">
                                    <div class="global-cell">
                                        <div class="advertisement text-right">
                                           <a href="#" class="block"><img src="/site/images/ad/1.jpg" alt="ad img"></a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="breakingnews-wrapper hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                <div class="breakingnews clearfix fix">
                                    <div class="bn-title">
                                        <h6 class="uppercase">BREAKING NEWS</h6>
                                    </div>
                                    <div class="news-wrap">
                                        <ul class="bkn clearfix" id="bkn">
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.   |   Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   |   Ut enim ad minim ut labre et dolore qui magna mini.</li>
                                            <li>Nilartstudio dolor amet, consectetur adipisicing elit.   |   Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   |   Ut enim ad minim ut labre et dolore qui magna mini.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                 <!-- Start navbar content -->
                 @include('site.navbar')
                 <!-- End navbar content -->

            
        </header>
        <!-- End of header area -->

         <!-- Start page content -->
       @yield('content') 
        <!-- End page content -->

        <!-- Start footer area -->
        <footer id="footer" class="footer-wrapper footer-1">
            
            <div class="footer-buttom bg-black ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="zm-copyright">
                                <p class="uppercase">&copy; 2020 {{$setting->headerSite}} . </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 text-right hidden-xs">
                            <nav class="footer-menu zm-secondary-menu text-right">
                                <ul>
                                        <li><a href="{{route('home')}}">{{$setting->headerSite}}</a></li> 
                                        <li><a href="{{route('about')}}">Haqqımızda</a></li>
                                        <li><a href="{{route('contact')}}">Bizimlə Əlaqə</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->
 

    <!-- Placed js at the end of the document so the pages load faster -->
    <!-- jquery latest version -->
    <script src="/site/js/vendor/jquery-1.12.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="/site/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="/site/js/owl.carousel.min.js"></script>
    <script src="/site/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="/site/js/main.js"></script>
@yield('js')
</body>

</html>