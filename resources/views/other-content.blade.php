<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active"><a href="#" onclick="window.location='{{ url("/") }}'">Home</a></li>
                <li>
                    <a href="#">Categories</a>
                    <ul id="catmobile">
                    </ul>
                </li>
                <li>
                    <a href="#" onclick="window.location='{{ url("/all-product") }}'" >Products</a>
                </li>
                <li>
                    <a href="#">Brands</a>
                    <ul id="mobilebrand">
                    </ul>
                </li>
                <li><a href="#" onclick="window.location='{{ url("/about") }}'">ABOUT US</a></li>
                @if(Session::get('login') != TRUE)
                <li><a href="#" onclick="window.location='{{ url("/login") }}'">LOG IN</a></li>
                @endif
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons d-flex">
            <a href="#" class="social-icon mr-3" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon mr-3" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
     style="background-image: url(https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/apple-devices-giveback-201804_FMT_WHH?wid=1472&hei=1510&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1533681185656)">
    <div class="newsletter-popup-content">
        <img src="{{ URL::asset('assets/images/gadgetmart.png')}}" alt="Logo" class="logo-newsletter">
        <h2>BE THE FIRST TO KNOW</h2>
        <p>Subscribe to the GadgetMart newsletter to receive timely updates from your favorite products.</p>
        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                       placeholder="Email address" required>
                <input type="submit" class="btn" value="Go!">
            </div><!-- End .from-group -->
        </form>
        <div class="newsletter-subscribe">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div><!-- End .newsletter-popup-content -->
</div><!-- End .newsletter-popup -->

<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle">Product Title</h4>
                <img src="{{ URL::asset('assets/images/products/home/product-1.jpg')}}" id="productImage" width="100"
                     height="100"
                     alt="adding cart image">
                <div class="btn-actions">
{{--                    <a href="#" class="btn-primary" role="button">Go to cart page</a>--}}
                    <a href="#" class="btn-primary" role="button" onclick="onclickCon()">Continue</a>
                </div>
            </div>
        </div>
    </div>

</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<script src="{{ URL::asset('js/all.js')}}"></script>

<!-- Toastr Js -->
<script src="{{ URL::asset('assets/vendors/toastr/js/toastr.min.js')}}"></script>
<!-- Toastr Init -->
<script src="{{ URL::asset('assets/js/init/toastr.js')}}"></script>

<!-- Plugins JS File -->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/optional/isotope.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.appear.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{ URL::asset('assets/js/main.min.js')}}"></script>

<script src="{{asset('assets/vendors/jquery.steps/js/jquery.steps.js')}}"></script>
<script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendors/data-table/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/vendors/data-table/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/vendors/data-table/js/responsive.bootstrap.min.js')}}"></script>

