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
                    <img src="{{ URL::asset('assets/images/bannernew/dell.jpg')}}" style="height: 250px" alt="desc"
                         width="1000">

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
                    <li class="breadcrumb-item active" aria-current="page">Order History</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">ORDER HISTORY</h4>
                        <div class="table-responsive datatable-primary">
                            <table id="dataTable2" class="text-center">
                                <thead class="text-capitalize">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item Name</th>
                                    <th>Order Qty</th>
                                    <th>Retailer Name</th>
                                    <th>Order Date</th>
                                    <th>Order Address</th>
                                    <th>Full Amount</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{$datas->id}}</td>
                                        @foreach($datas->orderDetailsModels as $orderDetailsModel)
                                            @foreach($item as $items)
                                                @if($orderDetailsModel->item==$items->id)
                                                    <td>{{$items->name}}</td>
                                                @endif
                                            @endforeach
                                                <td>{{$orderDetailsModel->qty}}</td>
                                                <td>{{$orderDetailsModel->itemtype}}</td>
                                        @endforeach
                                        <td>
                                        <?php
                                            echo date('Y-m-d h:i:s',strtotime($datas->date))
                                            ?>
                                        </td>
                                        <td>{{$datas->orderAddress}}</td>
                                        <td>{{$datas->fullAmount}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End .container -->
    </main><!-- End .main -->
    @include('footer')
</div><!-- End .page-wrapper -->

@include('other-content')


</body>
<script>
    Table = $('#dataTable2').DataTable();
</script>
</html>
