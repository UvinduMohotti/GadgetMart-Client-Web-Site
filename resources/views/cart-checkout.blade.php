<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@include('head')

<body>
<div class="page-wrapper">
    @include('sidebar-header')
    <main class="main" id="main1">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </nav>

        <div class="container mb-6">
            <ul class="checkout-progress-bar">
                <li class="active">
                    <span>Shipping</span>
                </li>
                <li>
                    <span>Review &amp; Payments</span>
                </li>
            </ul>
            <div class="row">
                <div class="col-lg-8">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Shipping Address</h2>

                            <form action="#">
                                <div class="form-group required-field">
                                    <label>Full Name </label>
                                    <input type="text" id="fullname" name="fullname" class="form-control" required>
                                </div><!-- End .form-group -->



                                <div class="form-group required-field">
                                    <label>Street Address </label>
                                    <textarea id="address" class="form-control" required></textarea>
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>City  </label>
                                    <input type="text" id="city" class="form-control" required>
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Phone Number </label>
                                    <input type="number" id="mobilenumber" class="form-control" required>
                                </div><!-- End .form-group -->
                            </form>
                        </li>

{{--                        <li>--}}
{{--                            <div class="checkout-step-shipping">--}}
{{--                                <h2 class="step-title">Shipping Methods</h2>--}}

{{--                                <table class="table table-step-shipping">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td><input type="radio" name="shipping-method" value="flat"></td>--}}
{{--                                        <td><strong>$20.00</strong></td>--}}
{{--                                        <td>Fixed</td>--}}
{{--                                        <td>Flat Rate</td>--}}
{{--                                    </tr>--}}

{{--                                    <tr>--}}
{{--                                        <td><input type="radio" name="shipping-method" value="best"></td>--}}
{{--                                        <td><strong>$15.00</strong></td>--}}
{{--                                        <td>Table Rate</td>--}}
{{--                                        <td>Best Way</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div><!-- End .checkout-step-shipping -->--}}
{{--                        </li>--}}
                    </ul>
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="order-summary" id="summary">

                    </div><!-- End .order-summary -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-steps-action">
                        <a href="#" onclick="onClickNext()" class="btn btn-primary float-right">NEXT</a>
                    </div><!-- End .checkout-steps-action -->
                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main><!-- End .main -->


    <main class="main d-none" id="main2">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </nav>

        <div class="container mb-6">
            <ul class="checkout-progress-bar">
                <li>
                    <span>Shipping</span>
                </li>
                <li class="active">
                    <span>Review &amp; Payments</span>
                </li>
            </ul>
            <div class="row">
                <div class="col-lg-4">
                    <div class="order-summary" id="summary2">

                    </div><!-- End .order-summary -->

                    <div class="checkout-info-box">
                        <h3 class="step-title">Ship To:</h3>

                        <address id="loadaddress">
                        </address>
                    </div><!-- End .checkout-info-box -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-8 order-lg-first">
                    <div class="checkout-payment">
                        <h2 class="step-title">Payment Process:</h2>
                        <h2 class="title" id="totalamounttopay">Total Amount: </h2>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 order-md-1">
                                    <form class="needs-validation" novalidate="">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cc-name">Name on card</label>
                                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                <small class="text-muted">Full name as displayed on card</small>
                                                <div class="invalid-feedback">
                                                    Name on card is required
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="cc-number">Credit card number</label>
                                                <input type="text" class="form-control" id="cc-number" placeholder="xxxx xxxx xxxx xxxx" required="">
                                                <div class="invalid-feedback">
                                                    Credit card number is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">Expiration</label>
                                                <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY" required="">
                                                <div class="invalid-feedback">
                                                    Expiration date required
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">CVV</label>
                                                <input type="text" class="form-control" id="cc-cvv" placeholder="xxx" required="">
                                                <div class="invalid-feedback">
                                                    Security code required
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">We Accept</label>
                                                <img src="https://www.co.cass.in.us/files_uploaded/creditcardlogos.jpg">
                                            </div>
                                        </div>
                                        <hr class="mb-4">
                                        <button class="btn btn-primary btn-lg btn-block" onclick="addOrder()" type="button">Place Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .checkout-payment -->

                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </main><!-- End .main -->




    @include('footer')
</div><!-- End .page-wrapper -->

@include('other-content')
</body>

