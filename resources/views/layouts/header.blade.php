<div class="header-area {!! (Request::is('light-sidebar/*') ? 'light-header' : '') !!}">
    <div class="row align-items-center">
        <div class="mobile-logo d_none_lg">
            <a href="{{ URL::to('index') }}"><img src="{{asset('assets/images/gadgetmart.png')}}" alt="logo"></a>
        </div>

        <!--==================================*
                 Navigation and Search
        *====================================-->
        <div class="col-md-6 d_none_sm d-flex align-items-center">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
{{--            <div class="search-box pull-left">--}}
{{--                <form action="#">--}}
{{--                    <i class="ti-search"></i>--}}
{{--                    <input type="text" name="search" placeholder="Search..." required>--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>
        <!--==================================*
                 End Navigation and Search
        *====================================-->

        <!--==================================*
                 Notification Section
        *====================================-->
        <div class="col-md-6 col-sm-12">
            <ul id="notification_section" class="notification-area pull-right">
                <li>
                    <span class="nav-btn pull-left d_none_lg">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </li>
                <li id="full-view" class="d_none_sm"><i class="feather ft-maximize"></i></li>
                <li id="full-view-exit" class="d_none_sm"><i class="feather ft-minimize"></i></li>
{{--                <li class="dropdown">--}}
{{--                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown"><span></span></i>--}}
{{--                    <div class="dropdown-menu bell-notify-box notify-box">--}}
{{--                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>--}}
{{--                        <div class="nofity-list">--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb"><i class="ti-map-alt bg_blue"></i></div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>You added your Location</h3>--}}
{{--                                    <span>Just Now</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb"><i class="ti-bolt-alt bg_warning"></i></div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Your Subscription Expired</h3>--}}
{{--                                    <span>30 Seconds ago</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb"><i class="ti-heart bg_danger"></i></div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Some special like you</h3>--}}
{{--                                    <span>Just Now</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb"><i class="ti-comments bg_info"></i></div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>New Commetns On Post</h3>--}}
{{--                                    <span>30 Seconds ago</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb"><i class="ti-settings bg_secondary"></i></div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>You changed your Settings</h3>--}}
{{--                                    <span>Just Now</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb"><i class="ti-image bg_success"></i></div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Image Uploaded Successfully</h3>--}}
{{--                                    <span>Just Now</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="dropdown">--}}
{{--                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span></span></i>--}}
{{--                    <div class="dropdown-menu notify-box nt-enveloper-box">--}}
{{--                        <span class="notify-title">You have 3 new Messages<a href="#">view all</a></span>--}}
{{--                        <div class="nofity-list">--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/author/author-img1.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Jhon Doe</h3>--}}
{{--                                    <span class="msg">Hello are you there?</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/author/author-img2.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>David Boos</h3>--}}
{{--                                    <span class="msg">Waiting for your Response...</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/user.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Jason Roy</h3>--}}
{{--                                    <span class="msg">Hi there, Hope you are well</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/author/author-img4.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Malika Roy</h3>--}}
{{--                                    <span class="msg">Your Product Dispatched form Warehouse...</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/author/author-img2.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Raven Jhon</h3>--}}
{{--                                    <span class="msg">Please recieve your parcel from our store</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/author/author-img1.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Angela Yo</h3>--}}
{{--                                    <span class="msg">You recieved a new message...</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="notify-item">--}}
{{--                                <div class="notify-thumb">--}}
{{--                                    <img src="{{asset('assets/images/user.jpg')}}" alt="image">--}}
{{--                                </div>--}}
{{--                                <div class="notify-text">--}}
{{--                                    <h3>Rebecca Jhon</h3>--}}
{{--                                    <span class="msg">Hey I am waiting for you...</span>--}}
{{--                                    <span>3:15 PM</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="settings-btn d_none_sm">--}}
{{--                    <i class="ti-more"></i>--}}
{{--                </li>--}}
                <li class="user-dropdown">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d_none_sm">{{Auth::user()->name}} <i class="feather ft-chevron-down"></i></span>
                            <img src="https://lh3.googleusercontent.com/proxy/uD1cFm6q3lgNXALMKaDUHRIXxYDjArkS1naOLpOa2uin-l3tZKaAdajvvyuYIYpLHNGd1FEMsRBx-hGYVkD6xOnbM2f5BHvvIfw00ds2eMynBwT2vVIwEQ" alt="" class="img-fluid">
                        </button>
                        <div class="dropdown-menu dropdown_user" aria-labelledby="dropdownMenuButton" >
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="user_img mb-3">
                                    <img src="https://lh3.googleusercontent.com/proxy/uD1cFm6q3lgNXALMKaDUHRIXxYDjArkS1naOLpOa2uin-l3tZKaAdajvvyuYIYpLHNGd1FEMsRBx-hGYVkD6xOnbM2f5BHvvIfw00ds2eMynBwT2vVIwEQ" alt="" class="img-fluid">
                                </div>
                                <div class="user_bio text-center">
                                    <p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
                                    <p class="email text-muted mb-3">{{Auth::user()->email}}</p>
                                </div>
                            </div>
{{--                            <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>--}}
{{--                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Settings</a>--}}
                            <span role="separator" class="divider"></span>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="ti-power-off"></i>Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--==================================*
                 End Notification Section
        *====================================-->

    </div>
</div>