<script>

    function onclickCon(){
        location.reload();
    }

    /**
     * Logout function
     */

    function logout() {
        $.ajax({
            url: baseurl + "logout",
            method: 'GET',
            processData: false,
            contentType: false,
            async: true,
            success: function (result) {
                toastr.success('Logout Successfully !', 'Success ! ');
                location.reload();
                // loadCouponsByMerchantId();

            },
            error: function (result) {
                toastr.error('Logout Fail !', 'Error ! ');

            }
        });
    }


    /**
     *Cart Content Load Function
     */

    function loadcontent() {
        var storedNames = JSON.parse(localStorage.getItem("item"));
        x = 0;
        for (let i in storedNames) {
            x++;
        }
        let session=0;
        let content = '';
        let cartviewurl='<?php echo url('/cart-view')?>';
        let login='<?php echo url('/login')?>';
        session='<?php echo Session()->get('login')?>';

        let displaybutton;
        if (session==1){
            displaybutton='<button  id="checkoutbtn" onclick="checkcartdata()" class="btn btn-block btn-primary">Checkout</button>';
        }else if (session==null | session== ''){
            displaybutton='<a href="'+login+'" class="btn btn-block btn-primary">Login for Checkout</a>';
        }


        let content1 = '<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">\n' +
            ' <i class="icon-shopping-cart"></i>\n' +
            ' <span class="cart-count badge-circle">' + x + '</span>\n' +
            '</a>\n' +

            ' <div class="dropdown-menu" >\n' +
            '<div class="dropdownmenu-wrapper">\n' +
            '<div class="dropdown-cart-header">\n' +
            '<span>' + x + ' Items</span>\n' +
            '</div><!-- End .dropdown-cart-header -->';
        content += content1;
        $('#cart').empty();

        let totalprice = 0;
        for (let i in storedNames) {
            let response = storedNames[i];
            let id = response["id"];
            let imageurl = response["image"];
            let name = response["name"];
            let price = response["price"];
            let qty = response["qty"];
            totalprice += price * qty;

            let content2 = '<div class="dropdown-cart-products">\n' +

                '<div class="product">\n' +
                '<div class="product-details">\n' +
                '<h4 class="product-title">\n' +
                '<a href="#">' + name + '</a>\n' +
                '</h4>\n' +

                ' <span class="cart-product-info">\n' +
                '<span class="cart-product-qty">' + qty + '</span>\n' +
                ' x LKR ' + price + '\n' +
                '</span>\n' +
                '</div><!-- End .product-details -->\n' +

                '<figure class="product-image-container">\n' +
                '<a href="#" class="product-image">\n' +
                '<img src="' + imageurl + '" alt="product">\n' +
                '</a>\n' +
                '<a href="#" onclick=\'deletecartItem("'+id+'")\' class="btn-remove icon-cancel" title="Remove Product"></a>\n' +
                '</figure>\n' +
                '</div><!-- End .product -->\n' +


                '</div><!-- End .cart-product -->';

            content += content2;
        }

        let content3 = '<div class="dropdown-cart-total">\n' +
            '<span>SubTotal: LKR ' + totalprice + '</span>\n' +

            '<span class="cart-total-price float-right"></span>\n' +
            '</div><!-- End .dropdown-cart-total -->\n' +

            '<div class="dropdown-cart-action">\n' +
            ''+displaybutton+'\n' +
            '</div><!-- End .dropdown-cart-total -->\n' +
            '</div><!-- End .dropdownmenu-wrapper -->\n' +
            '</div><!-- End .dropdown-menu -->';
        content += content3;
        $('#cart').append(content);

    }

    loadcontent();

    function checklocalstorage(){
        var storedNames2 = JSON.parse(localStorage.getItem("item"));
        if (storedNames2===null){
            $('#checkoutbtn').prop('disabled', true);
        }else{
            $('#checkoutbtn').prop('disabled', false);
        }
    }
    function checkcartdata(){
        window.location=baseurl+'cart-view';
    }

    checklocalstorage();

    function deletecartItem(getid){
        var storedNames = JSON.parse(localStorage.getItem("item"));
        let totalprice = 0;
        localStorage.removeItem("item");
        for (let i in storedNames) {
            let response = storedNames[i];
            let id = response["id"];
            let imageurl = response["image"];
            let name = response["name"];
            let price = response["price"];
            let qty = response["qty"];
            let itemtype = response["itemtype"];
            totalprice += price * qty;
            if (id!=getid){

                let item = {
                    id: id,
                    name: name,
                    price: price,
                    qty: qty,
                    image: imageurl,
                    itemtype: itemtype
                };

                var items = [];

                var storedNames2 = JSON.parse(localStorage.getItem("item"));
                if (storedNames2===null){
                    items.push(item);
                    localStorage.setItem("item", JSON.stringify(items));
                }else{
                    storedNames2.push(item);
                    localStorage.setItem("item", JSON.stringify(storedNames2));
                }

            }
        }
        toastr.success('Item Remove Successfully !', 'Success ! ');
        location.reload();
    }

    /**
     * load Category
     */

    function loadCategory() {
        $.ajax({
            url: baseurlAPI + 'category',
            method: "GET",
            async: true,
            dataType: "json"

        }).done(function (resp) {
            $('#category').empty();
            $('#catmobile').empty();
            for (let i in resp) {
                let response = resp[i];
                let name = response["name"];
                let id = response["id"];
                let row = '<li><a href="'+baseurl+'category-view/'+name+'/'+id+'">' + name + '</a></li>';
                $('#category').append(row);
                $('#catmobile').append(row);
            }

        });
    }

    loadCategory();

    /**
     * load Brands
     */

    function loadBrand() {

        $.ajax({
            url: baseurlAPI + 'brand',
            method: "GET",
            async: true,
            dataType: "json"

        }).done(function (resp) {
            $('#brand').empty();
            $('#mobilebrand').empty();
            for (let i in resp) {
                let response = resp[i];
                let name = response["name"];
                let id = response["id"];
                let row = '<li ><a href="'+baseurl+'brand-view/'+name+'/'+id+'" >' + name + '</a></li>';
                $('#brand').append(row);
                $('#mobilebrand').append(row);
            }

        });
    }

    loadBrand();

</script>
