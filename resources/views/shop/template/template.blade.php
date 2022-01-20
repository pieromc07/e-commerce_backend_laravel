<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Icon --}}
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    {{-- Title --}}
    <title>Document</title>
    {{-- fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    {{-- Styles Css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/color-02.css') }}">
</head>



</head>

<body class="home-page home-01 ">
    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>
    {{-- include(header) --}}
    @include('shop.template._header')

    <main id="main" class="main-site">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- include(footer) --}}
    @include('shop.template._footer')

    {{-- Scripts --}}
    <script src="{{ asset('shop/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('shop/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('shop/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('shop/assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('shop/assets/js/functions.js') }}"></script>

    @yield('scripts')

</body>

</html>
