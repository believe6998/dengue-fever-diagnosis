<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Go Sport</title>
  <link rel="icon" href="{{asset('logo/logo_icon.ico')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('vendor/carousel/assets/owl.carousel.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('vendor/carousel/assets/owl.theme.default.min.css') }}"/>

  <link rel="stylesheet" href="{{asset('wp-content/cache/min/1/05d08612fb99cadcd76ce62e8a478231.css')}}"
        data-minify="1"/>
  {{--  <link rel="stylesheet" href="{{asset('wp-content/themes/ornaldo/assets/style.css')}}"/>--}}
  <link rel="dns-prefetch" href="https://fonts.googleapis.com"/>
  <link rel="stylesheet" id="woocommerce-smallscreen-css"
        href="{{asset('wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css')}}" type="text/css"
        media="only screen and (max-width: 768px)"/>
  <script type="text/javascript">
    var baseUrl = '{!! url('/') !!}'
  </script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"/>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PX7KNG7ZBD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-PX7KNG7ZBD');
  </script>

  <script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
  </script>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <link rel="stylesheet" href="{{asset('plugin/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/bootstrap/css/bootstrap-theme.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/poppins/poppins.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/jquery-ui/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/process-bar/tox-progress.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/owl-carouse/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/owl-carouse/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/animsition/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/jquery-ui/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/mediaelement/mediaelementplayer.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/datetimepicker/bootstrap-datepicker3.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/datetimepicker/bootstrap-datetimepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugin/lightgallery/lightgallery.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body
  class="page-template-default page page-id-911 woocommerce theme-ornaldo mmm mega_main_menu-2-1-5 woocommerce-no-js yith-wcan-free woo-variation-swatches woo-variation-swatches-theme-ornaldo woo-variation-swatches-theme-child-ornaldo woo-variation-swatches-style-rounded woo-variation-swatches-attribute-behavior-blur woo-variation-swatches-tooltip-enabled woo-variation-swatches-stylesheet-enabled wpb-js-composer js-comp-ver-6.0.5 ">
@include('layouts.ftc-mobile-wrapper')
<div id="page" class="site">
  @include('layouts.header')
  <div class="site-content-contain">
    @yield("content")
    @include('layouts.footer')
  </div>
</div>
<div id="to-top" class="scroll-button">
  <a class="scroll-button" href="javascript:void(0)" title="Back to Top">Back to Top</a>
</div>
@include('layouts.cart_drawer')

<script>
  document.documentElement.className = document.documentElement.className + ' yes-js js_active js';
</script>
<script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{asset('wp-content/cache/min/div/jquery-migrate-1.4.1.min.js')}}" data-minify="1"></script>

<!--[if lte IE 9]>
<script type="text/javascript"
        src="https://gosport.vn/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js"></script>
<![endif]-->
<script>
  window.lazyLoadOptions = {
    elements_selector: "[loading=lazy],.rocket-lazyload",
    data_src: "lazy-src",
    data_srcset: "lazy-srcset",
    data_sizes: "lazy-sizes",
    class_loading: "lazyloading",
    class_loaded: "lazyloaded",
    threshold: 300,
    callback_loaded: function (element) {
      if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
        if (element.classList.contains("lazyloaded")) {
          if (typeof window.jQuery != "undefined") {
            if (jQuery.fn.fitVids) {
              jQuery(element).parent().fitVids();
            }
          }
        }
      }
    },
    use_native: true
  };
  window.addEventListener("LazyLoad::Initialized", function (e) {
    var lazyLoadInstance = e.detail.instance;

    if (window.MutationObserver) {
      var observer = new MutationObserver(function (mutations) {
        var image_count = 0;
        var iframe_count = 0;
        var rocketlazy_count = 0;

        mutations.forEach(function (mutation) {
          for (i = 0; i < mutation.addedNodes.length; i++) {
            if (typeof mutation.addedNodes[i].getElementsByTagName !== "function") {
              return;
            }

            if (typeof mutation.addedNodes[i].getElementsByClassName !== "function") {
              return;
            }

            images = mutation.addedNodes[i].getElementsByTagName("img");
            is_image = mutation.addedNodes[i].tagName == "IMG";
            iframes = mutation.addedNodes[i].getElementsByTagName("iframe");
            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
            rocket_lazy = mutation.addedNodes[i].getElementsByClassName("rocket-lazyload");

            image_count += images.length;
            iframe_count += iframes.length;
            rocketlazy_count += rocket_lazy.length;

            if (is_image) {
              image_count += 1;
            }

            if (is_iframe) {
              iframe_count += 1;
            }
          }
        });

        if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
          lazyLoadInstance.update();
        }
      });

      var b = document.getElementsByTagName("body")[0];
      var config = {childList: true, subtree: true};

      observer.observe(b, config);
    }
  }, false);
