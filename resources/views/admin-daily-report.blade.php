@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    DashBoard
@endsection

{{-- This Page Css --}}
@section('css')
    <!--=========================*
           AM Chart
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/am-charts/css/am-charts.css')}}" type="text/css" media="all"/>

    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/morris-bundle/morris.css')}}">
@endsection

@section('main-content')


    <div class="row">
        <!-- Primary table -->
        <div class="col-12 mt-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h4 class="header-title">Retailer Report</h4>
                    <div class="form-row" style="display: inline;">
                        <div class="col-md-5 mb-3" style="display: inline-block; ">
                            <label for="retailerselect" style="display: block;">Select Retailer</label>
                            <select id='retailerselect' name="retailerselect" style='width: 300px;'>
                                <option value='none'>Select Retailer</option>
                                <option value='Abans'>Abans</option>
                                <option value='Singer'>Singer</option>
                            </select>
                        </div>
                        <div class="col-md-5 mb-3" style="display: inline-block;">
                            <label for="selectdate">Select Date</label>
                            <input type="date" id="selectdate" name="selectdate" class="form-control"
                                   style='width: 300px;'
                                   placeholder="Select Date" required>
                        </div>
                        <div class="col-md-2 mb-3" style="display: inline-block; ">
                            <button id="search_button" onclick="loadsearchresult()" type="button"
                                    style="display: inline-block;" class="btn btn-primary "
                                    style="display: inline-block;"><i class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Item Name</th>
                                <th>Order Qty</th>
                                <th>Order Address</th>
                                <th>Full Amount</th>
                                <th>Order Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            @foreach($data as $datas)--}}
                            {{--                                <tr>--}}
                            {{--                                    <td>{{$datas->suppliername}}</td>--}}
                            {{--                                    <td>{{$datas->contactnumber}}</td>--}}
                            {{--                                    <td>{{$datas->email}}</td>--}}
                            {{--                                    <td>{{$datas->address}}</td>--}}
                            {{--                                    <td>{{$datas->supplierapiurl}}</td>--}}

                            {{--                                    <td>--}}
                            {{--                                        --}}{{--                                        <button type="button" id="{{$datas->id}}" title="Delete Supplier" class="btn btn-secondary btn-warning" onclick="deleteSupplier('{{$datas->id}}')"><i class="icon ion-trash-a"></i></button>--}}
                            {{--                                        <button type="button" id="{{$datas->id}}" title="Edit Supplier" class="btn btn-secondary btn-success" onclick="updateSupplier('{{$datas->id}}','{{$datas->suppliername}}','{{$datas->contactnumber}}','{{$datas->email}}','{{$datas->address}}','{{$datas->supplierapiurl}}')" ><i class="icon ion-more"></i></button>--}}
                            {{--                                    </td>--}}
                            {{--                                </tr>--}}
                            {{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Primary table -->
    </div>









@endsection

@section('js')
    <script>
        $("#retailerselect").select2();
        Table = $('#dataTable2').DataTable({
            data:[],
            "columns": [
                {"data": "OrderId"},
                {"data": "customer"},
                {"data": "contact"},
                {"data": "item"},
                {"data": "qty"},
                {"data": "orderAddress"},
                {"data": "fullAmount"},
                {"data": "date"},

            ],
            rowCallback: function (row, data) {},
            filter: true,
            info: false,
            ordering: true,
            processing: true,
            retrieve: true
        });


        function loadsearchresult(){

            $.ajax({
                url: baseurl+"api/search/retailer-data",
                type: "post",
                data: { retailer: $("#retailerselect").val(),selectdate :$('#selectdate').val() }
            }).done(function (result) {
                Table.clear().draw();
                Table.rows.add(result).draw();
            }).fail(function (jqXHR, textStatus, errorThrown) {
                // needs to implement if it fails
            });
        }


    </script>



@endsection

