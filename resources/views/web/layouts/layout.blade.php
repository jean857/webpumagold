<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.includes.head')
</head>
<body>
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->


    @include('web.includes.header_menu')


    @yield('content')


    <footer class="footer widget-footer clearfix">
        @include('web.includes.footer')
    </footer>

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->
</div>

<!-- Javascript -->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.js')}}"></script>
<script src="{{asset('js/jquery-waypoints.js')}}"></script>
<script src="{{asset('js/jquery-validate.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/numinate.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.min.js')}}"></script>
<script src="{{asset('js/jquery-isotope.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('revolution/js/slider.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

<script src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Javascript end-->

{{--<script src="{{asset('js/map.js')}}"></script>--}}
{{--<script src="https://maps.google.com/maps/api/js?sensor=false"></script>--}}
</body>
</html>
