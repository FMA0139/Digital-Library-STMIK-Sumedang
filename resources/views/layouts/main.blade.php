<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <!-- Title -->
    <title>..:: Digital LIbrary STMIK Sumedang ::..</title>

    <!-- Favicon -->
    <link href="{{asset('images/favicon.ico')}}" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="{{asset('css/mmenu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.accordion.css')}}">

    <!-- Stylesheet -->
    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />

    <style>
        img {
            object-fit: cover;
        }
    </style>

</head>

<body>

    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="/">
                                            <img src="{{ asset('images/logo.png') }}" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    @foreach ($profil as $prf)
                                    <div class="col-sm-8">
                                        <div class="topbar-info">
                                            <a href="tel:{{ $prf->tlp }}"><i class="fa fa-phone"></i>{{ $prf->tlp }}</a>
                                            <span>/</span>
                                            <a href="mailto:{{ $prf->email }}"><i class="fa fa-envelope"></i>{{ $prf->email }}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-sm-4">
                                        <div class="topbar-links">
                                            <a href="/login"><i class="fa fa-lock"></i>Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li></li>
                                    <li><a href="/welcome">Home</a></li>
                                    <li></li>
                                    <li></li>
                                    <li><a href="/bukumedia">Buku &amp; Media</a></li>
                                    <!-- <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/bukumedia">Buku &amp; Media</a>
                                        <ul class="dropdown-menu">
                                            <li><a href=" ">Buku</a></li>
                                            <li><a href=" ">Ebook</a></li>
                                            <li><a href=" ">DVD</a></li>
                                            <li><a href=" ">Majalah</a></li>
                                            <li><a href=" ">Audio</a></li>
                                            <li><a href=" ">EAudio</a></li>
                                        </ul>
                                    </li> -->
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li><a href="/profil">Info Perpus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- start: page -->
    @yield('container')
    <!-- end: page -->

    <br>
    <!-- Start: Footer -->
    <footer class="site-footer">
        <div class="container">
            <div id="footer-widgets">
                <div class="row">
                    <div class="col-md-5 col-sm-6 widget-container">
                        <div id="text-2" class="widget widget_text">
                            @foreach ($profil as $profil)
                            <h3 class="footer-widget-title">Hubungi Kami</h3>
                            <span class="underline left"></span>
                            <div class="textwidget">
                                {{ $profil->nama }}
                            </div>
                            <address>
                                <div class="info">
                                    <i class="fa fa-location-arrow"></i>
                                    <span><a target="blank_" href="{{ $profil->google_maps }}">{{ $profil->alamat }}</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="mailto:{{ $profil->email }}">{{ $profil->email }}</a></span>
                                </div>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="tel:{{ $profil->tlp }}">{{ $profil->tlp }}</a></span>
                                </div>
                            </address>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 widget-container">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="footer-widget-title">Quick Links</h3>
                            <span class="underline left"></span>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/bukumedia">Buku & Media</a></li>
                                    <li><a href="/profil">Info Perpus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                    <div class="col-md-3 col-sm-6 widget-container">
                        <div id="text-4" class="widget widget_text">
                            <h3 class="footer-widget-title">Jam Layanan</h3>
                            <span class="underline left"></span>
                            <div class="timming-text-widget">
                                <time datetime="2017-02-13">Senin - Sabtu : 08.00 - 16.30 WIB</time>
                                <time datetime="2017-02-13">Istirahat : 12.00 - 13.00 WIB</time>
                                <time datetime="2017-02-13"> 12.00 - 13.00 WIB Jum'at</time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <!-- <div class="row">
                    <div class="footer-text col-md-3">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                    <div class="col-md-9 pull-right">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="books-media-list-view.html">Books &amp; Media</a></li>
                            <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                            <li><a href="#">Kids &amp; Teens</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- End: Footer -->

    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="{{asset('js/jquery-1.12.4.min.js')}}">
    </script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>

    <!-- jQuery Easing -->
    <script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{asset('js/mmenu.min.js')}}"></script>

    <!-- Harvey - State manager for media queries -->
    <script type="text/javascript" src="{{asset('js/harvey.min.js')}}"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>

    <!-- Facts Counter -->
    <script type="text/javascript" src="{{asset('js/facts.counter.min.js')}}"></script>

    <!-- MixItUp - Category Filter -->
    <script type="text/javascript" src="{{asset('js/mixitup.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

    <!-- Accordion -->
    <script type="text/javascript" src="{{asset('js/accordion.min.js')}}"></script>

    <!-- Responsive Tabs -->
    <script type="text/javascript" src="{{asset('js/responsive.tabs.min.js')}}"></script>

    <!-- Responsive Table -->
    <script type="text/javascript" src="{{asset('js/responsive.table.min.js')}}"></script>

    <!-- Masonry -->
    <script type="text/javascript" src="{{asset('js/masonry.min.js')}}"></script>

    <!-- Carousel Swipe -->
    <script type="text/javascript" src="{{asset('js/carousel.swipe.min.js')}}"></script>

    <!-- bxSlider -->
    <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>


</html>