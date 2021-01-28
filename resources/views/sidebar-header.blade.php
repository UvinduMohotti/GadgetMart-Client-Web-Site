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

                    <a href="#" class="logo d-block d-lg-none">
                        <img src="{{ URL::asset('assets/images/gadgetmart.png')}}" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-right">
                    <span class="header-icon d-lg-block d-none"
                          style="font-size: 22px">{{ Session::get('username') }}</span>
                    @if(Session::get('login') != TRUE)
                        <a href="#" onclick="window.location='{{ url("/login") }}'"
                           class="header-icon login-link d-lg-block d-none"><i class="icon-user-2"></i></a>
                    @else
                        <a href="#" onclick="logout()" class="header-icon d-lg-block d-none"><i
                                class="fas fa-sign-out-alt"></i></a>
                    @endif
                    <div class="header-search d-lg-none d-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <div class="header-search-wrapper show">
                            <form action="#" method="get">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..."
                                       required="">
                                <button class="btn" type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div><!-- End .header-search-wrapper -->
                    </div>

                    <button class="mobile-menu-toggler d-lg-none d-block ml-4" type="button">
                        <i class="icon-menu text-white"></i>
                    </button>

                    {{--                    <a href="#" class="header-icon d-lg-block d-none"><i class="icon-wishlist-2"></i></a>--}}

                    <div class="dropdown cart-dropdown ml-lg-0 ml-3" id="cart">
                        {{--                        Load Cart Details--}}
                    </div><!-- End .dropdown -->

                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle d-lg-block d-none">
            <div class="container d-block">
                <div class="header-left d-none d-lg-flex">
                    <a href="#" class="logo">
                        <img src="{{ URL::asset('assets/images/gadgetmart.png')}}" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-right d-lg-block d-flex">

                    <button class="mobile-menu-toggler" type="button">
                        <i class="icon-menu"></i>
                    </button>

                    <div class="header-search d-lg-block d-none">
                        <a href="#" class="search-toggle d-lg-none d-inline-block" role="button"><i
                                class="icon-search"></i></a>
                        <div class="header-search-wrapper d-lg-flex position-relative">
                            <form action="#" method="get">
                                <input type="search" class="form-control" name="q" id="qq" placeholder="Search..."
                                       required>
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div><!-- End .header-search-wrapper -->
                    </div><!-- End .header-search -->

                    <nav class="main-nav">
                        <ul class="menu  menu-vertical sf-arrows">
                            <li class="active border-0"><a href="#" onclick="window.location='{{ url("/") }}'">HOME</a>
                            </li>
                            <li class="border-0">
                                <a href="#" class="sf-with-ul border-0">CATEGORIES</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="submenu" id="category">
                                                        {{--Load Category--}}
                                                    </ul>
                                                </div><!-- End .col-lg-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .col-lg-9 -->
                                        <div class="col-lg-3 p-0">
                                            <div class="banner h-100">
                                                <a href="#">
                                                    <img
                                                        src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1567022175704"
                                                        alt="Menu banner">
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
                                                        {{--Load Brand--}}
                                                    </ul>
                                                </div><!-- End .col-lg-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .col-lg-9 -->
                                        <div class="col-lg-3 p-0">
                                            <div class="banner h-100">
                                                <a href="#">
                                                    <img src="https://5.imimg.com/data5/ES/EA/MY-38795669/asus-laptop-500x500.jpg"
                                                         alt="Menu banner" class="product-promo p-0">
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-lg-3 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li class="border-0"><a href="#" onclick="window.location='{{ url("/all-product") }}'"
                                                    class="border-0">PRODUCTS</a></li>


                            <li class="border-0"><a href="#" onclick="window.location='{{ url("/about") }}'"
                                                    class="border-0">ABOUT US</a></li>
                            @if(Session::get('login') != TRUE)
                                <li class="border-0"><a href="#" onclick="window.location='{{ url("/login") }}'"
                                                        class=" border-0">LOG IN</a></li>
                            @else
                                <li class="border-0"><a href="#" onclick="window.location='{{ url("/order-history") }}'"
                                                        class=" border-0">ORDER HISTORY</a></li>
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
