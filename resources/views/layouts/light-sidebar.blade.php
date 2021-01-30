<div class="sidebar-menu {!! (Request::is('light-sidebar/*') ? 'light-sidebar' : '') !!}">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="{{ URL::to('light-sidebar/index') }}"><img src="{{asset('assets/images/logo-dark.svg')}}" alt="logo"></a>
        </div>
        <!--=========================*
                    End Logo
        *===========================-->
    </div>
    <!--=========================*
               Main Menu
    *===========================-->
    <div class="main-menu">
        <div class="menu-inner" id="sidebar_menu">
            <nav>
                <ul class="metismenu" id="menu">
                    <li {!! (Request::is('light-sidebar/index') || Request::is('light-sidebar/index2') || Request::is('light-sidebar/index3') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>dashboard</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/index') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/index') }}">Dashboard V1</a></li>
                            <li {!! (Request::is('light-sidebar/index2') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/index2') }}">Dashboard V2</a></li>
                            <li {!! (Request::is('light-sidebar/index3') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/index3') }}">Dashboard V3</a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              UI Features
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/alert') || Request::is('light-sidebar/accordion') || Request::is('light-sidebar/buttons')
                        || Request::is('light-sidebar/badges') || Request::is('light-sidebar/cards') || Request::is('light-sidebar/carousel')
                        || Request::is('light-sidebar/dropdown') || Request::is('light-sidebar/list-group') || Request::is('light-sidebar/modals')
                        || Request::is('light-sidebar/pagination') || Request::is('light-sidebar/popover') || Request::is('light-sidebar/progressbar')
                        || Request::is('light-sidebar/tabs') || Request::is('light-sidebar/typography') || Request::is('light-sidebar/grid') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>UI Features</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/alert') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/alert') }}"><i class="ti-alert"></i><span>Alert</span></a></li>
                            <li {!! (Request::is('light-sidebar/accordion') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/accordion') }}"><i class="ti-layout-accordion-separated"></i><span>Accordion</span></a></li>
                            <li {!! (Request::is('light-sidebar/buttons') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/buttons') }}"><i class="icon-focus"></i><span>Buttons</span></a></li>
                            <li {!! (Request::is('light-sidebar/badges') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/badges') }}"><i class="icon-ribbon"></i><span>Badges</span></a></li>
                            <li {!! (Request::is('light-sidebar/cards') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/cards') }}"><i class="ti-id-badge"></i><span>Cards</span></a></li>
                            <li {!! (Request::is('light-sidebar/carousel') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/carousel') }}"><i class="ti-layout-slider"></i><span>Carousels</span></a></li>
                            <li {!! (Request::is('light-sidebar/dropdown') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/dropdown') }}"><i class="icon-layers"></i><span>Dropdown</span></a></li>
                            <li {!! (Request::is('light-sidebar/list-group') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/list-group') }}"><i class="ti-list"></i><span>List Group</span></a></li>
                            <li {!! (Request::is('light-sidebar/modals') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/modals') }}"><i class="ti-layers-alt"></i><span>Modals</span></a></li>
                            <li {!! (Request::is('light-sidebar/pagination') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/pagination') }}"><i class="ion-android-more-horizontal"></i><span>Pagination</span></a></li>
                            <li {!! (Request::is('light-sidebar/popover') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/popover') }}"><i class="ion-ios-photos"></i><span>Popover</span></a></li>
                            <li {!! (Request::is('light-sidebar/progressbar') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/progressbar') }}"><i class="ion-ios-settings-strong"></i><span>Progressbar</span></a></li>
                            <li {!! (Request::is('light-sidebar/tabs') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/tabs') }}"><i class="ti-layout-tab"></i><span>Tabs</span></a></li>
                            <li {!! (Request::is('light-sidebar/typography') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/typography') }}"><i class="ti-smallcap"></i><span>Typography</span></a></li>
                            <li {!! (Request::is('light-sidebar/grid') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/grid') }}"><i class="ti-layout-grid4"></i><span>Grid</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Advance Kit
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/toastr') || Request::is('light-sidebar/sweet-alert') || Request::is('light-sidebar/cropper')
                        || Request::is('light-sidebar/loaders') || Request::is('light-sidebar/app-tour') || Request::is('light-sidebar/ladda-button') || Request::is('light-sidebar/dropzone') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-briefcase"></i>
                            <span>Advance Kit</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/toastr') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/toastr') }}"><i class="ti-layout-cta-left"></i> <span>Toastr</span></a></li>
                            <li {!! (Request::is('light-sidebar/sweet-alert') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/sweet-alert') }}"><i class="ti-layout-media-overlay-alt-2"></i> <span>Sweet Alert</span></a></li>
                            <li {!! (Request::is('light-sidebar/cropper') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/cropper') }}"><i class="ion-crop"></i> <span>Image Cropper</span></a></li>
                            <li {!! (Request::is('light-sidebar/loaders') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/loaders') }}"><i class="ion-load-a"></i> <span>Css Loaders</span></a></li>
                            <li {!! (Request::is('light-sidebar/app-tour') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/app-tour') }}"><i class="ti-flag-alt"></i> <span>App Tour</span></a></li>
                            <li {!! (Request::is('light-sidebar/ladda-button') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/ladda-button') }}"><i class="ion-load-b"></i> <span>Ladda Button</span></a></li>
                            <li {!! (Request::is('light-sidebar/dropzone') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/dropzone') }}"><i class="ti-layout-placeholder"></i> <span>Dropzone</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Icons
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/font-awesome') || Request::is('light-sidebar/themify') || Request::is('light-sidebar/ionicons')
                        || Request::is('light-sidebar/et-line') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-award"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/font-awesome') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/font-awesome') }}"><i class="ti-flag-alt"></i> <span>Font Awesome</span></a></li>
                            <li {!! (Request::is('light-sidebar/themify') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/themify') }}"><i class="ti-themify-favicon"></i><span>Themify</span></a></li>
                            <li {!! (Request::is('light-sidebar/ionicons') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/ionicons') }}"><i class="ion-ionic"></i><span>Ionicons V2</span></a></li>
                            <li {!! (Request::is('light-sidebar/et-line') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/et-line') }}"><i class="icon-basket"></i><span>ET Line Icons</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                                  Maps
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/google-maps') || Request::is('light-sidebar/am-maps') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-map-pin"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/google-maps') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/google-maps') }}"><i class="icon-map"></i><span>Google Maps</span></a></li>
                            <li {!! (Request::is('light-sidebar/am-maps') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/am-maps') }}"><i class="icon-map-pin"></i><span>AM Chart Maps</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Tables
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/basic-table') || Request::is('light-sidebar/datatable') || Request::is('light-sidebar/js-grid') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-credit-card"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/basic-table') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/basic-table') }}"><i class="ion-ios-grid-view"></i><span>Basic Tables</span></a></li>
                            <li {!! (Request::is('light-sidebar/datatable') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/datatable') }}"><i class="ti-layout-slider-alt"></i><span>Datatable</span></a></li>
                            <li {!! (Request::is('light-sidebar/js-grid') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/js-grid') }}"><i class="ti-view-list-alt"></i><span>Js Grid Table</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                                 Forms
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/form-basic') || Request::is('light-sidebar/form-layouts') || Request::is('light-sidebar/form-groups')
                        || Request::is('light-sidebar/form-validation') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-clipboard"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/form-basic') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/form-basic') }}"><i class="ion-edit"></i><span>Basic ELements</span></a></li>
                            <li {!! (Request::is('light-sidebar/form-layouts') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/form-layouts') }}"><i class="ti-layout-grid2-thumb"></i><span>Form Layouts</span></a></li>
                            <li {!! (Request::is('light-sidebar/form-groups') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/form-groups') }}"><i class="ion-ios-paper"></i><span>Input Groups</span></a></li>
                            <li {!! (Request::is('light-sidebar/form-validation') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/form-validation') }}"><i class="ion-android-cancel"></i><span>Form Validation</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Editors
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/text-editor') || Request::is('light-sidebar/code-editor') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-edit"></i>
                            <span>Editors</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/text-editor') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/text-editor') }}"><i class="ti-uppercase"></i><span>Text Editor</span></a></li>
                            <li {!! (Request::is('light-sidebar/code-editor') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/code-editor') }}"><i class="ion-code"></i><span>Code Editor</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Calendar
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/full-calendar') ? 'class="active"':"") !!}>
                        <a href="{{ URL::to('light-sidebar/full-calendar') }}">
                            <i class="feather ft-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <!--=========================*
                              Charts
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/chart-js') || Request::is('light-sidebar/morris-charts') || Request::is('light-sidebar/c3-chart')
                        || Request::is('light-sidebar/chartist') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-pie-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/chart-js') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/chart-js') }}"><i class="feather ft-bar-chart"></i><span>Chart Js</span></a></li>
                            <li {!! (Request::is('light-sidebar/morris-charts') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/morris-charts') }}"><i class="feather ft-bar-chart-2"></i><span>Morris Chart Js</span></a></li>
                            <li {!! (Request::is('light-sidebar/c3-chart') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/c3-chart') }}"><i class="feather ft-bar-chart-line"></i><span>C3 Chart Js</span></a></li>
                            <li {!! (Request::is('light-sidebar/chartist') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/chartist') }}"><i class="feather ft-bar-chart-line-"></i><span>Chartist Js</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Email
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/inbox') || Request::is('light-sidebar/compose') || Request::is('light-sidebar/read-mail') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-mail"></i>
                            <span>Email</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/inbox') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/inbox') }}"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
                            <li {!! (Request::is('light-sidebar/compose') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/compose') }}"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
                            <li {!! (Request::is('light-sidebar/read-mail') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/read-mail') }}"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Gallery
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/gallery') ? 'class="active"':"") !!}>
                        <a href="{{ URL::to('light-sidebar/gallery') }}">
                            <i class="feather ft-image"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <!--=========================*
                              Session
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/login') || Request::is('light-sidebar/register') || Request::is('light-sidebar/lock')
                        || Request::is('light-sidebar/reset-password') || Request::is('light-sidebar/forgot-password') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Session</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/login') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('light-sidebar/login') }}">
                                    <i class="feather ft-log-in"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li {!! (Request::is('light-sidebar/register') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/register') }}"><i class="ion-person-add"></i><span>Register</span></a></li>
                            <li {!! (Request::is('light-sidebar/lock') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/lock') }}"><i class="ti-lock"></i><span>Lock Screen</span></a></li>
                            <li {!! (Request::is('light-sidebar/reset-password') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('light-sidebar/reset-password') }}">
                                    <i class="feather ft-lock"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                            <li {!! (Request::is('light-sidebar/forgot-password') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/forgot-password') }}"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Error Pages
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/404') || Request::is('light-sidebar/500') || Request::is('light-sidebar/505') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-anchor"></i>
                            <span>Error Pages</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/404') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/404') }}"><i class="ti-unlink"></i><span>404</span></a></li>
                            <li {!! (Request::is('light-sidebar/500') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/500') }}"><i class="ti-close"></i><span>500</span></a></li>
                            <li {!! (Request::is('light-sidebar/505') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/505') }}"><i class="ti-na"></i><span>505</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Other Pages
                    *===========================-->
                    <li {!! (Request::is('light-sidebar/blank') || Request::is('light-sidebar/invoice') || Request::is('light-sidebar/pricing')
                        || Request::is('light-sidebar/profile') || Request::is('light-sidebar/timeline') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-file-plus"></i>
                            <span>Other Pages</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('light-sidebar/blank') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('light-sidebar/blank') }}">
                                    <i class="feather ft-file"></i>
                                    <span>Blank Page</span>
                                </a>
                            </li>
                            <li {!! (Request::is('light-sidebar/invoice') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('light-sidebar/invoice') }}">
                                    <i class="feather ft-paperclip"></i>
                                    <span>Invoice</span>
                                </a>
                            </li>
                            <li {!! (Request::is('light-sidebar/pricing') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('light-sidebar/pricing') }}">
                                    <i class="feather ft-dollar-sign"></i>
                                    <span>Pricing</span>
                                </a>
                            </li>
                            <li {!! (Request::is('light-sidebar/profile') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('light-sidebar/profile') }}"><i class="feather ft-user-check"></i><span>Profile</span></a>
                            </li>
                            <li {!! (Request::is('light-sidebar/timeline') ? 'class="active"':"") !!}><a href="{{ URL::to('light-sidebar/timeline') }}"><i class="feather ft-clock"></i><span>Timeline</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--=========================*
              End Main Menu
    *===========================-->
</div>
