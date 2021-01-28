<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
<div class="page-wrapper">
    @include('sidebar-header')
    <main class="main">
        <section class="section-1">
            <h2 class="d-none">Home Slider</h2>

            <div class="home-slider owl-carousel owl-theme show-nav-hover" data-owl-options="{
						'loop': false
					}">

                <div class="banner">
                    <img src="{{ URL::asset('assets/images/bannernew/cKGahs3u9J6WsnmH3ubAfn.jpg')}}" width="1620" height="980" alt="slider-one">

                    <div class="banner-layer banner-layer-middle text-right" >
                        <h6 style="color: white">NEW ARRIVALS!</h6>
                        <h3 style="color: red">70% OFF</h3>
                        <a href="#" onclick="window.location='{{ url("/all-product") }}'" class="btn btn-xl" role="button">Shop Now<i class="fas fa-chevron-right"></i></a>
                    </div><!-- End .banner-layer.banner-layer-middle -->
                </div><!-- End .banner -->

                <div class="banner text-right">
                    <img src="{{ URL::asset('assets/images/bannernew/home-appliance-electronic-sale-banner-poster-design-discount-offer-firecrackers-happy-diwali-home-appliance-159434244.jpg')}}" width="1620" height="980" alt="slider-two">

{{--                    <div class="banner-layer banner-layer-middle content-right">--}}
{{--                        <h6>NEW ARRIVALS!</h6>--}}
{{--                        <img src="assets/images/banners/banner-text-2.png" class="w-auto ml-auto" width="503" height="113" alt="banner-text">--}}
{{--                        <h3>50% OFF</h3>--}}
{{--                        <a href="category.html" class="btn btn-xl" role="button">Shop Now<i class="fas fa-chevron-right"></i></a>--}}
{{--                    </div><!-- End .banner-layer.banner-layer-middle -->--}}
                </div>
            </div>
        </section><!-- End .section-1 -->


        <section class="section-3 product-collection">
            <div class="container">
                <h2 class="section-title">JUST ARRIVED - <b>ABANS</b> </h2>

                <div class="products-slider owl-carousel owl-theme dots-top" style="display: inline-flex" data-owl-options="{
							'responsive': {
								'992': {
									'items': 6
								},
								'768': {
									'items': 4
								},
								'576': {
									'items': 3
								}
							}
						}" id="abansdiv">



                </div><!-- End .products-slider -->
            </div>
        </section><!-- End .section-3 -->

        <section class="section-4 container">
            <div class="newsletter-section bg-img">
                <div class="banner">
                    <img src="{{ URL::asset('assets/images/bannernew/singer_image.jpg')}}" alt="desc" style="max-height: 225px" width="100%" height="200px">

