<!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
 
     <title>Multi Vendor Ecomerce</title>
     <meta name="keywords"
         content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">
 
     <!-- site Favicon -->
     <link rel="icon" href="{{asset('forntend/assets/images/favicon/favicon.png')}}" sizes="32x32" />
     <link rel="apple-touch-icon" href="{{asset('forntend/assets/images/favicon/favicon.png')}}" />
     <meta name="msapplication-TileImage" content="{{asset('forntend/assets/images/favicon/favicon.png')}}" />
 
     <!-- css Icon Font -->
     <link rel="stylesheet" href="{{asset('forntend/assets/css/vendor/ecicons.min.css')}}" />
 
     <!-- css All Plugins Files -->
     <link rel="stylesheet" href="{{asset('forntend/assets/css/plugins/animate.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/plugins/swiper-bundle.min.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/plugins/jquery-ui.min.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/plugins/countdownTimer.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/plugins/slick.min.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/plugins/bootstrap.css')}}" />
 
     <!-- Main Style -->
     <link rel="stylesheet" href="{{asset('forntend/assets/css/demo1.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/style.css')}}" />
     <link rel="stylesheet" href="{{asset('forntend/assets/css/responsive.css')}}" />
 
     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="{{asset('forntend/assets/css/backgrounds/bg-4.css')}}">
 </head>
 
 <body>
     {{-- <div id="ec-overlay">
         <div class="ec-ellipsis">
             <div></div>
             <div></div>
             <div></div>
             <div></div>
         </div>
     </div> --}}
     <!-- Header start  -->
     @include('layouts.forntend.partial.header')
     <!-- Header End  -->
 
     <!-- ekka Cart Start -->
     @include('layouts.forntend.partial.cart')
     <!-- ekka Cart End -->
 
     <!-- Category Sidebar start -->
     @include('layouts.forntend.partial.category_sidebar')
 
    <!-- Main section Start -->
        @yield('main-content')
    <!-- Main section End -->

     
 
     <!-- Footer navigation panel for responsive display -->
     <div class="ec-nav-toolbar">
         <div class="container">
             <div class="ec-nav-panel">
                 <div class="ec-nav-panel-icons">
                     <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                             class="fi-rr-menu-burger"></i></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                             class="fi-rr-shopping-bag"></i><span
                             class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="index.html" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="wishlist.html" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                             class="ec-cart-noti">4</span></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="login.html" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                 </div>
 
             </div>
         </div>
     </div>
     <!-- Footer navigation panel for responsive display end -->
 
     <!-- Recent Purchase Popup  -->
     <div class="recent-purchase">
         <img src="{{asset('forntend/assets/images/product-image/1.jpg')}}" alt="payment image">
         <div class="detail">
             <p>Someone in new just bought</p>
             <h6>stylish baby shoes</h6>
             <p>10 Minutes ago</p>
         </div>
         <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
     </div>
     <!-- Recent Purchase Popup end -->
 
     <!-- Cart Floating Button -->
     <div class="ec-cart-float">
         <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
             <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
             </div>
             <span class="ec-cart-count cart-count-lable">3</span>
         </a>
     </div>
     <!-- Cart Floating Button end -->
 
     <!-- Whatsapp -->
     @include('layouts.forntend.partial.whatsapp-feature')
     <!-- Whatsapp end -->
 
     <!-- Feature tools -->
     @include('layouts.forntend.partial.theme-feature')
     <!-- Feature tools end -->
 
     <!-- Vendor JS -->
     <script src="{{asset('forntend/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/vendor/popper.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/vendor/bootstrap.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
 
     <!--Plugins JS-->
     <script src="{{asset('forntend/assets/js/plugins/swiper-bundle.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/plugins/countdownTimer.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/plugins/scrollup.js')}}"></script>
     <script src="{{asset('forntend/assets/js/plugins/jquery.zoom.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/plugins/slick.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/plugins/infiniteslidev2.js')}}"></script>
     <script src="{{asset('forntend/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{asset('forntend/assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
 
     <!-- Main Js -->
     <script src="{{asset('forntend/assets/js/vendor/index.js')}}"></script>
     <script src="{{asset('forntend/assets/js/main.js')}}"></script>
 </body>

 </html>