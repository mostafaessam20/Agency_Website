<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DLT SOFTWARE HOUSE">
    <meta name="keywords" content="HTML, CSS, JavaScript,Ajax,jQuery,Laravel,PHP,FLUTTER,BOOTSTRAP">

    <!-- Links of CSS files -->
    @if (LaravelLocalization::setLocale()=='en')
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dark-style.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('assets-rtl/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/dark-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets-rtl/css/rtl.css')}}">
    

    @endif
    <link href="toastr.css" rel="stylesheet"/>

    


    

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    @yield('css')

</head>