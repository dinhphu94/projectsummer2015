<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">  <![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <title>@section('title')GFashion - very simple, very creative</title>
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Favorite Icons -->
  <link rel="icon" href="{{Asset('shop/img/favicon/favicon.html')}}" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{Asset('shop/img/favicon/apple-touch-icon-144x144-precomposed.html')}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{Asset('shop/img/favicon/apple-touch-icon-72x72-precomposed.html')}}">
  <link rel="apple-touch-icon-precomposed" href="{{Asset('shop/img/favicon/apple-touch-icon-precomposed.html')}}">
  <!-- // Favorite Icons -->
  
  <link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  
  <!-- GENERAL CSS FILES -->
  <link rel="stylesheet" href="{{Asset('shop/css/minified.css')}}">
  <!-- // GENERAL CSS FILES -->
  
  <!--[if IE 8]>
    <script src="{{Asset('shop/js/respond.min.js')}}"></script>
    <script src="{{Asset('shop/js/selectivizr-min.js')}}"></script>
  <![endif]-->
  <!--
  <script src="{{Asset('shop/js/jquery.min.js')}}"></script>
  -->
  <script>window.jQuery || document.write('<script src="{{Asset('shop/js/jquery.min.js')}}"><\/script>');</script>
  <script src="{{Asset('shop/js/modernizr.min.js')}}"></script>
  
  <!-- PARTICULAR PAGES CSS FILES -->
  @yield('styles')
  <!-- // PARTICULAR PAGES CSS FILES -->
  <link rel="stylesheet" href="{{Asset('shop/css/responsive.css')}}">
</head>
@stack('bodyclass')
      
  <!-- PAGE WRAPPER -->
