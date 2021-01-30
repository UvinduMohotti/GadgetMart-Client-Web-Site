<div class="sidebar-menu">
    <div class="sidebar-header">
        <!--=========================*
                      Logo
        *===========================-->
        <div class="logo">
            <a href="{{ URL::to('index') }}"><img src="{{asset('assets/images/gadgetmart.png')}}" alt="logo"></a>
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
                    <li {!! (Request::is('index') || Request::is('index2') || Request::is('index3') ? 'class="active"':"") !!}>
                        <a href="{{ route('home') }}" aria-expanded="true">
                            <i class="feather ft-home"></i>
                            <span>Supplier</span>
                        </a>
{{--                        <ul class="collapse">--}}
{{--                            <li {!! (Request::is('index') ? 'class="active"':"") !!}><a href="{{ URL::to('index') }}">Dashboard V1</a></li>--}}
{{--                            <li {!! (Request::is('index2') ? 'class="active"':"") !!}><a href="{{ URL::to('index2') }}">Dashboard V2</a></li>--}}
{{--                            <li {!! (Request::is('index3') ? 'class="active"':"") !!}><a href="{{ URL::to('index3') }}">Dashboard V3</a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <!--=========================*
                              Other Pages
                    *===========================-->
                    <li {!! (Request::is('blank') || Request::is('invoice') || Request::is('pricing')
                        || Request::is('profile') || Request::is('timeline') ? 'class="active"':"") !!}>
                        <a href="{{ route('retailer') }}" aria-expanded="true">
                            <i class="feather ft-file-plus"></i>
                            <span>Retailer Report</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--=========================*
              End Main Menu
    *===========================-->
</div>
