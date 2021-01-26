<header class="header">
    <div class="header-wrapper">
        <div class="header-top">
            <div class="container">
                <div class="header-left header-dropdowns">
                    {{--                        <div class="header-dropdown d-none d-lg-block">--}}
                    {{--                            <a href="#" class="pl-0">ENG</a>--}}
                    {{--                            <div class="header-menu">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">ENG</a></li>--}}
                    {{--                                    <li><a href="#">FRE</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div><!-- End .header-menu -->--}}
                    {{--                        </div><!-- End .header-dropown -->--}}

                    {{--                        <div class="header-dropdown d-none d-lg-block">--}}
                    {{--                            <a href="#" class="pt-0">USD</a>--}}
                    {{--                            <div class="header-menu">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#">EUR</a></li>--}}
                    {{--                                    <li><a href="#">USD</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div><!-- End .header-menu -->--}}
                    {{--                        </div><!-- End .header-dropown -->--}}

                    <a href="index.html" class="logo d-block d-lg-none">
                        <img src="{{ URL::asset('assets/images/logo.png')}}" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-right">
                    <span class="header-icon d-lg-block d-none" style="font-size: 22px">{{ Session::get('username') }}</span>
                    @if(Session::get('login') != TRUE)
                    <a href="#" onclick="window.location='{{ url("/login") }}'" class="header-icon login-link d-lg-block d-none"><i class="icon-user-2"></i></a>
                    @else
                        <a href="#" onclick="logout()" class="header-icon d-lg-block d-none"><i class="fas fa-sign-out-alt"></i></a>
                    @endif
                    <div class="header-search d-lg-none d-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <div class="header-search-wrapper show">
                            <form action="#" method="get">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required="">
                                <button class="btn" type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div><!-- End .header-search-wrapper -->
                    </div>

                    <button class="mobile-menu-toggler d-lg-none d-block ml-4" type="button">
                        <i class="icon-menu text-white"></i>
                    </button>

{{--                    <a href="#" class="header-icon d-lg-block d-none"><i class="icon-wishlist-2"></i></a>--}}

                    <div class="dropdown cart-dropdown ml-lg-0 ml-3" id="cart">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count badge-circle">10</span>
                        </a>

                        <div class="dropdown-menu" >
                            <div class="dropdownmenu-wrapper">
                                <div class="dropdown-cart-header">
                                    <span>2 Items</span>

                                    <a href="cart.html" class="float-right text-primary">View Cart</a>
                                </div><!-- End .dropdown-cart-header -->

                                <div class="dropdown-cart-products">

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Men Sunglasses</a>
                                            </h4>

                                            <span class="cart-product-info">
															<span class="cart-product-qty">1</span>
															x $60.00
														</span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{ URL::asset('assets/images/products/cart/product-1.jpg')}}" alt="product">
                                            </a>
                                            <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                        </figure>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>SubTotal:</span>

                                    <span class="cart-total-price float-right"></span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="checkout-shipping.html" class="btn btn-block btn-primary">Checkout</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdownmenu-wrapper -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .dropdown -->

                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle d-lg-block d-none">
            <div class="container d-block">
                <div class="header-left d-none d-lg-flex">
                    <a href="index.html" class="logo">
                        <img src="{{ URL::asset('assets/images/logo.png')}}" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-right d-lg-block d-flex">

                    <button class="mobile-menu-toggler" type="button">
                        <i class="icon-menu"></i>
                    </button>

                    <div class="header-search d-lg-block d-none">
                        <a href="#" class="search-toggle d-lg-none d-inline-block" role="button"><i class="icon-search"></i></a>
                        <div class="header-search-wrapper d-lg-flex position-relative">
                            <form action="#" method="get">
                                <input type="search" class="form-control" name="q" id="qq" placeholder="Search..." required>
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- End .header-search-wrapper -->
                    </div><!-- End .header-search -->

                    <nav class="main-nav">
                        <ul class="menu  menu-vertical sf-arrows">
                            <li class="active border-0"><a href="#" onclick="window.location='{{ url("/") }}'" >HOME</a></li>
                            <li class="border-0">
                                <a href="#" class="sf-with-ul border-0">CATEGORIES</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="submenu" id="category">
                                                        <li><a href="category-banner-full-width.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                                        <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                                        <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                                        <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                                    </ul>
                                                </div><!-- End .col-lg-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .col-lg-9 -->
                                        <div class="col-lg-3 p-0">
                                            <div class="banner h-100">
                                                <a href="#">
                                                    <img src="{{ URL::asset('assets/images/menu-banner-2.jpg')}}" alt="Menu banner">
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-lg-3 -->
                                    </div>
                                </div><!-- End .megamenu -->
                            </li>
                            <li class="megamenu-container border-0">
                                <a href="#" class="sf-with-ul border-0">BRAND</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="submenu" id="brand">
                                                        <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                        <li><a href="product-full-width.html">Vertical Thumbnails</a></li>
                                                        <li><a href="product.html">Inner Zoom</a></li>
                                                        <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                        <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                                    </ul>
                                                </div><!-- End .col-lg-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .col-lg-9 -->
                                        <div class="col-lg-3 p-0">
                                            <div class="banner h-100">
                                                <a href="#">
                                                    <img src="{{ URL::asset('assets/images/menu-banner.jpg')}}" alt="Menu banner" class="product-promo p-0">
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-lg-3 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li class="border-0"><a href="#" onclick="window.location='{{ url("/all-product") }}'" class="border-0">PRODUCTS</a></li>


                            <li class="border-0"><a href="#" onclick="window.location='{{ url("/about") }}'" class="border-0">ABOUT US</a></li>
                            @if(Session::get('login') != TRUE)
                            <li class="border-0"><a href="#" onclick="window.location='{{ url("/login") }}'" class=" border-0">LOG IN</a></li>
                            @endif
                        </ul>
                    </nav>
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->

        <div class="header-bottom d-none d-lg-block text-align-center position-absolute">
            <div class="container d-block text-center">
                <div class="header-left d-block">
                    <h6 class="mb-0">CALL US NOW</h6>
                </div><!-- End .header-left -->

                <div class="header-right d-block">
                    <div class="header-contact">
                        <a href="tel:#">+94 77 6420 633</a>
                    </div><!-- End .header-contact -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->

            <div class="social-icons text-center">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .header-bottom -->

    </div><!-- End .header-wrapper -->
</header><!-- End .header -->
