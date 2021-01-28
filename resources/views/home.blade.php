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
    <link rel="stylesheet" href="{{asset('assets/vendors/am-charts/css/am-charts.css')}}" type="text/css" media="all" />

    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{asset('assets/vendors/charts/morris-bundle/morris.css')}}">
@endsection

@section('main-content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Supplier Details</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group wd-xs-300">
                                    <label class="form-control-label">Supplier Name : <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" id="suppliername" name="suppliername" class="form-control"
                                           placeholder="Full Name" required>
                                    <div id="suppliernameerror" class="abc d-none">
                                        <p style="color:red;">Please Enter Valid Full Name</p>
                                    </div>
                                </div><!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label class="form-control-label">Contact Number : <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" id="contactnumber" name="contactnumber" class="form-control"
                                           placeholder="Contact Number" required>
                                    <div id="contactnumbererror" class="abc d-none">
                                        <p style="color:red;">Please Enter Valid Contact Number</p>
                                    </div>
                                </div><!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label class="form-control-label">Email Address : <span
                                            class="tx-danger">*</span></label>
                                    <input type="email" id="emailaddress" name="emailaddress" class="form-control"
                                           placeholder="Email Address "
                                           required>
                                    <div id="emailaddresserror" class="abc d-none">
                                        <p style="color:red;"> Please Enter Valid Email Address</p>
                                    </div>
                                </div><!-- form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group wd-xs-300">
                                    <label class="form-control-label">Address : <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" id="address" name="address" class="form-control"
                                           placeholder="Address" required>
                                    <input type="text" id="supplierid" name="supplierid" class="form-control d-none"
                                           placeholder="supplierid" required>
                                    <div id="addresserror" class="abc d-none">
                                        <p style="color:red;">Please Enter Valid Address </p>
                                    </div>
                                </div><!-- form-group -->
                                <div class="form-group wd-xs-300">
                                    <label class="form-control-label">API URL : <span
                                            class="tx-danger">*</span></label>
                                    <input type="text" id="apiurl" name="apiurl" class="form-control"
                                           placeholder="API URL" required>
                                    <div id="apiurlerror" class="abc d-none">
                                        <p style="color:red;">Please Enter Valid API URL </p>
                                    </div>
                                </div><!-- form-group -->
                            </div>

                        </div>
                        <button  class="btn btn-success" disabled id="updatesupplier-function" type="button" onclick="updateSupplierFunction()" data-style="expand-left">
                            <span class="ladda-label">Update</span>
                        </button>
                        <button  class="btn btn-dark" id="closebtn" type="button" onclick="clearAllData()" data-style="expand-left">
                            <span class="ladda-label">Close</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Primary table -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Supplier Details</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                            <tr>
                                <th>Supplier Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>API URL</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datas)
                                <tr>
                                    <td>{{$datas->suppliername}}</td>
                                    <td>{{$datas->contactnumber}}</td>
                                    <td>{{$datas->email}}</td>
                                    <td>{{$datas->address}}</td>
                                    <td>{{$datas->supplierapiurl}}</td>

                                    <td>
{{--                                        <button type="button" id="{{$datas->id}}" title="Delete Supplier" class="btn btn-secondary btn-warning" onclick="deleteSupplier('{{$datas->id}}')"><i class="icon ion-trash-a"></i></button>--}}
                                        <button type="button" id="{{$datas->id}}" title="Edit Supplier" class="btn btn-secondary btn-success" onclick="updateSupplier('{{$datas->id}}','{{$datas->suppliername}}','{{$datas->contactnumber}}','{{$datas->email}}','{{$datas->address}}','{{$datas->supplierapiurl}}')" ><i class="icon ion-more"></i></button>
                                    </td>
                                </tr>
                            @endforeach
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
        Table = $('#dataTable2').DataTable();
        function validateSubject() {
            let result = false;
            let regExp = /^[a-zA-Z\s]*$/;
            $('#subjectname').css('border-color', 'red');
            if (!($('#subjectname').val() == null || $('#subjectname').val() == "") && $('#subjectname').val().trim().match(regExp)) {
                $('#subjectname').css('border-color', '');
                $('#subjectnameerror').addClass('d-none');
                result = true;
            } else {
                $('#subjectnameerror').removeClass('d-none');
                $('#subjectname').css('border-color', 'red');

                result = false;
            }

            return result;
        }

        function validateSubjectScheme() {
            let result = false;
            if ($('#subjectscheme').val() == "none") {

                $('#subjectschemeerror').removeClass('d-none');
                $('#subjectscheme').css('border-color', 'red');
                result = false;
            } else {
                $('#subjectscheme').css('border-color', '');
                $('#subjectschemeerror').addClass('d-none');
                result = true;

            }
            return result;
        }





        function updateSupplierFunction() {

            let supid=$('#supplierid').val();



            let form_data = new FormData();
            form_data.append("_token", "{{ csrf_token() }}");
            form_data.append("suppliername", $('#suppliername').val().trim());
            form_data.append("address", $('#address').val().trim());
            form_data.append("email", $('#emailaddress').val().trim());
            form_data.append("contactnumber", $('#contactnumber').val().trim());
            form_data.append("supplierapiurl", $('#apiurl').val().trim());

            let jsons=JSON.stringify({"suppliername":$('#suppliername').val().trim(),"address":$('#address').val().trim(),"email":$('#emailaddress').val().trim(),"contactnumber":$('#contactnumber').val().trim(),"supplierapiurl":$('#apiurl').val().trim()});



            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if(true) {

                $.ajax({
                    url: baseurlAPI +'supplier/'+supid ,
                    method: 'PUT',
                    data: jsons,
                    async: true,
                    processData: false,
                    contentType: 'application/json',
                    success: function (result) {
                        toastr.success('Supplier Updated Successfully !', 'Success ! ');
                        clearAllData();

                        location.reload();
                    },
                    error: function (error) {
                        toastr.error('Supplier Updated Fail !', 'Error ! ');


                    }
                });
            }else{
                toastr.error('Something Went Wrong!', 'Error ! ');
            }
        }

        function clearAllData() {

            $('#updatesupplier-function').prop('disabled', true);
            $('#suppliername').val('');
            $('#contactnumber').val('');
            $('#emailaddress').val('');
            $('#address').val('');
            $('#apiurl').val('');
            $('#supplierid').val('');
        }


        function updateSupplier(id,suppliername,contactnumber,email,address,supplierapiurl) {
            $('#suppliername').val(suppliername);
            $('#contactnumber').val(contactnumber);
            $('#emailaddress').val(email);
            $('#address').val(address);
            $('#apiurl').val(supplierapiurl);
            $('#supplierid').val(id);
            $('#updatesupplier-function').prop('disabled', false);


        }



    </script>



@endsection

