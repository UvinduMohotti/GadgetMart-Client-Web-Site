<!doctype html>
<html lang="zxx">
<head>
    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RealByte - Bootstrap 4 + Laravel Admin Dashboard Template">

    <!--=========================*
             Page Title
   *===========================-->
    <title>Register | Gadget Mart Admin </title>

    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!--=========================*
            Bootstrap Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--=========================*
              Custom CSS
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">

    <!--=========================*
               Owl CSS
    *===========================-->
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">

    <!--=========================*
            Font Awesome
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!--=========================*
             Themify Icons
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">

    <!--=========================*
               Ionicons
    *===========================-->
    <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet"/>

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="{{asset('assets/css/et-line.css')}}" rel="stylesheet"/>

    <!--=========================*
              Feather Icons
    *===========================-->
    <link href="{{asset('assets/css/feather.css')}}" rel="stylesheet"/>

    <!--=========================*
              Modernizer
    *===========================-->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>

    <!--=========================*
               Metis Menu
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">

    <!--=========================*
               Slick Menu
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">


    <!--=========================*
              Page Title
    *===========================-->
    <title>Register | RealByte - Bootstrap 4 + Laravel Admin Dashboard Template</title>


    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Overpass USE: font-family: 'Overpass', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Overpass:100,200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="register-bg">
                <div class="login-overlay"></div>
                <div class="login-left">
                    <img src="{{asset('assets/images/gadgetmart.png')}}" alt="Logo">
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus elit.</p>--}}
{{--                    <a href="javascript:void(0);" class="btn btn-primary">Learn More</a>--}}
                </div><!--login-left-->
            </div><!--login-bg-->

            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">{{ __('Name') }}</label>
                            <input type="text" id="exampleInputName1" @error('name') class="is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <i class="ti-user"></i>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                            <input type="email" id="exampleInputEmail1" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <i class="ti-email"></i>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <i class="ti-lock"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">{{ __('Confirm Password') }}</label>
                            <input type="password" id="exampleInputPassword2" name="password_confirmation" required autocomplete="new-password">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" class="btn btn-primary" type="submit">{{ __('Register') }}<i class="ti-arrow-right"></i></button>
                            {{--                            <div class="login-other row mt-4">--}}
                            {{--                                <div class="col-6">--}}
                            {{--                                    <a class="fb-login" href="#"><span class="login_txt">Sign up with</span>  <i class="fa fa-facebook"></i></a>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-6">--}}
                            {{--                                    <a class="google-login" href="#"><span class="login_txt">Sign up with</span>  <i class="fa fa-google"></i></a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Do you have an account? <a href="{{ URL::to('/admin/login') }}">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div><!--login-form-->

        </div><!--row-->
    </div><!--container-fluid-->
</div><!--wrapper-->


<!--=========================*
            Scripts
*===========================-->

<!-- Jquery Js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- bootstrap 4 js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel Js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Metis Menu Js -->
<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
<!-- SlimScroll Js -->
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
<!-- Slick Nav -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- Slick Nav -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<!-- Fancy Box Js -->
<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>

</body>
</html>
