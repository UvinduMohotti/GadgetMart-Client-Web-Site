<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>

        @include('layouts.head')

        @yield('css')

    </head>

    <body {!! (Request::is('dark/*') ? 'class="darker"':"") !!}>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--=========================*
             Page Container
    *===========================-->
    <div class="{!! (Request::is('horizontal-menu/*') ? 'page_content' : 'page-container') !!}" >

        @if(Request::is('horizontal-menu/*'))
            <!--=========================*
                      Navigation
            *===========================-->
            @include('layouts.header-horizontal')
        @endif

        @if(!Request::is('horizontal-menu/*'))

            <!--=========================*
                     Side Bar Menu
            *===========================-->
            @if(Request::is('light-sidebar/*'))
                @include('layouts.light-sidebar')
            @elseif(Request::is('dark/*'))
                @include('layouts.darkTheme-sidebar')
            @else
                @include('layouts.sidebar')
            @endif
            <!--=========================*
                   End Side Bar Menu
            *===========================-->

        @endif

        <!--==================================*
                   Main Content Section
        *====================================-->
        <div class="main-content {!! (Request::is('horizontal-menu/*') ? '' : 'page-content') !!} ">

            @if(!Request::is('horizontal-menu/*'))
                <!--==================================*
                           Header Section
                *====================================-->
                @include('layouts.header')
                <!--==================================*
                           End Header Section
                *====================================-->
            @endif
            
            @if(Request::is('horizontal-menu/*'))
                <div class="container">
            @endif
            <!--==================================*
                       Main Section
            *====================================-->
            <div class="main-content-inner">
                @yield('main-content')
            </div>
            <!--==================================*
                       End Main Section
            *====================================-->
            @if(Request::is('horizontal-menu/*'))
                </div>
            @endif
        </div>
        <!--=================================*
               End Main Content Section
        *===================================-->

        <!--=================================*
                      Footer Section
        *===================================-->
        @include('layouts.footer')
        <!--=================================*
                    End Footer Section
        *===================================-->

    </div>
    <!--=========================*
            End Page Container
    *===========================-->

    <!--=========================*
          Offset Sidebar Menu
    *===========================-->
    @include('layouts.offset-menu')
    <!--================================*
             End Offset Sidebar Menu
    *==================================-->




    <!--=========================*
                Scripts
    *===========================-->

    @include('layouts.scripts')

    @yield('js')

    </body>
</html>