<div id="page-wrapper">

  <!-- SITE HEADER -->
  <header id="site-header" role="banner">
    <!-- HEADER TOP -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-7">
            <!-- CONTACT INFO -->
            <div class="contact-info">
              <i class="iconfont-headphones round-icon"></i>
              <strong>+444 (100) 1234</strong>
              <span>(Mon- Fri: 09.00 - 21.00)</span>
              </div>
            <!-- // CONTACT INFO -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5">
            <ul class="actions unstyled clearfix">
              <li>
                <!-- SEARCH BOX -->
                <div class="search-box">
                  <form action="#" method="post">
                    <div class="input-iconed prepend">
                      <button class="input-icon"><i class="iconfont-search"></i></button>
                      <label for="input-search" class="placeholder">Search here…</label>
                      <input type="text" name="q" id="input-search" class="round-input full-width" required />
                    </div>
                  </form>
                </div>
                <!-- // SEARCH BOX -->
              </li>
              <li data-toggle="sub-header" data-target="#sub-social">
                <!-- SOCIAL ICONS -->
                <a href="javascript:void(0);" id="social-icons">
                  <i class="iconfont-share round-icon"></i>
                </a>
                
                <div id="sub-social" class="sub-header">
                  <ul class="social-list unstyled text-center">
                    <li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
                    <li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
                    <li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
                    <li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
                    <li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
                  </ul>
                </div>
                <!-- // SOCIAL ICONS -->
              </li>
              <li data-toggle="sub-header" data-target="#sub-cart">
                <!-- SHOPPING CART -->
                <a href="javascript:void(0);" id="total-cart">
                  <i class="iconfont-shopping-cart round-icon"></i>
                </a>
                
                <div id="sub-cart" class="sub-header">
                  <div class="cart-header">
                    <span>Your cart is currently empty.</span>
                    <small><a href="cart.html">(See All)</a></small>
                  </div>
                  <ul class="cart-items product-medialist unstyled clearfix"></ul>
                  <div class="cart-footer">
                    <div class="cart-total clearfix">
                      <span class="pull-left uppercase">Total</span>
                      <span class="pull-right total">$ 0</span>
                    </div>
                    <div class="text-right">
                      <a href="cart.html" class="btn btn-default btn-round view-cart">View Cart</a>
                    </div>
                  </div>
                </div>
                <!-- // SHOPPING CART -->
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- ADD TO CART MESSAGE -->
      <div class="cart-notification">
        <ul class="unstyled"></ul>
      </div>
      <!-- // ADD TO CART MESSAGE -->
    </div>
    <!-- // HEADER TOP -->
    <!-- MAIN HEADER -->
    <div class="main-header-wrapper">
      <div class="container">
        <div class="main-header">
          <!-- CURRENCY / LANGUAGE / USER MENU -->
          <div class="actions">
            <div class="center-xs">
              <!-- CURRENCY -->
              <ul class="option-list unstyled">
                <li class="active"><a href="#" data-toggle="tooltip" title="USD - US Dollar">$</a></li>
                <li><a href="#" data-toggle="tooltip" title="GBP - British Pound">£</a></li>
                <li><a href="#" data-toggle="tooltip" title="EUR - Euro">€</a></li>
              </ul>
              <!-- // CURRENCY -->
              <!-- LANGUAGES -->
              <ul class="option-list unstyled">
                <li class="active"><a href="#" data-toggle="tooltip" title="English">EN</a></li>
                <li><a href="#" data-toggle="tooltip" title="French">FR</a></li>
                <li><a href="#" data-toggle="tooltip" title="Deutsch">DE</a></li>
              </ul>
              <!-- // LANGUAGES -->
            </div>
            <div class="clearfix"></div>
            <!-- USER RELATED MENU -->
            <nav id="tiny-menu" class="clearfix">
              <ul class="user-menu">
                <li><a href="#">My Account</a>
                
                </li>
                <li><a href="cart.html">My Wishlist</a></li>
                <li><a href="{{URL::to('checkout')}}">Checkout</a></li>
                <li><a href="{{URL::to('home')}}">Log Out</a></li>
              </ul>
            </nav>
            <!-- // USER RELATED MENU -->
          </div>
          <!-- // CURRENCY / LANGUAGE / USER MENU -->
          <!-- SITE LOGO -->
          <div class="logo-wrapper">
            <a href="index-2.html" class="logo" title="GFashion - Responsive e-commerce HTML Template">
              <img src="{{Asset('shop/img/logo.png')}}" alt="GFashion - Responsive e-commerce HTML Template" />
            </a>
          </div>
          <!-- // SITE LOGO -->
          <!-- SITE NAVIGATION MENU -->
          <nav id="site-menu" role="navigation">
            <ul class="main-menu hidden-sm hidden-xs">
              <li class="active">
                <a href="{{URL::to('home')}}">Home</a>
              </li>
              <li>
                <a href="{{URL::to('products')}}">Products</a>
              </li>
              <li>
                <a href="{{URL::to('women')}}">Women</a>
                <!-- MEGA MENU -->
                <div class="mega-menu" data-col-lg="9" data-col-md="12">
                  <div class="row">
                  
                    <div class="col-md-3">
                      <h4 class="menu-title">Clothing</h4>
                      <ul class="mega-sub">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-md-3">
                      <h4 class="menu-title">Accessories</h4>
                      <ul class="mega-sub">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-md-3">
                      <h4 class="menu-title">Brands</h4>
                      <ul class="mega-sub">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-md-3">
                      <div class="carousel slide m-b" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="{{Asset('shop/images/men/slide1.jpg')}}" alt="" />
                          </div>
                          <div class="item">
                            <img src="{{Asset('shop/images/men/slide2.jpg')}}" alt="" />
                          </div>
                        </div>
                      </div>
                      <h5 class="text-semibold uppercase m-b-sm">Featured Products</h5>
                      <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Etiam neque velit, blandit sed scelerisque.</p>
                      <a href="products.html" class="btn btn-default btn-round">Go to Shop →</a>
                    </div>
                    
                  </div>
                </div>
                <!-- // MEGA MENU -->
              </li>
              <li>
                <a href="{{URL::to('men')}}">Men</a>
                
                <!-- MEGA MENU -->
                <div class="mega-menu" data-col-lg="9" data-col-md="12">
                  <div class="row">
                  
                    <div class="col-md-3">
                      <h4 class="menu-title">Clothing</h4>
                      <ul class="mega-sub">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-md-3">
                      <h4 class="menu-title">Accessories</h4>
                      <ul class="mega-sub">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-md-3">
                      <h4 class="menu-title">Brands</h4>
                      <ul class="mega-sub">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </div>
                    
                    <div class="col-md-3">
                      <div class="carousel slide m-b" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="{{Asset('shop/images/men/slide1.jpg')}}" alt="" />
                          </div>
                          <div class="item">
                            <img src="{{Asset('shop/images/men/slide2.jpg')}}" alt="" />
                          </div>
                        </div>
                      </div>
                      <h5 class="text-semibold uppercase m-b-sm">Featured Products</h5>
                      <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Etiam neque velit, blandit sed scelerisque.</p>
                      <a href="products.html" class="btn btn-default btn-round">Go to Shop →</a>
                    </div>
                    
                  </div>
                </div>
                <!-- // MEGA MENU -->
                
              </li>
              <li>
                <a href="{{URL::to('components')}}">Components</a>
              </li>
              <li>
                <a href="{{URL::to('store-locator')}}">Store Locator</a>
              </li>
              <li>
                <a href="{{URL::to('contacts')}}">Contact Us</a>
              </li>
              <li>
                <a href="#">Buy Me!</a>
              </li>
            </ul>
            
            <!-- MOBILE MENU -->
            <div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
              <button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
              <ul class="dl-menu">
                <li class="active">
                  <a href="javsacript:void(0);">Home</a>
                </li>
                <li>
                  <a href="javsacript:void(0);">Women</a>

                  <ul class="dl-submenu">
                    <li>
                      <a href="products.html">Clothing</a>
                      <ul class="dl-submenu">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="products.html">Accessories</a>
                      <ul class="dl-submenu">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="products.html">Brands</a>
                      <ul class="dl-submenu">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="javsacript:void(0);">Men</a>
                  
                  <ul class="dl-submenu">
                    <li>
                      <a href="products.html">Clothing</a>
                      <ul class="dl-submenu">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="products.html">Accessories</a>
                      <ul class="dl-submenu">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="products.html">Brands</a>
                      <ul class="dl-submenu">
                        <li><a href="products.html">Casual Wear</a></li>
                        <li><a href="products.html">Evening Wear</a></li>
                        <li><a href="products.html">Formal Attire</a></li>
                        <li><a href="products.html">Womens Jeans</a></li>
                        <li><a href="products.html">Mens Jeans</a></li>
                        <li><a href="products.html">Fall Styles</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- // MOBILE MENU -->

          </nav>
          <!-- // SITE NAVIGATION MENU -->
        </div>
      </div>
    </div>
    <!-- // MAIN HEADER -->
  </header>

<!-- content-->

@yield('content')


<!-- content End -->

@include('partials.footer')
</div>

@include('partials.script')
@stack('script')

</body>
</html>