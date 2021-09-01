<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="tr">
<!--<![endif]-->

<head>

    <!-- Basic metas
    ======================================== -->
    <meta charset="utf-8">
    <meta name="author" content="Axilweb">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Mobile specific metas
    ======================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page Title
    ======================================== -->
    <title>{{$title}}</title>

    <!-- links for images/
    ======================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('front')}}/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('front')}}/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front')}}/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front')}}/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front')}}/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('front')}}/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front')}}/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('front')}}/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front')}}/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('front')}}/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front')}}/images/images/-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('front')}}/images/images/-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front')}}/images/images/-16x16.png">
    <link rel="manifest" href="{{asset('front')}}/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('front')}}/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Icon fonts
    ======================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/miniline.css">

    <!-- css links
    ======================================== -->
    <!-- Bootstrap link -->
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/vendor/bootstrap.min.css">

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/vendor/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/vendor/slick-theme.css">

    <!-- Magnific popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/vendor/magnific-popup.css">

    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/main.css">

    <!-- Responsive styling -->
    <link rel="stylesheet" type="text/css" href="{{asset('front')}}/css/responsive.css">

</head>

<body>

    <!-- navbar starts
    ======================================= -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('front')}}/images/brand-logo.png" alt="Brand Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="custom-toggler-icon bar1"></span>
                <span class="custom-toggler-icon bar2"></span>
                <span class="custom-toggler-icon bar3"></span>
            </button>
            <!-- End of .navbar-toggler -->

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-md-auto typo-color-c align-items-center">
                
                    @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link" href="{{$menu->link}}">{{$menu->title}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link custom-btn btn-mid grad-style-cd" href="contact.html" data-toggle="modal"
                            data-target="#get-a-quote-modal">FİYAT TEKLİFİ ALIN</a>
                    </li>
                </ul>
                <!-- End of .navbar-nav -->
            </div>
            <!-- End of .navbar-collapse -->
        </div>
        <!-- End of .container -->
    </nav>
    <!-- End of .navbar -->

    <!-- Header starts
    ======================================= -->
    