</script>

<script type="text/javascript">
  jQuery(document).ready(function () {
    "use strict";
    if (typeof jQuery.cookie == 'function' && jQuery.cookie('gridcookie') == null) {
      jQuery('#main-content div.products').addClass('grid');
      jQuery('.grid_list_nav #grid').addClass('active');
    }

    if (typeof jQuery.cookie == 'function') {
      jQuery('#grid').click(function () {
        if (jQuery(this).hasClass('active')) {
          return false;
        }
        jQuery(this).addClass('active');
        jQuery('#list').removeClass('active');
        jQuery.cookie('gridcookie', 'grid', {path: '/'});
        jQuery('#main-content div.products').fadeOut(300, function () {
          jQuery(this).addClass('grid').removeClass('list').fadeIn(300);
        });
        return false;
      });

      jQuery('#list').click(function () {
        if (jQuery(this).hasClass('active')) {
          return false;
        }
        jQuery(this).addClass('active');
        jQuery('#grid').removeClass('active');
        jQuery.cookie('gridcookie', 'list', {path: '/'});
        jQuery('#main-content div.products').fadeOut(300, function () {
          jQuery(this).removeClass('grid').addClass('list').fadeIn(300);
        });
        return false;
      });

      if (jQuery.cookie('gridcookie')) {
        jQuery('#main-content div.products, #grid_list_nav').addClass(jQuery.cookie('gridcookie'));
      }

      if (jQuery.cookie('gridcookie') == 'grid') {
        jQuery('.grid_list_nav #grid').addClass('active');
        jQuery('.grid_list_nav #list').removeClass('active');
      }

      if (jQuery.cookie('gridcookie') == 'list') {
        jQuery('.grid_list_nav #list').addClass('active');
        jQuery('.grid_list_nav #grid').removeClass('active');
      }

      jQuery('#grid_list_nav a').click(function (event) {
        event.preventDefault();
      });
    }
  });
</script>
<script src="{{asset('wp-content/cache/min/div/jquery-plugin-touch-swipe-6.0.0.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/gsap-2.0.2.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/slider-6.0.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/jquery-plugin-blockui-2.70.0.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/js-cookie-2.1.4.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/colorbox-1.6.1.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/magnific-popup-1.0.0.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/variation-swatches-for-woo-commerce-1.0.62.min.js')}}"
        data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/wpbakery-6.0.0.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/gsap-1.13.2.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/gsap-1.7.4.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/waypoints-4.0.0.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/jquery-plugin-cookie-1.4.1.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/threesixty-slider-2.0.5.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/infinite-scroll-3.0.4.min.js')}}" data-minify="1"></script>
<script src="{{asset('vendor/jquery-scroll-to/jquery.scrollTo.2.1.2.min.js')}}" data-minify="1"></script>
<script src="{{asset('wp-content/cache/min/div/custom.js')}}" data-minify="1"></script>

<script>
  const eventCartChange = new CustomEvent('cart_change');
</script>
<script data-no-minify="1" async
        src="{{asset('wp-content/plugins/rocket-lazy-load/assets/js/12.0/lazyload.js')}}"></script>
<script type="text/javascript" src="{{ asset('vendor/carousel/owl.carousel.min.js') }}"></script>
<script src="{{asset('wp-content/cache/min/1/4873e279344e0e0189c9800fc215b310.js')}}" data-minify="1"></script>
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>

<script src="{{asset('plugin/jquery/jquery-2.0.2.min.js')}}"></script>
<script src="{{asset('plugin/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('plugin/process-bar/tox-progress.js')}}"></script>
<script src="{{asset('plugin/waypoint/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugin/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('plugin/owl-carouse/owl.carousel.min.js')}}"></script>
<script src="{{asset('plugin/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('plugin/mediaelement/mediaelement-and-player.js')}}"></script>
<script src="{{asset('plugin/masonry/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('plugin/datetimepicker/moment.min.js')}}"></script>
<script src="{{asset('plugin/datetimepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('plugin/datetimepicker/bootstrap-datepicker.tr.min.js')}}"></script>
<script src="{{asset('plugin/datetimepicker/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('plugin/datetimepicker/bootstrap-datetimepicker.fr.js')}}"></script>

<script src="{{asset('plugin/lightgallery/picturefill.min.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lightgallery.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lg-pager.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lg-autoplay.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lg-fullscreen.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lg-zoom.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lg-hash.js')}}"></script>
<script src="{{asset('plugin/lightgallery/lg-share.js')}}"></script>
<script src="{{asset('plugin/sticky/jquery.sticky.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="{{asset('js/main.js')}}"></script>
@yield('js-import')
</body>
</html>
