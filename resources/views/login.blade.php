<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@include('head')

<body>
<div class="page-wrapper">
    @include('sidebar-header')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" onclick="window.location='{{ url("/") }}'"><i
                                class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page"
                        onclick="window.location='{{ url("/login") }}'">Login
                    </li>
                </ol>
            </div>
        </nav>

        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Login</h2>
                        <p>If you have an account with us, please log in.</p>
                    </div><!-- End .heading -->

                    <form action="#">
                        <input type="text" id="username" class="form-control" placeholder="Username" required>
                        <input type="password" id="password" class="form-control" placeholder="Password" required>

                        <div class="form-footer">
                            <button type="button" onclick="loginOnClick()" class="btn btn-primary">LOGIN</button>
                            {{--									<a href="#" class="forget-pass"> Forgot your password?</a>--}}
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Create An Account</h2>
                        <p>By creating an account with our store, you will be able to move through the checkout process
                            faster, store multiple shipping addresses, view and track your orders in your account and
                            more.</p>
                    </div><!-- End .heading -->

                    <form>
                        <input id="firstname" type="text" class="form-control" placeholder="First Name" required>
                        <input id="lastname" type="text" class="form-control" placeholder="Last Name" required>
                        <input id="address" type="text" class="form-control" placeholder="Address" required>
                        <input id="mobilenumber" type="text" class="form-control" placeholder="Mobile Number" required>

                        <h2 class="title mb-2">Login information</h2>
                        <input id="regusername" type="text" class="form-control" placeholder="Username" required>
                        <input id="regpassword" type="password" class="form-control" placeholder="Password" required>
                        <input id="cpassword" type="password" class="form-control" placeholder="Confirm Password"
                               required>

                        {{--                        <div class="custom-control custom-checkbox">--}}
                        {{--                            <input type="checkbox" class="custom-control-input" id="newsletter-signup">--}}
                        {{--                            <label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>--}}
                        {{--                        </div><!-- End .custom-checkbox -->--}}

                        <div class="form-footer">
                            <button type="button" onclick="onClickCreateAccount()" class="btn btn-primary">Create
                                Account
                            </button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main><!-- End .main -->

    @include('footer')
</div><!-- End .page-wrapper -->

