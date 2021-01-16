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
    <!-- start: page -->

    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <h2>DIGITAL LIBRARY STMIK SUMEDANG</h2>
                <div class="signin-main">
                    <div class="container">
                        <div class="woocommerce">
                            <div class="woocommerce-login">
                                <div class="company-info signin-register">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="company-detail bg-dark margin-left">
                                                <div class="signin-head">
                                                    <h2>Buku Tamu</h2>
                                                    <span class="underline left"></span>
                                                </div>
                                                <form action="{{ route('welcome.store') }}" method="POST" enctype="multipart/form-data" id="summary-form" class="form-horizontal">

                                                    @csrf

                                                    <h3 style="color:white">NIM</h3>
                                                    <br>
                                                    <p class="form-row form-row-first input-required">
                                                        <input type="text" id="nim" name="nim" class="input-text" title="" placeholder="" value="{{ old('nim') }}">
                                                        @error('nim')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    </p>
                                                    <h3 style="color:white">Nama</h3>
                                                    <br>
                                                    <p class="form-row form-row-last input-required">
                                                        <input type="text" id="nama" name="nama" class="input-text" title="" placeholder="" value="{{ old('nama') }}">
                                                        @error('nama')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    </p>
                                                    <h3 style="color:white">Kelas</h3>
                                                    <br>
                                                    <p class="form-row form-row-last input-required">
                                                        <input type="text" id="kelas" name="kelas" class="input-text" title="" placeholder="" value="{{ old('kelas') }}">
                                                        @error('kelas')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    </p>
                                                    <h3 style="color:white">Prodi</h3>
                                                    <br>
                                                    <p class="form-row form-row-first input-required">
                                                        <input type="text" id="prodi" name="prodi" class="input-text" title="" placeholder="" value="{{ old('prodi') }}">
                                                        @error('prodi')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    </p>
                                                    <div class="clear"></div>
                                                    <input type="submit" value="Masuk" name="Masuk" class="button btn btn-default">
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Cart Section -->

    <!-- end: page -->

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