


<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">
<head>


    <meta charset="utf-8">
    <title>Deveon Dynamics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg')}}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css')}}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css')}}">
    <!--<< Jquery.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css')}}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" 
    integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body>





    @if (!in_array(request()->route()->getName(), ['user.register', 'user.login', 'main.pages.success']))
        @include('main.layouts.nav')
    @endif



    @yield('main-container')

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>




    @if (!in_array(request()->route()->getName(), ['user.register', 'user.login', 'main.pages.success']))
        @include('main.layouts.footer')
    @endif




<!--<< All JS Plugins >>-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<!--<< Jquery ui Js >>-->
<script src="{{ asset('assets/js/jquery-ui.js')}}"></script>
<!--<< Imagesloaded Js >>-->
<script src="{{ asset('assets/js/imagesloaded.min.js')}}"></script>
<!--<< Viewport Js >>-->
<script src="{{ asset('assets/js/viewport.jquery.js')}}"></script>
<!--<< Bootstrap Js >>-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--<< Gsap Js >>-->
<script src="{{ asset('assets/js/gsap/gsap.js')}}"></script>
<!--<< Gsap Scroll To Pluging Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-scroll-to-plugin.js')}}"></script>
<!--<< Gsap Scroll Smoother Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-scroll-smoother.js')}}"></script>
<!--<< Gsap Scroll Trigger Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-scroll-trigger.js')}}"></script>
<!--<< Gsap Split Text Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-split-text.js')}}"></script>
<!--<< Gsap zotect Js >>-->
<script src="{{ asset('assets/js/gsap/gsap-zotect.js')}}"></script>
<!--<< Nice Select Js >>-->
<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!--<< Isotope Js >>-->
<script src="{{ asset('assets/js/isotope.js')}}"></script>
<!--<< Waypoints Js >>-->
<script src="{{ asset('assets/js/jquery.waypoints.js')}}"></script>
<!--<< Counterup Js >>-->
<script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
<!--<< appear Js >>-->
<script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
<!--<< Ajax Js >>-->
<script src="{{ asset('assets/js/ajax-mail.js')}}"></script>
<!--<< Swiper Slider Js >>-->
<script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
<!--<< MeanMenu Js >>-->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
<!--<< Magnific Popup Js >>-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!--<< Wow Animation Js >>-->
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<!--<< Main.js >>-->
<script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
