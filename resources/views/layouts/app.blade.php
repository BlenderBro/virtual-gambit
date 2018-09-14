<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>otherSkins</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?php if (isset($product->meta_description)) {echo $product->meta_description;}elseif (isset($post->meta_description)) {echo $post->meta_description;}else{echo "Toate produsele noastre";}?>">
    <meta name="keywords" content="<?php if (isset($product->meta_keywords)) {echo $product->meta_keywords;}elseif (isset($post->meta_keywords)) {echo $post->meta_keywords;}else{echo "huse, huse personalizate, printare UV, huse custom, husa iPhone, husa Samsung";}?>">
    <meta name="author" content="Vlad Dobrescu <vlad.s.dobrescu@gmail.com>">
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--srart theme style -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
    <!-- end theme style -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- Script Start -->
@yield('cart-script')
<script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/modernizr.custom.js" type="text/javascript"></script>
<script src="/js/plugins/rating/star-rating.js" type="text/javascript"></script>
<script src="/js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
<script src="/js/plugins/countto/jquery.appear.js" type="text/javascript"></script>
<script src="/js/plugins/owl/owl.carousel.js" type="text/javascript"></script>
<script src="/js/plugins/revel/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="/js/plugins/revel/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="/js/plugins/revel/revolution.extension.actions.min.js" type="text/javascript"></script>
<script src="/js/plugins/revel/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="/js/plugins/revel/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="/js/plugins/revel/revolution.extension.parallax.min.js" type="text/javascript"></script>
<script src="/js/plugins/revel/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="/js/jquery.mixitup.js" type="text/javascript"></script>
<script src="/js/plugins/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="/js/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
<script src="/js/plugins/offcanvasmenu/snap.svg-min.js" type="text/javascript"></script>
<script src="/js/plugins/offcanvasmenu/classie.js" type="text/javascript"></script>
<script src="/js/plugins/offcanvasmenu/main3.js" type="text/javascript"></script>
<script src="/js/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
<script src="/js/plugins/c3_chart/d3.v3.min.js" type="text/javascript"></script>
<script src="/js/plugins/c3_chart/c3.js" type="text/javascript"></script>
<script src="/js/pgwslideshow.js" type="text/javascript"></script>
<script src="/js/custom.js" type="text/javascript"></script>

<!-- Script end -->
</body>

</html>