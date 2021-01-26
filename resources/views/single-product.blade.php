<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@include('head')

<body>
<div class="page-wrapper">
    @include('sidebar-header')
    <main class="main">
        <section class="container">
            <div class="newsletter-section shop-banner bg-img">
                <div class="banner">
                    <img src="{{ URL::asset('assets/images/bannernew/dell.jpg')}}" style="height: 250px" alt="desc" width="1000" >

{{--                    <div class="banner-layer banner-layer-middle text-right pt-4 pt-lg-0">--}}
{{--                        <h4>Sunglasses, Bags, Dresses and much more...</h4>--}}
{{--                        <h3>--}}
{{--                            <b class="text-white position-relative">BIG SALE</b>--}}
{{--                            ALL NEW FASHION BRANDS ITEMS UP TO 70% OFF--}}
{{--                        </h3>--}}
{{--                        <a href="category.html" class="btn btn-xl" role="button">Shop Now<i--}}
{{--                                class="fas fa-chevron-right"></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section><!-- End .container-->

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                </ol>
            </div>
        </nav>

        <div class="container">
            <div class="product-single-container product-single-default">
                <div class="row">
                    <div class="col-md-5 product-single-gallery">
                        <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme">

                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                            </div>
                            <!-- End .product-single-carousel -->
                            <span class="prod-full-screen">
										<i class="icon-plus"></i>
									</span>
                        </div>
                        <div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                        </div>
                    </div><!-- End .product-single-gallery -->

                    <div class="col-md-7 product-single-details">
                        <h1 class="product-title">{{$name}}</h1>

                        {{--								<div class="ratings-container">--}}
                        {{--									<div class="product-ratings">--}}
                        {{--										<span class="ratings" style="width:60%"></span><!-- End .ratings -->--}}
                        {{--									</div><!-- End .product-ratings -->--}}

                        {{--									<a href="#" class="rating-link">( 6 Reviews )</a>--}}
                        {{--								</div><!-- End .ratings-container -->--}}

                        <hr class="short-divider">

                        <div class="price-box">
                            <span class="product-price">LKR {{$price}}</span>
                        </div><!-- End .price-box -->

                        <div class="product-desc">
                            <p>
                                {{$shortdes}}
                            </p>
                            <p>Stock Qty :- {{$qty}}</p>
                        </div><!-- End .product-desc -->


                        <hr class="divider">

                        <div class="product-action">
                            <div class="product-single-qty">
                                <input id="qty" class="horizontal-quantity form-control" type="text">
                            </div><!-- End .product-single-qty -->

                            <a href="#" class="btn btn-dark add-cart icon-shopping-cart"
                               onclick="addtoCart('{{$id}}','{{$name}}','{{$price}}','{{$imageUrl}}','{{$itemtype}}')"
                               title="Add to Cart">Add to Cart</a>
                        </div><!-- End .product-action -->

                        <hr class="divider mb-1">

                        <div class="product-single-share">
                            <label class="sr-only">Share:</label>

                            <div class="social-icons mr-2">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                   title="Facebook"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                   title="Twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                   title="Linkedin"></a>
                                <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                                   title="Google +"></a>
                                <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                   title="Mail"></a>
                            </div><!-- End .social-icons -->

                            {{--									<a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>--}}
                        </div><!-- End .product single-share -->
                    </div><!-- End .product-single-details -->
                </div><!-- End .row -->
            </div><!-- End .product-single-container -->

            <div class="product-single-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content"
                           role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                         aria-labelledby="product-tab-desc">
                        <div class="product-desc-content">
                            <p>{{$longdes}}</p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-single-tabs -->

            <div class="products-section pt-0">
                <h2 class="section-title">Related Products</h2>

                <div class="products-slider owl-carousel owl-theme dots-top">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-14.jpg')}}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-20%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-13.jpg')}}">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-12.jpg')}}">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-11.jpg')}}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-10.jpg')}}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-9.jpg')}}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-30%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="{{ URL::asset('assets/images/products/product-8.jpg')}}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-20%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i
                                        class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .products-slider -->
            </div><!-- End .products-section -->
        </div><!-- End .container -->
    </main><!-- End .main -->
    @include('footer')
</div><!-- End .page-wrapper -->

@include('other-content')


</body>
<script>
    function addtoCart(newid, name, price, image,itemtype) {

        let qty = $('#qty').val();
        price=parseFloat(price);
        let item1 = {
            id: newid,
            name: name,
            price: price,
            qty: qty,
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
                let aitemtype = response["itemtype"];
                if (id==newid){
                    result=false;
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty+qty,
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
</script>
</html>