<script>

    function validatefullname() {
        let result = false;
        let regExp = /^([ \.]?[a-zA-Z]+){2,150}$/;
        $('#fullname').css('border-color', 'red');
        if (!($('#fullname').val() == null || $('#fullname').val() == "") && $('#fullname').val().trim().match(regExp)) {
            $('#fullname').css('border-color', '');
            result = true;
        } else {
            $('#fullname').css('border-color', 'red');

            result = false;
        }

        return result;
    }

    function validateAddress() {
        let result = false;
        let regExp = /^[-.?!,;:/() A-Za-z0-9]*$/;
        $('#address').css('border-color', 'red');
        if (!($('#address').val() == null || $('#address').val() == "") ) {
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

    function validatecity() {
        let result = false;
        let regExp = /^[a-zA-Z\s]*$/;
        $('#city').css('border-color', 'red');
        if (!($('#city').val() == null || $('#city').val() == "") && $('#city').val().trim().match(regExp)) {
            $('#city').css('border-color', '');

            result = true;
        } else {
            $('#city').css('border-color', 'red');

            result = false;
        }

        return result;
    }

    function onClickNext(){
        if (validatefullname() & validatecontact_number() & validateAddress() & validatecity()) {
            let fullname = $('#fullname').val();
            let address = $('#address').val();
            let city = $('#city').val();
            let mobilenumber = $('#mobilenumber').val();
            let row = '' + fullname +' '+
                '  ' + address + ' \n' +
                '  ' + city + ' \n' +
                '  ' + mobilenumber;
            $('#loadaddress').empty();
            $('#loadaddress').append(row);
            $('#main1').addClass('d-none');
            $('#main2').removeClass('d-none');
        }else{
            toastr.error('Something Went Wrong!', 'Error ! ');
        }
    }
    function addorderSummary(){
        var storedNames = JSON.parse(localStorage.getItem("item"));
        x = 0;
        for (let i in storedNames) {
            x++;
        }
        let content='';

        let content1='<h3>Summary</h3>\n' +
            ' <h4>\n' +
            '  <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">'+x+' products in Cart</a>\n' +
            ' </h4>\n' +

            ' <div class="collapse" id="order-cart-section">\n' +
            ' <table class="table table-mini-cart">\n' +
            ' <tbody>';
        content+=content1;
        let totalprice = 0;
        for (let i in storedNames) {
            let response = storedNames[i];
            let id = response["id"];
            let imageurl = response["image"];
            let name = response["name"];
            let price = response["price"];
            let qty = response["qty"];
            tot=qty*price;
            totalprice += price * qty;

            let content2 = '<tr>\n' +
                ' <td class="product-col">\n' +
                '<figure class="product-image-container">\n' +
                '<a href="product.html" class="product-image">\n' +
                '<img src="'+imageurl+'" alt="product">\n' +
                '</a>\n' +
                '</figure>\n' +
                '<div>\n' +
                '<h2 class="product-title">\n' +
                '<a href="product.html">'+name+'</a>\n' +
                '</h2>\n' +

                '<span class="product-qty">Qty: '+qty+'</span>\n' +
                '</div>\n' +
                '</td>\n' +
                '<td class="price-col">LKR '+tot+'</td>\n' +
                '</tr>';
            content+=content2;
        }

        let content3='</tbody>\n' +
            '</table>\n' +
            '</div><!-- End #order-cart-section -->';
        content+=content3;
        let row1='Amount : LKR '+totalprice.toFixed(2)+'';
        $('#summary').empty();
        $('#summary2').empty();
        $('#totalamounttopay').empty();
        $('#totalamounttopay').append(row1);
        $('#summary').append(content);
        $('#summary2').append(content);
    }
    addorderSummary();

    function addOrder(){
        let username='<?php echo Session()->get('username')?>';
        let token='<?php echo Session()->get('token')?>';

        let fullname=$('#fullname').val();
        let address=$('#address').val();
        let city=$('#city').val();

        let orderaddress=fullname+'<br>'+address+'<br>'+city;
        let mobilenumber=$('#mobilenumber').val();

        var storedNames = JSON.parse(localStorage.getItem("item"));
        let totalprice = 0;
        let orderDetailsModels= [];
        for (let i in storedNames) {
            let response = storedNames[i];
            let id = response["id"];
            let price = response["price"];
            let qty = response["qty"];
            let itemtype = response["itemtype"];
            let item = {
                item: id,
                qty: qty,
                itemtype: itemtype
            };
            orderDetailsModels.push(item);
            totalprice += price * qty;
        }



        let form_data = new FormData();
        form_data.append("_token", "{{ csrf_token() }}");
        form_data.append("token",token );
        form_data.append("customer",username );
        form_data.append("contact",mobilenumber );
        form_data.append("fullAmount",totalprice );
        form_data.append("orderAddress",orderaddress );
        form_data.append("orderDetailsModels",orderDetailsModels );

        let jsons=JSON.stringify({"customer":username,"contact":mobilenumber,"fullAmount":totalprice,"orderAddress":orderaddress,"orderDetailsModels":orderDetailsModels});



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: baseurlAPI + "order",
            method: 'post',
            data: jsons,
            async: true,
            processData: false,
            contentType: 'application/json',
            success: function (result) {
                toastr.success('Order Successfully !', 'Success ! ');
                localStorage.removeItem("item");
                window.location=baseurl;

            },
            error: function (error) {
                toastr.error('Something Went Wrong!', 'Error ! ');
            }
        });

    }
</script>

</html>
