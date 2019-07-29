<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}

    <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap-4.1.2/bootstrap.min.css') }}">
    <link href="{{ url('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('plugins/fontawesome-5.9.0/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('plugins/fontawesome-5.9.0/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('styles/cart_responsive.css') }}">

</head>
<body>
    <div id="app">

        <main class="py-4">
            @include("header.header")
            <div class="" id="home">
              @yield('content')
            </div>
            @include("foother.foother")
        </main>
    </div>
    {{-- Jquery no debe ser removida de aqui --}}
    <script src="{{ url('js/jquery-3.3.1.min.js') }}" ></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ url('/js/jquery-3.1.1.min.js') }}" ></script> --}}
    {{-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="js/jquery-3.3.1.min.js"></script> --}}
    <script src="{{ url('styles/bootstrap-4.1.2/popper.js')}}"></script>
    <script src="{{ url('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
    <script src="{{ url('plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{ url('plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{ url('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{ url('plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{ url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{ url('plugins/easing/easing.js')}}"></script>
    <script src="{{ url('plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{ url('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{ url('js/custom.js')}}"></script>
    <script src="{{ url('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="{{ url('/js/app.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->


</body>
</html>