{{--                    <div class="banner-layer banner-layer-middle text-right">--}}
{{--                        <h4>Sunglasses, Bags, Dresses and much more...</h4>--}}
{{--                        <h3>--}}
{{--                            <b class="text-white position-relative">BIG SALE</b>--}}
{{--                            ALL NEW FASHION BRANDS ITEMS UP TO 70% OFF--}}
{{--                        </h3>--}}
{{--                        <a href="#" class="btn btn-xl" role="button">Shop Now<i class="fas fa-chevron-right"></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section><!-- End .section-4 -->

        <section class="section-5 product-collection">
            <div class="container">
                <h2 class="section-title">JUST ARRIVED - <b>SINGER</b> </h2>

                <div class="row product-ajax-grid" style="display: inline-flex" id="singerdiv">

                </div><!-- End .row -->


            </div>
        </section><!-- End .section-5 -->

        <section class="section-4 container">
            <div class="newsletter-section bg-img">
                <div class="banner">
                    <img src="{{ URL::asset('assets/images/bannernew/abbb.jpg')}}" style="max-height: 225px" alt="desc" width="1000" height="400">

                    <div class="banner-layer banner-layer-middle text-left">
                        <h4>Mobile,Laptop,coolers and much more...</h4>
                        <h3>
                            <b class="text-white position-relative">BIG SALE</b>
                            ALL NEW Cooling ITEMS UP TO 50% OFF
                        </h3>
                        <a href="#" onclick="window.location='{{ url("/all-product") }}'" class="btn btn-xl" role="button">Shop Now<i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </section><!-- End .section-4 -->
    </main><!-- End .main -->
    @include('footer')
</div>

@include('other-content')


</body>

<script>
    function loadabanssixdata(){
        $.ajax({
            url: baseurlAPI + 'item',
            method: "GET",
            async: true,
            dataType: "json"

        }).done(function (resp) {
            $('#abansdiv').empty();
            let count=6;
            let dataHtml='';
            for (let i in resp) {
                let item = resp[i];

                let name = item["name"];
                let id = item["id"];
                let itemtype = item["itemtype"];

                if (itemtype=="Abans" & count!=0) {
                    count--;
                    dataHtml += '<div class="product-default inner-quickview inner-icon col-xl-2 col-md-3 col-sm-4 col-6">\n' +
                        '<figure>\n' +
                        '<a href="#" onclick=\'loadsingledata("' + id + '")\'>\n' +
                        '<img src=' + item['imageUrl'] + ' alt="product"  />\n' +
                        '</a>\n' +

                        '<div class="btn-icon-group">\n' +
                        '<button class="btn-icon btn-add-cart" onclick=\'addproducttocart("' + id + '","' + item['name'] + '","' + item['price'] + '","' + item['imageUrl'] + '","' + item['itemtype'] + '")\'><i class="icon-bag"></i></button>\n' +
                        '</div>\n' +

                        '<button onclick=\'loadsingledata("' + id + '")\' class="btn-quickview" title="Quick View">\n' +
                        'View Details</button>\n' +
                        '</figure>\n' +

                        '<div class="product-details">\n' +
                        '<div class="category-wrap">\n' +
                        '<div class="category-list">\n' +
                        '<a href="#" class="product-category">DRESS</a>\n' +
                        '</div>\n' +
                        '</div>\n' +

                        '<h2 class="product-title">\n' +
                        '<a href="#">' + item['name'] + '</a>\n' +
                        '</h2>\n' +

                        '<div class="price-box">\n' +
                        '<span class="product-price">LKR ' + item['price'] + '</span>\n' +
                        '</div><!-- End .price-box -->\n' +
                        '</div><!-- End .product-details -->\n' +
                        '</div><!-- End .product-default -->';

                }
            }
            $('#abansdiv').append(dataHtml);

        });
    }
    loadabanssixdata();

    function loadsingledata(id) {
        window.location = baseurl + "product-single/" + id;
    }

    function addproducttocart(newid, name, price, image, itemtype) {

        price = parseFloat(price);
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
        if (storedNames === null) {
            items.push(item1);
            localStorage.setItem("item", JSON.stringify(items));
        } else {
            let result = true;
            for (let i in storedNames) {
                let response = storedNames[i];
                let id = response["id"];
                let aimageurl = response["image"];
                let aname = response["name"];
                let aprice = response["price"];
                let aqty = response["qty"];
                aqty = parseInt(aqty);
                let aitemtype = response["itemtype"];
                if (id == newid) {
                    result = false;
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty + 1,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                } else {
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
            if (result) {
                items.push(item1);
            }
            localStorage.removeItem("item");

            // storedNames.push(item);
            localStorage.setItem("item", JSON.stringify(items));
        }
        $('#addCartModal').modal('show');

    }


    function loadsingersixdata(){
        $.ajax({
            url: baseurlAPI + 'item',
            method: "GET",
            async: true,
            dataType: "json"

        }).done(function (resp) {
            $('#singerdiv').empty();
            let count=6;
            let dataHtml='';
            for (let i in resp) {
                let item = resp[i];

                let name = item["name"];
                let id = item["id"];
                let itemtype = item["itemtype"];

                if (itemtype=="Singer" & count!=0) {
                    count--;
                    dataHtml += '<div class="product-default inner-quickview inner-icon col-xl-2 col-md-3 col-sm-4 col-6">\n' +
                        '<figure>\n' +
                        '<a href="#" onclick=\'loadsingledata("' + id + '")\'>\n' +
                        '<img src=' + item['imageUrl'] + ' alt="product"  />\n' +
                        '</a>\n' +

                        '<div class="btn-icon-group">\n' +
                        '<button class="btn-icon btn-add-cart" onclick=\'addproducttocart("' + id + '","' + item['name'] + '","' + item['price'] + '","' + item['imageUrl'] + '","' + item['itemtype'] + '")\'><i class="icon-bag"></i></button>\n' +
                        '</div>\n' +

                        '<button onclick=\'loadsingledata("' + id + '")\' class="btn-quickview" title="Quick View">\n' +
                        'View Details</button>\n' +
                        '</figure>\n' +

                        '<div class="product-details">\n' +
                        '<div class="category-wrap">\n' +
                        '<div class="category-list">\n' +
                        '<a href="#" class="product-category">DRESS</a>\n' +
                        '</div>\n' +
                        '</div>\n' +

                        '<h2 class="product-title">\n' +
                        '<a href="#">' + item['name'] + '</a>\n' +
                        '</h2>\n' +

                        '<div class="price-box">\n' +
                        '<span class="product-price">LKR ' + item['price'] + '</span>\n' +
                        '</div><!-- End .price-box -->\n' +
                        '</div><!-- End .product-details -->\n' +
                        '</div><!-- End .product-default -->';

                }
            }
            $('#singerdiv').append(dataHtml);

        });
    }
    loadsingersixdata();
</script>
</html>
