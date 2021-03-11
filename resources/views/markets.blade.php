@extends('layouts.dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(session('marketSuccessMsg'))
        <div class="alert alert-success" style="margin:1% 1.4%;">
            {{session('marketSuccessMsg')}}
        </div>
    @endif
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Market</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('insertMarket')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Market Name" name="marketName">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Rate</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Rate" name="marketRate">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="marketAddress">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="marketDescription">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone" name="marketPhone">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Mobile</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" name="marketMobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Information</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Information" name="marketInformation">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Delivery Fee</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Delivery Fee" name="marketDeliveryFee">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Admin Commission</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Admin Commission" name="marketAdminCommission">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Default Tax</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Default Tax" name="marketDefaultTax">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Latitude</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Latitude"  name="marketLatitude">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Longitude</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Longitude"  name="marketLongitude">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Closed</label>
                                    <select class="form-control" name="marketClosed">
                                        <option disabled selected>Closed</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Available For Delivery</label>
                                    <select class="form-control" name="marketAvailableForDelivery">
                                        <option disabled selected>Available for delivery</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Delivery Range</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Delivery Range" name="marketDeliveryRange">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Distance</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Distance" name="marketDistance">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Image Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Image Name" name="marketImageName">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
{{--                                    <label for="exampleInputEmail1">Image URL</label>--}}
{{--                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Image Url" name="marketURL">--}}
                                    <label for="exampleInputEmail1">Market Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="marketURL">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Thumb</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Thumb" name="marketThumb">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Icon</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Icon" name="marketIcon">
                                </div>
                                <div class="form-group" style="width:31%;margin:0% 1%;">
                                    <label for="exampleInputEmail1">Size</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Size" name="marketimageSize">
                                </div>
                            </div>




                            {{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputPassword1">Password</label>--}}
{{--                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputFile">File input</label>--}}
{{--                                <div class="input-group">--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <span class="input-group-text" id="">Upload</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-check">--}}
{{--                                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                            </div>--}}
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
                </div>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