@include('other-content')
</body>
<script>
    let result = null;

    function loginOnClick() {

        {{--let formData = new FormData();--}}
        {{--formData.append("_token", "{{ csrf_token() }}");--}}
        {{--formData.append("userName", $('#username').val().trim());--}}
        {{--formData.append("password", $('#password').val().trim());--}}
        let loginob = {"userName": $('#username').val().trim(), "password": $('#password').val().trim()};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: baseurlAPI + "login",
            method: "POST",
            dataType: 'json',
            contentType: 'application/json',
            headers: {"Authorization": localStorage.getItem('token')},
            data: JSON.stringify(loginob),
            processData: false,
            async: true,
            success: function (res) {
                let username = res['username'];
                let token = res['token'];


                let form_data = new FormData();
                form_data.append("_token", "{{ csrf_token() }}");
                form_data.append("token", token);
                form_data.append("username", username);


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: baseurl + "send-session",
                    method: 'post',
                    data: form_data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    async: true,
                    success: function (result) {
                        // localStorage.setItem("name", "data");
                        toastr.success('Login Successfully !', 'Success ! ');
                        window.location = baseurl;


                    },
                    error: function (error) {
                        toastr.error('Credentials are incorrect ! check and resubmit', 'Error ! ');

                    }
                });


            },
            error: function (res) {
                toastr.error('Credentials are incorrect ! check and resubmit', 'Error ! ');

            }
        })
    }

    function validatefirstname() {
        let result = false;
        let regExp = /^([ \.]?[a-zA-Z]+){2,150}$/;
        $('#firstname').css('border-color', 'red');
        if (!($('#firstname').val() == null || $('#firstname').val() == "") && $('#firstname').val().trim().match(regExp)) {
            $('#firstname').css('border-color', '');
            result = true;
        } else {
            $('#firstname').css('border-color', 'red');

            result = false;
        }

        return result;
    }

    function validatelastname() {
        let result = false;
        let regExp = /^([ \.]?[a-zA-Z]+){2,150}$/;
        $('#lastname').css('border-color', 'red');
        if (!($('#lastname').val() == null || $('#lastname').val() == "") && $('#lastname').val().trim().match(regExp)) {
            $('#lastname').css('border-color', '');
            result = true;
        } else {
            $('#lastname').css('border-color', 'red');

            result = false;
        }

        return result;
    }

    function validateAddress() {
        let result = false;
        let regExp = /^[-.?!,;:/() A-Za-z0-9]*$/;
        $('#address').css('border-color', 'red');
        if (!($('#address').val() == null || $('#address').val() == "") && $('#address').val().trim().match(regExp)) {
            $('#address').css('border-color', '');
            result = true;
        } else {
            $('#address').css('border-color', 'red');

            result = false;
        }

        return result;
    }

    function validatecontact_number() {
        let result = false;
        let regExp = /^(?:0)?(?:(11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|91)(0|2|3|4|5|7|9)|7(0|1|2|5|6|7|8)\d)\d{6}$/;
        let regExp2 = "0((11)|(2(1|[3-7]))|(3[1-8])|(4(1|5|7))|(5(1|2|4|5|7))|(6(3|[5-7]))|([8-9]1))([2-4]|5|7|9)[0-9]{6}";
        $('#mobilenumber').css('border-color', 'red');
        if (!($('#mobilenumber').val() == null || $('#mobilenumber').val() == "") && ($('#mobilenumber').val().trim().match(regExp2) || $('#mobilenumber').val().trim().match(regExp))) {
            $('#mobilenumber').css('border-color', '');
            result = true;
        } else {
            $('#mobilenumber').css('border-color', 'red');
            result = false;
        }

        return result;
    }

    function onClickCreateAccount() {

        let firstname = $('#firstname').val().trim();
        let lastname = $('#lastname').val().trim();
        let address = $('#address').val().trim();
        let mobilenumber = $('#mobilenumber').val().trim();
        let regusername = $('#regusername').val().trim();
        let regpassword = $('#regpassword').val();
        let cpassword = $('#cpassword').val();
        let form_data = new FormData();
        form_data.append("_token", "{{ csrf_token() }}");
        form_data.append("userName", regusername);
        form_data.append("password", regpassword);
        form_data.append("role", "Client");
        form_data.append("firstName", firstname);
        form_data.append("lastName", lastname);
        form_data.append("address", address);
        form_data.append("contact", mobilenumber);

        let jsons = JSON.stringify({
            "_token": "{{ csrf_token() }}",
            "userName": regusername,
            "password": regpassword,
            "role": "Client",
            "firstName": firstname,
            "lastName": lastname,
            "address": address,
            "contact": mobilenumber
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (cpassword == regpassword) {
            if (validateAddress() & validatecontact_number() & validatefirstname() & validatelastname()) {
                $.ajax({
                    url: baseurlAPI + "user/check-user",
                    method: 'post',
                    data: jsons,
                    async: true,
                    processData: false,
                    contentType: 'application/json',
                    success: function (data) {
                        if (data == 0) {
                            $.ajax({
                                url: baseurlAPI + "user/sign-up",
                                method: 'post',
                                data: jsons,
                                async: true,
                                processData: false,
                                contentType: 'application/json',
                                success: function (result) {
                                    // localStorage.setItem("name", "data");
                                    toastr.success('Registration Successfully !', 'Success ! ');
                                    $('#regusername').css('border-color', '');
                                    $('#cpassword').css('border-color', '');
                                    $('#regpassword').css('border-color', '');
                                    clearAll();

                                },
                                error: function (error) {
                                    toastr.error('Something Went Wrong! ', 'Error ! ');

                                }
                            });
                        } else if (data == 1) {
                            toastr.error('This username is exist ! check & resubmit ', 'Error ! ');
                            $('#regusername').css('border-color', 'red');
                            $('#cpassword').css('border-color', '');
                            $('#regpassword').css('border-color', '');
                        }
                    },
                    error: function (error) {
                        toastr.error('Something Went Wrong! ', 'Error ! ');

                    }
                });
            } else {
                toastr.error('Something Went Wrong! ', 'Error ! ');
                $('#cpassword').css('border-color', '');
                $('#regpassword').css('border-color', '');
            }

        } else {
            toastr.error('Password mismatch ! Please re enter password ', 'Error ! ');
            $('#cpassword').css('border-color', 'red');
            $('#regpassword').css('border-color', 'red');
            $('#regusername').css('border-color', '');
        }

    }

    function clearAll(){
        $('#cpassword').val('');
        $('#regpassword').val('');
        $('#regusername').val('');
        $('#mobilenumber').val('');
        $('#address').val('');
        $('#lastname').val('');
        $('#firstname').val('');
    }

    function checkuser(jsondata, handleData) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: baseurlAPI + "user/check-user",
            method: 'post',
            data: jsondata,
            async: true,
            processData: false,
            contentType: 'application/json',
            success: function (data) {
                handleData = data;
            },
            error: function (error) {
                toastr.error('Something Went Wrong! ', 'Error ! ');

            }
        });
    }

</script>
</html>
