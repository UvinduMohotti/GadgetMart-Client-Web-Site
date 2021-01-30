<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@include('head')
<style>

    #pagination-demo1 {
        display: contents;
    }

    #pagination-demo1 ul {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    #pagination-demo1 li {
        display: inline;
    }

    #pagination-demo1 li {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .data-container {
        display: inline-flex;
    }

    .paginationjs {
        margin: auto;
        width: 25%;

    }

</style>
<body>
<div class="page-wrapper">
    @include('sidebar-header')

    <main class="main">
        <section class="container">
            <div class="newsletter-section shop-banner bg-img">
                <div class="banner">
                    <img src="{{ URL::asset('assets/images/bannernew/hp.png')}}" style="height: 200px" alt="desc" width="1000" >

{{--                    <div class="banner-layer banner-layer-middle text-right pt-4 pt-lg-0">--}}
{{--                        <h4>Sunglasses, Bags, Dresses and much more...</h4>--}}
{{--                        <h3>--}}
{{--                            <b class="text-white position-relative">BIG SALE</b>--}}
{{--                            ALL NEW FASHION BRANDS ITEMS UP TO 70% OFF--}}
{{--                        </h3>--}}
{{--                        <a href="#" class="btn btn-xl" role="button">Shop Now<i--}}
{{--                                class="fas fa-chevron-right"></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section><!-- End .container-->

        <input id="name" class="d-none" value="{{$name}}">
        <input id="categoryid" class="d-none" value="{{$id}}">

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Brand</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                </ol>
            </div>
        </nav>

        <section class="container">
            <div class="row">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="form-row" style="display: inline;">
                            <div class="col-md-6 mb-3" style="display: inline-block; width: 40%;">
                                <label for="minprice">Min Price</label>
                                <input type="number" class="form-control" id="minprice" min="0" max="250000"
                                       placeholder="0-250000" required="">
                            </div>
                            <div class="col-md-6 mb-3" style="display: inline-block;width: 40%;">
                                <label for="maxprice">Max Price</label>
                                <input type="number" class="form-control" id="maxprice" min="250000" max="500000"
                                       placeholder="250000-500000" required="">
                            </div>
                            <button id="search_button" onclick="loadsearchdata()" type="button" class="btn btn-primary "
                                    style="display: inline-block;"><i class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </div>
                </div>


                <br>
                <br>
                <div class="data-container" id="abcde"></div>
                <div id="pagination-demo1"></div>

            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="data-container"></div>
                <div id="pagination-demo2" class="header-center"></div>
                {{--                <div class="product-default inner-quickview inner-icon col-xl-5col col-lg-3 col-md-4 col-6">--}}
                {{--                    <figure>--}}
                {{--                        <a href="#">--}}
                {{--                            <img src="assets/images/products/product-2.jpg" alt="image">--}}
                {{--                        </a>--}}
                {{--                        <div class="btn-icon-group">--}}
                {{--                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>--}}
                {{--                        </div>--}}
                {{--                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick--}}
                {{--                            View</a>--}}
                {{--                    </figure>--}}
                {{--                    <div class="product-details">--}}
                {{--                        <div class="category-wrap">--}}
                {{--                            <div class="category-list">--}}
                {{--                                <a href="#" class="product-category">category</a>--}}
                {{--                            </div>--}}
                {{--                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>--}}
                {{--                        </div>--}}
                {{--                        <h2 class="product-title">--}}
                {{--                            <a href="#">Ray Ban 5228</a>--}}
                {{--                        </h2>--}}
                {{--                        <div class="ratings-container">--}}
                {{--                            <div class="product-ratings">--}}
                {{--                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->--}}
                {{--                                <span class="tooltiptext tooltip-top"></span>--}}
                {{--                            </div><!-- End .product-ratings -->--}}
                {{--                        </div><!-- End .product-container -->--}}
                {{--                        <div class="price-box">--}}
                {{--                            <span class="product-price">$33.00</span>--}}
                {{--                        </div><!-- End .price-box -->--}}
                {{--                    </div><!-- End .product-details -->--}}
                {{--                </div>--}}


            </div><!-- End .row -->
        </section>
    </main>

    @include('footer')
</div><!-- End .page-wrapper -->

@include('other-content')
</body>
<script src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>
<script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
<script>

    function validatemax() {
        let result = false;
        let regExp = "^\\+?[0-9]*\\.?[0-9]+$";
        $('#maxprice').css('border-color', 'red');
        if (!($('#maxprice').val() == null || $('#maxprice').val() == "") && $('#maxprice').val().trim().match(regExp)) {
            $('#maxprice').css('border-color', '');
            result = true;
        } else {
            $('#maxprice').css('border-color', 'red');

            result = false;
        }

        return result;
    }
    function validatemin() {
        let result = false;
        let regExp = "^\\+?[0-9]*\\.?[0-9]+$";
        $('#minprice').css('border-color', 'red');
        if (!($('#minprice').val() == null || $('#minprice').val() == "") && $('#minprice').val().trim().match(regExp)) {
            $('#minprice').css('border-color', '');
            result = true;
        } else {
            $('#minprice').css('border-color', 'red');
            result = false;
        }

        return result;
    }

    let subcat=[];

    function loadSubCategory() {
        $.ajax({
            url: baseurlAPI + 'subcategory',
            method: "GET",
            async: true,
            dataType: "json"

        }).done(function (resp) {
            for (let i in resp) {
                let response = resp[i];
                let name = response["name"];
                let id = response["id"];
                let category = response["category"];
                let subcategory={
                    id:id,
                    name:name,
                    category:category
                }
                subcat.push(subcategory);
            }

        });
    }
    loadSubCategory();


    $(function () {
        let categoryid = $('#categoryid').val();
        (function (name) {
            var container = $('#pagination-' + name);
            let countfirst=0;
            container.pagination({
                dataSource: baseurlAPI + 'item',
                locator: 'items',
                totalNumber: 120,
                pageSize: 20,
                ajax: {
                    beforeSend: function () {
                        container.prev().html('Loading data from API ...');
                    }
                },
                callback: function (response, pagination) {
                    window.console && console.log(22, response, pagination);
                    var dataHtml = '<div class="row">';

                    $.each(response, function (index, item) {
                        let id = item['id'];
                        let brand = item['brand'];
                        let subCategory = item['subCategory'];
                        let category=null;
                        for (let i in subcat){
                            let response = subcat[i];
                            let subid = response["id"];
                            if (subid===subCategory){
                                subCategory=response["name"];
                                category=response["category"];
                            }

                        }

                        if (category == categoryid) {
                            countfirst++;
                            dataHtml += '' +
                                '<div class=\"product-default inner-quickview inner-icon col-xl-5col col-lg-3 col-md-4 col-6"\>\n' +
                                '<figure>\n' +
                                '<a href="#" onclick=\'loadsingledata("' + id + '")\'>\n' +
                                '<img src=' + item['imageUrl'] + ' alt="image">\n' +
                                '</a>\n' +
                                '<div class="btn-icon-group">\n' +
                                '<button class="btn-icon btn-add-cart"  onclick=\'addproducttocart("'+id+'","'+item['name']+'","'+item['price']+'","'+item['imageUrl']+'","'+item['itemtype']+'")\' ><i class="icon-shopping-cart"></i></button>\n' +
                                '</div>\n' +
                                '<button onclick=\'loadsingledata("' + id + '")\' class="btn-quickview" title="Quick View">\n' +
                                'View Details</button>\n' +
                                '</figure>\n' +
                                '<div class="product-details">\n' +
                                '<div class="category-wrap">\n' +
                                '<div class="category-list">\n' +
                                '<a href="#" class="product-category">'+subCategory+'</a>\n' +
                                '</div>\n' +
                                '</div>\n' +
                                '<h2 class="product-title">\n' +
                                '<a href="#">' + item['name'] + '</a>\n' +
                                '</h2>\n' +
                                '<div class="price-box">\n' +
                                '   <span class="product-price">LKR ' + item['price'] + '</span>\n' +
                                '</div><!-- End .price-box -->\n' +
                                '</div><!-- End .product-details -->\n' +
                                '</div>';
                        }
                    });

                    if (countfirst==0){
                        dataHtml="<div class=\"col-xs-12 col-lg-12\" data-animate='{\"class\":\"fadeInLeftBig\"}'>\n" +
                            "                        <div class=\"notfound-item\">No Ads Found</div>\n" +
                            "            </div>";
                    }

                    dataHtml+="</div>";
                    container.prev().html(dataHtml);
                }
            })
        })('demo1');
    })

    $(function () {
        console.log("ready!");
    });

    function loadsingledata(id) {
        window.location = baseurl + "product-single/" + id;
    }

    function addproducttocart(newid, name, price, image,itemtype){

        price=parseFloat(price);
        let item1 = {
            id: newid,
            name: name,
            price: price,
            qty: 1,
            image: image,
            itemtype: itemtype
        };
        var items = [];

        var storedNames = JSON.parse(localStorage.getItem("item"));
        if (storedNames===null){
            items.push(item1);
            localStorage.setItem("item", JSON.stringify(items));
        }else{
            let result=true;
            for (let i in storedNames) {
                let response = storedNames[i];
                let id = response["id"];
                let aimageurl = response["image"];
                let aname = response["name"];
                let aprice = response["price"];
                let aqty = response["qty"];
                aqty =parseInt(aqty) ;
                let aitemtype = response["itemtype"];
                if (id==newid){
                    result=false;
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty+1,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                }else{
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                }
            }
            if (result){
                items.push(item1);
            }
            localStorage.removeItem("item");

            // storedNames.push(item);
            localStorage.setItem("item",JSON.stringify(items) );
        }
        $('#addCartModal').modal('show');

    }

    function loadsearchdata() {
        let min = $('#minprice').val();
        let max = $('#maxprice').val();
        if (validatemin() & validatemax()) {
            let categoryid = $('#categoryid').val();
            var container = $('#pagination-demo1');
            let count = 0;
            container.pagination({
                dataSource: baseurlAPI + 'item',
                locator: 'items',
                totalNumber: 120,
                pageSize: 20,
                ajax: {
                    beforeSend: function () {
                        container.prev().html('Loading data from API ...');
                    }
                },
                callback: function (response, pagination) {
                    window.console && console.log(22, response, pagination);
                    var dataHtml = '<div class="row">';

                    $.each(response, function (index, item) {

                        let id = item['id'];
                        let brand = item['brand'];
                        let price = item['price'];
                        price = parseFloat(price);
                        min = parseFloat(min);
                        max = parseFloat(max);
                        let subCategory = item['subCategory'];
                        let category = null;
                        for (let i in subcat) {
                            let response = subcat[i];
                            let subid = response["id"];
                            if (subid === subCategory) {
                                subCategory = response["name"];
                                category = response["category"];
                            }

                        }

                        if (category == categoryid & (price >= min && price <= max)) {
                            count++;
                            dataHtml += '' +
                                '<div class=\"product-default inner-quickview inner-icon col-xl-5col col-lg-3 col-md-4 col-6"\>\n' +
                                '<figure>\n' +
                                '<a href="#" onclick=\'loadsingledata("' + id + '")\'>\n' +
                                '<img src=' + item['imageUrl'] + ' alt="image">\n' +
                                '</a>\n' +
                                '<div class="btn-icon-group">\n' +
                                '<button class="btn-icon btn-add-cart" onclick=\'addproducttocart("' + id + '","' + item['name'] + '","' + item['price'] + '","' + item['imageUrl'] + '","' + item['itemtype'] + '")\'><i class="icon-shopping-cart"></i></button>\n' +
                                '</div>\n' +
                                '<button onclick=\'loadsingledata("' + id + '")\' class="btn-quickview" title="Quick View">\n' +
                                'View Details</button>\n' +
                                '</figure>\n' +
                                '<div class="product-details">\n' +
                                '<div class="category-wrap">\n' +
                                '<div class="category-list">\n' +
                                '<a href="#" class="product-category">' + subCategory + '</a>\n' +
                                '</div>\n' +
                                '</div>\n' +
                                '<h2 class="product-title">\n' +
                                '<a href="#">' + item['name'] + '</a>\n' +
                                '</h2>\n' +
                                '<div class="price-box">\n' +
                                '   <span class="product-price">LKR ' + item['price'] + '</span>\n' +
                                '</div><!-- End .price-box -->\n' +
                                '</div><!-- End .product-details -->\n' +
                                '</div>';
                        }
                    });
                    if (count == 0) {
                        dataHtml = "<div class=\"col-xs-12 col-lg-12\" data-animate='{\"class\":\"fadeInLeftBig\"}'>\n" +
                            "                        <div class=\"notfound-item\">No Ads Found</div>\n" +
                            "            </div>";
                    }
                    dataHtml+="</div>";

                    container.prev().html(dataHtml);
                }
            })
        }else{
            toastr.error('Something Went Wrong!', 'Error ! ');
        }
    }


</script>

</html>
