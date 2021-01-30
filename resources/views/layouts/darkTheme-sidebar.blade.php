<div class="sidebar-menu">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="{{ URL::to('dark/index') }}"><img src="{{asset('assets/images/logo.svg')}}" alt="logo"></a>
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
                    <li {!! (Request::is('dark/index') || Request::is('dark/index2') || Request::is('dark/index3') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>dashboard</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/index') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/index') }}">Dashboard V1</a></li>
                            <li {!! (Request::is('dark/index2') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/index2') }}">Dashboard V2</a></li>
                            <li {!! (Request::is('dark/index3') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/index3') }}">Dashboard V3</a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              UI Features
                    *===========================-->
                    <li {!! (Request::is('dark/alert') || Request::is('dark/accordion') || Request::is('dark/buttons')
                        || Request::is('dark/badges') || Request::is('dark/cards') || Request::is('dark/carousel')
                        || Request::is('dark/dropdown') || Request::is('dark/list-group') || Request::is('dark/modals')
                        || Request::is('dark/pagination') || Request::is('dark/popover') || Request::is('dark/progressbar')
                        || Request::is('dark/tabs') || Request::is('dark/typography') || Request::is('dark/grid') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-gitlab"></i>
                            <span>UI Features</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/alert') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/alert') }}"><i class="ti-alert"></i><span>Alert</span></a></li>
                            <li {!! (Request::is('dark/accordion') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/accordion') }}"><i class="ti-layout-accordion-separated"></i><span>Accordion</span></a></li>
                            <li {!! (Request::is('dark/buttons') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/buttons') }}"><i class="icon-focus"></i><span>Buttons</span></a></li>
                            <li {!! (Request::is('dark/badges') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/badges') }}"><i class="icon-ribbon"></i><span>Badges</span></a></li>
                            <li {!! (Request::is('dark/cards') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/cards') }}"><i class="ti-id-badge"></i><span>Cards</span></a></li>
                            <li {!! (Request::is('dark/carousel') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/carousel') }}"><i class="ti-layout-slider"></i><span>Carousels</span></a></li>
                            <li {!! (Request::is('dark/dropdown') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/dropdown') }}"><i class="icon-layers"></i><span>Dropdown</span></a></li>
                            <li {!! (Request::is('dark/list-group') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/list-group') }}"><i class="ti-list"></i><span>List Group</span></a></li>
                            <li {!! (Request::is('dark/modals') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/modals') }}"><i class="ti-layers-alt"></i><span>Modals</span></a></li>
                            <li {!! (Request::is('dark/pagination') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/pagination') }}"><i class="ion-android-more-horizontal"></i><span>Pagination</span></a></li>
                            <li {!! (Request::is('dark/popover') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/popover') }}"><i class="ion-ios-photos"></i><span>Popover</span></a></li>
                            <li {!! (Request::is('dark/progressbar') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/progressbar') }}"><i class="ion-ios-settings-strong"></i><span>Progressbar</span></a></li>
                            <li {!! (Request::is('dark/tabs') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/tabs') }}"><i class="ti-layout-tab"></i><span>Tabs</span></a></li>
                            <li {!! (Request::is('dark/typography') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/typography') }}"><i class="ti-smallcap"></i><span>Typography</span></a></li>
                            <li {!! (Request::is('dark/grid') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/grid') }}"><i class="ti-layout-grid4"></i><span>Grid</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Advance Kit
                    *===========================-->
                    <li {!! (Request::is('dark/toastr') || Request::is('dark/sweet-alert') || Request::is('dark/cropper')
                        || Request::is('dark/loaders') || Request::is('dark/app-tour') || Request::is('dark/ladda-button') || Request::is('dark/dropzone') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-briefcase"></i>
                            <span>Advance Kit</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/toastr') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/toastr') }}"><i class="ti-layout-cta-left"></i> <span>Toastr</span></a></li>
                            <li {!! (Request::is('dark/sweet-alert') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/sweet-alert') }}"><i class="ti-layout-media-overlay-alt-2"></i> <span>Sweet Alert</span></a></li>
                            <li {!! (Request::is('dark/cropper') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/cropper') }}"><i class="ion-crop"></i> <span>Image Cropper</span></a></li>
                            <li {!! (Request::is('dark/loaders') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/loaders') }}"><i class="ion-load-a"></i> <span>Css Loaders</span></a></li>
                            <li {!! (Request::is('dark/app-tour') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/app-tour') }}"><i class="ti-flag-alt"></i> <span>App Tour</span></a></li>
                            <li {!! (Request::is('dark/ladda-button') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/ladda-button') }}"><i class="ion-load-b"></i> <span>Ladda Button</span></a></li>
                            <li {!! (Request::is('dark/dropzone') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/dropzone') }}"><i class="ti-layout-placeholder"></i> <span>Dropzone</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Icons
                    *===========================-->
                    <li {!! (Request::is('dark/font-awesome') || Request::is('dark/themify') || Request::is('dark/ionicons')
                        || Request::is('dark/et-line') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-award"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/font-awesome') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/font-awesome') }}"><i class="ti-flag-alt"></i> <span>Font Awesome</span></a></li>
                            <li {!! (Request::is('dark/themify') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/themify') }}"><i class="ti-themify-favicon"></i><span>Themify</span></a></li>
                            <li {!! (Request::is('dark/ionicons') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/ionicons') }}"><i class="ion-ionic"></i><span>Ionicons V2</span></a></li>
                            <li {!! (Request::is('dark/et-line') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/et-line') }}"><i class="icon-basket"></i><span>ET Line Icons</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                                  Maps
                    *===========================-->
                    <li {!! (Request::is('dark/google-maps') || Request::is('dark/am-maps') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-map-pin"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/google-maps') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/google-maps') }}"><i class="icon-map"></i><span>Google Maps</span></a></li>
                            <li {!! (Request::is('dark/am-maps') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/am-maps') }}"><i class="icon-map-pin"></i><span>AM Chart Maps</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Tables
                    *===========================-->
                    <li {!! (Request::is('dark/basic-table') || Request::is('dark/datatable') || Request::is('dark/js-grid') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-credit-card"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/basic-table') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/basic-table') }}"><i class="ion-ios-grid-view"></i><span>Basic Tables</span></a></li>
                            <li {!! (Request::is('dark/datatable') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/datatable') }}"><i class="ti-layout-slider-alt"></i><span>Datatable</span></a></li>
                            <li {!! (Request::is('dark/js-grid') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/js-grid') }}"><i class="ti-view-list-alt"></i><span>Js Grid Table</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                                 Forms
                    *===========================-->
                    <li {!! (Request::is('dark/form-basic') || Request::is('dark/form-layouts') || Request::is('dark/form-groups')
                        || Request::is('dark/form-validation') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-clipboard"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/form-basic') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/form-basic') }}"><i class="ion-edit"></i><span>Basic ELements</span></a></li>
                            <li {!! (Request::is('dark/form-layouts') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/form-layouts') }}"><i class="ti-layout-grid2-thumb"></i><span>Form Layouts</span></a></li>
                            <li {!! (Request::is('dark/form-groups') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/form-groups') }}"><i class="ion-ios-paper"></i><span>Input Groups</span></a></li>
                            <li {!! (Request::is('dark/form-validation') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/form-validation') }}"><i class="ion-android-cancel"></i><span>Form Validation</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Editors
                    *===========================-->
                    <li {!! (Request::is('dark/text-editor') || Request::is('dark/code-editor') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-edit"></i>
                            <span>Editors</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/text-editor') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/text-editor') }}"><i class="ti-uppercase"></i><span>Text Editor</span></a></li>
                            <li {!! (Request::is('dark/code-editor') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/code-editor') }}"><i class="ion-code"></i><span>Code Editor</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Calendar
                    *===========================-->
                    <li {!! (Request::is('dark/full-calendar') ? 'class="active"':"") !!}>
                        <a href="{{ URL::to('dark/full-calendar') }}">
                            <i class="feather ft-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <!--=========================*
                              Charts
                    *===========================-->
                    <li {!! (Request::is('dark/chart-js') || Request::is('dark/morris-charts') || Request::is('dark/c3-chart')
                        || Request::is('dark/chartist') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-pie-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/chart-js') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/chart-js') }}"><i class="feather ft-bar-chart"></i><span>Chart Js</span></a></li>
                            <li {!! (Request::is('dark/morris-charts') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/morris-charts') }}"><i class="feather ft-bar-chart-2"></i><span>Morris Chart Js</span></a></li>
                            <li {!! (Request::is('dark/c3-chart') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/c3-chart') }}"><i class="feather ft-bar-chart-line"></i><span>C3 Chart Js</span></a></li>
                            <li {!! (Request::is('dark/chartist') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/chartist') }}"><i class="feather ft-bar-chart-line-"></i><span>Chartist Js</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Email
                    *===========================-->
                    <li {!! (Request::is('dark/inbox') || Request::is('dark/compose') || Request::is('dark/read-mail') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-mail"></i>
                            <span>Email</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/inbox') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/inbox') }}"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
                            <li {!! (Request::is('dark/compose') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/compose') }}"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
                            <li {!! (Request::is('dark/read-mail') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/read-mail') }}"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Gallery
                    *===========================-->
                    <li {!! (Request::is('dark/gallery') ? 'class="active"':"") !!}>
                        <a href="{{ URL::to('dark/gallery') }}">
                            <i class="feather ft-image"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                    <!--=========================*
                              Session
                    *===========================-->
                    <li {!! (Request::is('dark/login') || Request::is('dark/register') || Request::is('dark/lock')
                        || Request::is('dark/reset-password') || Request::is('dark/forgot-password') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-users"></i>
                            <span>Session</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/login') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('dark/login') }}">
                                    <i class="feather ft-log-in"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                            <li {!! (Request::is('dark/register') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/register') }}"><i class="ion-person-add"></i><span>Register</span></a></li>
                            <li {!! (Request::is('dark/lock') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/lock') }}"><i class="ti-lock"></i><span>Lock Screen</span></a></li>
                            <li {!! (Request::is('dark/reset-password') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('dark/reset-password') }}">
                                    <i class="feather ft-lock"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                            <li {!! (Request::is('dark/forgot-password') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/forgot-password') }}"><i class="ti-bookmark-alt"></i><span>Forgot Password</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Error Pages
                    *===========================-->
                    <li {!! (Request::is('dark/404') || Request::is('dark/500') || Request::is('dark/505') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-anchor"></i>
                            <span>Error Pages</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/404') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/404') }}"><i class="ti-unlink"></i><span>404</span></a></li>
                            <li {!! (Request::is('dark/500') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/500') }}"><i class="ti-close"></i><span>500</span></a></li>
                            <li {!! (Request::is('dark/505') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/505') }}"><i class="ti-na"></i><span>505</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Other Pages
                    *===========================-->
                    <li {!! (Request::is('dark/blank') || Request::is('dark/invoice') || Request::is('dark/pricing')
                        || Request::is('dark/profile') || Request::is('dark/timeline') ? 'class="active"':"") !!}>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="feather ft-file-plus"></i>
                            <span>Other Pages</span>
                        </a>
                        <ul class="collapse">
                            <li {!! (Request::is('dark/blank') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('dark/blank') }}">
                                    <i class="feather ft-file"></i>
                                    <span>Blank Page</span>
                                </a>
                            </li>
                            <li {!! (Request::is('dark/invoice') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('dark/invoice') }}">
                                    <i class="feather ft-paperclip"></i>
                                    <span>Invoice</span>
                                </a>
                            </li>
                            <li {!! (Request::is('dark/pricing') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('dark/pricing') }}">
                                    <i class="feather ft-dollar-sign"></i>
                                    <span>Pricing</span>
                                </a>
                            </li>
                            <li {!! (Request::is('dark/profile') ? 'class="active"':"") !!}>
                                <a href="{{ URL::to('dark/profile') }}"><i class="feather ft-user-check"></i><span>Profile</span></a>
                            </li>
                            <li {!! (Request::is('dark/timeline') ? 'class="active"':"") !!}><a href="{{ URL::to('dark/timeline') }}"><i class="feather ft-clock"></i><span>Timeline</span></a></li>
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
