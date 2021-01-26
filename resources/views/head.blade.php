<head>
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/icons/favicon.ico')}}">



    <script>
        /**
         * Base Url
         * @type {string}
         */

        let baseurl = "http://localhost:8000/";
        let baseurlAPI = "http://localhost:8086/";


        WebFontConfig = {
            google: {families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']}
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!--=========================*
              All CSS
    *===========================-->
    <link rel="stylesheet" href="{{ URL::asset('css/all.css')}}">

    <!--=========================*
               Toastr Css
    *===========================-->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/toastr/css/toastr.min.css')}}">


    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">



    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>
