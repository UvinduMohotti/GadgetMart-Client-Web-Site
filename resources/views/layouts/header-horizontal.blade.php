<nav class="rt_nav_header horizontal-layout col-lg-12 col-12 p-0 bg-white">
    <div class="top_nav flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
            <!--=========================*
                          Logo
            *===========================-->
            <div class="text-center rt_nav_wrapper d-flex align-items-center">
                <a class="nav_logo rt_logo" href="{{ URL::to('horizontal-menu/index') }}"><img src="{{asset('assets/images/logo-dark.svg')}}" alt="logo"/></a>
                <a class="nav_logo nav_logo_mob" href="{{ URL::to('horizontal-menu/index') }}"><img src="{{asset('assets/images/mobile-logo.svg')}}" alt="logo"/></a>
            </div>
            <!--=========================*
                       End Logo
           *===========================-->
            <div class="nav_wrapper_main d-flex align-items-center justify-content-between flex-grow-1">
                <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                    <!--==================================*
                             Notification Section
                    *====================================-->
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                           data-toggle="dropdown">
                            <i class="feather ft-bell"></i>
                            <span class="count">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown rt-notification-list"
                             aria-labelledby="notificationDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 3 new notifications</p>
                                <a href="#" class="view_btn">view all</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <div class="rt-notification-icon bg_blue">
                                        <i class="ti-map-alt bg_blue mx-0"></i>
                                    </div>
                                </div>
                                <div class="rt-notification-item-content">
                                    <h6 class="rt-notification-subject font-weight-normal text-dark mb-1">You added your Location</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <div class="rt-notification-icon bg_warning">
                                        <i class="ti-bolt-alt bg_warning mx-0"></i>
                                    </div>
                                </div>
                                <div class="rt-notification-item-content">
                                    <h6 class="rt-notification-subject font-weight-normal text-dark mb-1">Your Subscription Expired</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        30 Seconds ago
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <div class="rt-notification-icon bg_danger">
                                        <i class="ti-heart bg_danger mx-0"></i>
                                    </div>
                                </div>
                                <div class="rt-notification-item-content">
                                    <h6 class="rt-notification-subject font-weight-normal text-dark mb-1">Some special like you</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just Now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <div class="rt-notification-icon bg_info">
                                        <i class="ti-comments bg_info mx-0"></i>
                                    </div>
                                </div>
                                <div class="rt-notification-item-content">
                                    <h6 class="rt-notification-subject font-weight-normal text-dark mb-1">New Commetns On Post</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just Now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <div class="rt-notification-icon bg_secondary">
                                        <i class="ti-settings bg_secondary mx-0"></i>
                                    </div>
                                </div>
                                <div class="rt-notification-item-content">
                                    <h6 class="rt-notification-subject font-weight-normal text-dark mb-1">You changed your Settings</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just Now
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!--==================================*
                             End Notification Section
                    *====================================-->
                    <!--==================================*
                             Message Section
                    *====================================-->
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                           data-toggle="dropdown" aria-expanded="false">
                            <i class="feather ft-mail mx-0"></i>
                            <span class="count">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown rt-notification-list"
                             aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 3 New Messages</p>
                                <a href="#" class="view_btn">view all</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <img src="{{asset('assets/images/author/author-img1.jpg')}}" class="profile-pic" alt="image">
                                </div>
                                <div class="rt-notification-item-content flex-grow">
                                    <h6 class="rt-notification-subject ellipsis font-weight-medium">Jhon Doe
                                        <span class="float-right font-weight-light small-text">3:15 PM</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Hello are you there?
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <img src="{{asset('assets/images/author/author-img2.jpg')}}" class="profile-pic" alt="image">
                                </div>
                                <div class="rt-notification-item-content flex-grow">
                                    <h6 class="rt-notification-subject ellipsis font-weight-medium">David Boos
                                        <span class="float-right font-weight-light small-text">1:25 PM</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Waiting for your Response...
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <img src="{{asset('assets/images/user.jpg')}}" class="profile-pic" alt="image">
                                </div>
                                <div class="rt-notification-item-content flex-grow">
                                    <h6 class="rt-notification-subject ellipsis font-weight-medium"> Jason Roy
                                        <span class="float-right font-weight-light small-text">5:21 PM</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Hi there, Hope you are well
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item rt-notification-item">
                                <div class="rt-notification-thumbnail">
                                    <img src="{{asset('assets/images/author/author-img3.jpg')}}" class="profile-pic" alt="image">
                                </div>
                                <div class="rt-notification-item-content flex-grow">
                                    <h6 class="rt-notification-subject ellipsis font-weight-medium"> Malika Roy
                                        <span class="float-right font-weight-light small-text">2:30 PM</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Your Product Dispatched ...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!--==================================*
                             End Message Section
                    *====================================-->
                    <!--==================================*
                             Profile Menu
                    *====================================-->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="profile_name">Jessica Roy <i class="feather ft-chevron-down"></i></span>
                            <img src="{{asset('assets/images/user.jpg')}}" alt="profile"/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-2"
                             aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-user text-dark mr-3"></i> Profile
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-settings text-dark mr-3"></i> Account Settings
                            </a>
                            <span role="separator" class="divider"></span>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-dark mr-3"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <!--==================================*
                             End Profile Menu
                    *====================================-->
                </ul>
                <!--=========================*
                           Mobile Menu
               *===========================-->
                <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="feather ft-menu text-white"></span>
                </button>
                <!--=========================*
                       End Mobile Menu
               *===========================-->
            </div>
        </div>
    </div>
    <div class="nav-bottom">
        <div class="container">
            <ul class="nav page-navigation">
                <!--=========================*
                          Home
                *===========================-->
                <li class="{!! (Request::is('horizontal-menu/index') || Request::is('horizontal-menu/index2') || Request::is('horizontal-menu/index3') ? 'active': "") !!} nav-item">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-home"></i><span class="menu-title">Dashboard</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li {!! (Request::is('horizontal-menu/index') ? 'class="active nav-item"':"") !!}><a class="nav-link" href="{{ URL::to('horizontal-menu/index') }}">Dashboard V1</a></li>
                            <li {!! (Request::is('horizontal-menu/index2') ? 'class="active nav-item"':"") !!}><a class="nav-link" href="{{ URL::to('horizontal-menu/index2') }}">Dashboard V2</a></li>
                            <li {!! (Request::is('horizontal-menu/index3') ? 'class="active nav-item"':"") !!}><a class="nav-link" href="{{ URL::to('horizontal-menu/index3') }}">Dashboard V3</a></li>
                        </ul>
                    </div>
                </li>
                <!--=========================*
                          UI Features
                *===========================-->
                <li class="nav-item mega-menu {!! (Request::is('alert') || Request::is('accordion') || Request::is('buttons')
                        || Request::is('badges') || Request::is('cards') || Request::is('carousel')
                        || Request::is('dropdown') || Request::is('list-group') || Request::is('modals')
                        || Request::is('pagination') || Request::is('popover') || Request::is('progressbar')
                        || Request::is('tabs') || Request::is('typography') || Request::is('grid') || Request::is('font-awesome') || Request::is('themify') || Request::is('ionicons')
                        || Request::is('et-line') ? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-gitlab"></i><span class="menu-title">UI Features</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <div class="col-group-wrapper row">
                            <div class="col-group col-md-4 mb-mob-0">
                                <div class="row">
                                    <div class="col-12">
                                        <!--=========================*
                                                  Basic Elements
                                        *===========================-->
                                        <p class="category-heading">Basic Elements</p>
                                        <div class="submenu-item">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="nav-item {!! (Request::is('alert') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/alert') }}"><i class="menu_icon ti-alert"></i><span>Alert</span></a></li>
                                                        <li class="nav-item {!! (Request::is('accordion') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/accordion') }}"><i class="menu_icon ti-layout-accordion-separated"></i><span>Accordion</span></a></li>
                                                        <li class="nav-item {!! (Request::is('buttons') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/buttons') }}"><i class="menu_icon icon-focus"></i><span>Buttons</span></a></li>
                                                        <li class="nav-item {!! (Request::is('badges') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/badges') }}"><i class="menu_icon icon-ribbon"></i><span>Badges</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="nav-item {!! (Request::is('cards') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/cards') }}"><i class="menu_icon ti-id-badge"></i><span>Cards</span></a></li>
                                                        <li class="nav-item {!! (Request::is('carousel') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/carousel') }}"><i class="menu_icon ti-layout-slider"></i><span>Carousels</span></a></li>
                                                        <li class="nav-item {!! (Request::is('dropdown') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/dropdown') }}"><i class="menu_icon icon-layers"></i><span>Dropdown</span></a></li>
                                                        <li class="nav-item {!! (Request::is('tabs') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/tabs') }}"><i class="menu_icon ti-layout-tab"></i><span>Tabs</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-group col-md-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="submenu-item pt-5 mt-2 pt-mob-0 mt-mob-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="nav-item {!! (Request::is('typography') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/typography') }}"><i class="menu_icon ti-smallcap"></i><span>Typography</span></a></li>
                                                        <li class="nav-item {!! (Request::is('list-group') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/list-group') }}"><i class="menu_icon ti-list"></i><span>List Group</span></a></li>
                                                        <li class="nav-item {!! (Request::is('modals') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/modals') }}"><i class="menu_icon ti-layers-alt"></i><span>Modals</span></a></li>
                                                        <li class="nav-item {!! (Request::is('pagination') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/pagination') }}"><i class="menu_icon ion-android-more-horizontal"></i><span>Pagination</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li class="nav-item {!! (Request::is('popover') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/popover') }}"><i class="menu_icon ion-ios-photos"></i><span>Popover</span></a></li>
                                                        <li class="nav-item {!! (Request::is('progressbar') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/progressbar') }}"><i class="menu_icon ion-ios-settings-strong"></i><span>Progressbar</span></a></li>
                                                        <li class="nav-item {!! (Request::is('grid') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/grid') }}"><i class="menu_icon ti-layout-grid4"></i><span>Grid</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=========================*
                                      Icons
                            *===========================-->
                            <div class="col-group col-md-4">
                                <p class="category-heading">Icons</p>
                                <ul class="submenu-item">
                                    <li class="nav-item {!! (Request::is('font-awesome') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/font-awesome') }}"><i class="menu_icon ti-flag-alt"></i> <span>Font Awesome</span></a></li>
                                    <li class="nav-item {!! (Request::is('themify') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/themify') }}"><i class="menu_icon ti-themify-favicon"></i><span>Themify</span></a></li>
                                    <li class="nav-item {!! (Request::is('ionicons') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/ionicons') }}"><i class="menu_icon ion-ionic"></i><span>Ionicons V2</span></a></li>
                                    <li class="nav-item {!! (Request::is('et-line') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/et-line') }}"><i class="menu_icon icon-basket"></i><span>ET Line Icons</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!--=========================*
                          Advance Kit
                *===========================-->
                <li class="nav-item {!! (Request::is('toastr') || Request::is('sweet-alert') || Request::is('cropper')
                        || Request::is('loaders') || Request::is('app-tour') || Request::is('ladda-button') || Request::is('dropzone') ? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-briefcase"></i><span class="menu-title">Advance Kit</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item {!! (Request::is('toastr') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/toastr') }}"><i class="menu_icon ti-layout-cta-left"></i> <span>Toastr</span></a></li>
                            <li class="nav-item {!! (Request::is('sweet-alert') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/sweet-alert') }}"><i class="menu_icon ti-layout-media-overlay-alt-2"></i> <span>Sweet Alert</span></a></li>
                            <li class="nav-item {!! (Request::is('cropper') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/cropper') }}"><i class="menu_icon ion-crop"></i> <span>Image Cropper</span></a></li>
                            <li class="nav-item {!! (Request::is('loaders') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/loaders') }}"><i class="menu_icon ion-load-a"></i> <span>Css Loaders</span></a></li>
                            <li class="nav-item {!! (Request::is('app-tour') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/app-tour') }}"><i class="menu_icon ti-flag-alt"></i> <span>App Tour</span></a></li>
                            <li class="nav-item {!! (Request::is('ladda-button') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/ladda-button') }}"><i class="menu_icon ion-load-b"></i> <span>Ladda Button</span></a></li>
                            <li class="nav-item {!! (Request::is('dropzone') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/dropzone') }}"><i class="menu_icon ti-layout-placeholder"></i> <span>Dropzone</span></a></li>
                        </ul>
                    </div>
                </li>
                <!--=========================*
                             Forms
                *===========================-->
                <li class="nav-item {!! (Request::is('form-basic') || Request::is('form-layouts') || Request::is('form-groups')
                        || Request::is('form-validation') ? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-clipboard"></i><span class="menu-title">Forms</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item {!! (Request::is('form-basic') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/form-basic') }}"><i class="menu_icon ion-edit"></i><span>Basic ELements</span></a></li>
                            <li class="nav-item {!! (Request::is('form-layouts') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/form-layouts') }}"><i class="menu_icon ti-layout-grid2-thumb"></i><span>Form Layouts</span></a></li>
                            <li class="nav-item {!! (Request::is('form-groups') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/form-groups') }}"><i class="menu_icon ion-ios-paper"></i><span>Input Groups</span></a></li>
                            <li class="nav-item {!! (Request::is('form-validation') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/form-validation') }}"><i class="menu_icon ion-android-cancel"></i><span>Form Validation</span></a></li>
                        </ul>
                    </div>
                </li>
                <!--=========================*
                              Maps
                *===========================-->
                <li class="nav-item {!! (Request::is('google-maps') || Request::is('am-maps') ? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-map-pin"></i><span
                            class="menu-title">Maps</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item {!! (Request::is('google-maps') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/google-maps') }}"><i class="menu_icon icon-map"></i><span>Google Maps</span></a></li>
                            <li class="nav-item {!! (Request::is('am-maps') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/am-maps') }}"><i class="menu_icon icon-map-pin"></i><span>AM Chart Maps</span></a></li>
                        </ul>
                    </div>
                </li>
                <!--=========================*
                              Data
                *===========================-->
                <li class="nav-item mega-menu {!! (Request::is('basic-table') || Request::is('datatable') || Request::is('js-grid')
                    || Request::is('text-editor') || Request::is('code-editor')
                    || Request::is('chart-js') || Request::is('morris-charts') || Request::is('c3-chart')
                    || Request::is('chartist') ? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-file-text"></i><span class="menu-title">Data</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <div class="col-group-wrapper row">
                            <!--=========================*
                                      Tables
                            *===========================-->
                            <div class="col-group col-md-3">
                                <p class="category-heading">Table</p>
                                <ul class="submenu-item">
                                    <li class="nav-item {!! (Request::is('basic-table') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/basic-table') }}"><i class="menu_icon ion-ios-grid-view"></i><span>Basic Tables</span></a></li>
                                    <li class="nav-item {!! (Request::is('datatable') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/datatable') }}"><i class="menu_icon ti-layout-slider-alt"></i><span>Datatable</span></a></li>
                                    <li class="nav-item {!! (Request::is('js-grid') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/js-grid') }}"><i class="menu_icon ti-view-list-alt"></i><span>Js Grid Table</span></a></li>
                                </ul>
                            </div>
                            <!--=========================*
                                      Editors
                            *===========================-->
                            <div class="col-group col-md-3">
                                <p class="category-heading">Editors</p>
                                <ul class="submenu-item">
                                    <li class="nav-item {!! (Request::is('text-editor') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/text-editor') }}"><i class="menu_icon ti-uppercase"></i><span>Text Editor</span></a></li>
                                    <li class="nav-item {!! (Request::is('code-editor') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/code-editor') }}"><i class="menu_icon ion-code"></i><span>Code Editor</span></a></li>
                                </ul>
                            </div>
                            <!--=========================*
                                      Charts
                            *===========================-->
                            <div class="col-group col-md-6">
                                <p class="category-heading">Charts</p>
                                <div class="submenu-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li class="nav-item {!! (Request::is('chart-js') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/chart-js') }}"><i class="menu_icon feather ft-bar-chart"></i><span>Chart Js</span></a></li>
                                                <li class="nav-item {!! (Request::is('morris-charts') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/morris-charts') }}"><i class="menu_icon feather ft-bar-chart-2"></i><span>Morris Chart Js</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li class="nav-item {!! (Request::is('c3-chart') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/c3-chart') }}"><i class="menu_icon feather ft-bar-chart-line"></i><span>C3 Chart Js</span></a></li>
                                                <li class="nav-item {!! (Request::is('chartist') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/chartist') }}"><i class="menu_icon feather ft-bar-chart-line-"></i><span>Chartist Js</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item mega-menu {!! (Request::is('404') || Request::is('500') || Request::is('505')
                    || Request::is('blank') || Request::is('invoice') || Request::is('pricing')
                        || Request::is('profile') || Request::is('timeline')? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-layers"></i><span class="menu-title">Pages</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <div class="col-group-wrapper row">
                            <!--=========================*
                                      Error Pages
                            *===========================-->
                            <div class="col-group col-md-3">
                                <p class="category-heading">Error Pages</p>
                                <ul class="submenu-item">
                                    <li class="nav-item {!! (Request::is('404') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/404') }}"><i class="menu_icon ti-unlink"></i><span>404</span></a></li>
                                    <li class="nav-item {!! (Request::is('500') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/500') }}"><i class="menu_icon ti-close"></i><span>500</span></a></li>
                                    <li class="nav-item {!! (Request::is('505') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/505') }}"><i class="menu_icon ti-na"></i><span>505</span></a></li>
                                    </ul>
                            </div>
                            <!--=========================*
                                      Other Pages
                            *===========================-->
                            <div class="col-group col-md-3">
                                <p class="category-heading">Other</p>
                                <ul class="submenu-item">
                                    <li class="nav-item {!! (Request::is('blank') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/blank') }}"><i class="menu_icon feather ft-file"></i><span>Blank Page</span></a></li>
                                    <li class="nav-item {!! (Request::is('invoice') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/invoice') }}"><i class="menu_icon feather ft-paperclip"></i><span>Invoice</span></a></li>
                                    <li class="nav-item {!! (Request::is('pricing') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/pricing') }}"><i class="menu_icon feather ft-dollar-sign"></i><span>Pricing</span></a></li>
                                    <li class="nav-item {!! (Request::is('profile') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/profile') }}"><i class="menu_icon feather ft-user-check"></i><span>Profile</span></a></li>
                                    <li class="nav-item {!! (Request::is('timeline') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/timeline') }}"><i class="menu_icon feather ft-clock"></i><span>Timeline</span></a></li>
                                </ul>
                            </div>
                            <!--=========================*
                                      Session
                            *===========================-->
                            <div class="col-group col-md-6">
                                <p class="category-heading">Session</p>
                                <div class="submenu-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li class="nav-item {!! (Request::is('login') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/login') }}"><i class="menu_icon feather ft-log-in"></i><span>Login</span></a></li>
                                                <li class="nav-item {!! (Request::is('register') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/register') }}"><i class="menu_icon ion-person-add"></i><span>Register</span></a></li>
                                                <li class="nav-item {!! (Request::is('lock') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/lock') }}"><i class="menu_icon ti-lock"></i><span>Lock Screen</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li class="nav-item {!! (Request::is('reset-password') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/reset-password') }}"><i class="menu_icon feather ft-lock"></i><span>Reset Password</span></a></li>
                                                <li class="nav-item {!! (Request::is('forgot-password') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/forgot-password') }}"><i class="menu_icon ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item {!! (Request::is('full-calendar') || Request::is('inbox') || Request::is('gallery') ? 'active':"") !!}">
                    <a href="#" class="nav-link"><i class="menu_icon feather ft-zap"></i><span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <!--=========================*
                                      Calendar
                            *===========================-->
                            <li class="nav-item {!! (Request::is('full-calendar') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/full-calendar') }}"><i class="menu_icon feather ft-calendar"></i><span>Calendar</span></a></li>
                            <!--=========================*
                                      Email
                            *===========================-->
                            <li class="nav-item {!! (Request::is('inbox') ? 'active':"") !!}"><a class="nav-link" href="{{ URL::to('horizontal-menu/inbox') }}"><i class="menu_icon feather ft-mail"></i><span>Email</span></a></li>
                            <!--=========================*
                                      Gallery
                            *===========================-->
                            <li {!! (Request::is('gallery') ? 'class="active nav-item"':"") !!}><a class="nav-link" href="{{ URL::to('horizontal-menu/gallery') }}"><i class="menu_icon feather ft-image"></i><span>Gallery</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
