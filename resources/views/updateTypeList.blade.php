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
    @if(session('deleteUpdateTypeMsg'))
        <div class="alert alert-success" style="margin:1% 1.4%;">
            {{session('deleteUpdateTypeMsg')}}
        </div>
    @endif
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Type List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Update Type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $a=0;
                                while ($a<count($updateTypeList)){  ?>
                                <tr>
                                    <td>{{$updateTypeList[$a]->id}}</td>
                                    <td>{{$updateTypeList[$a]->type}}</td>

                                    <td> <a href="{{route('showEditUpdateType',$updateTypeList[$a]->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                                    <td>
                                        <form action="{{route('deleteUpdateType')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="updateTypeId"  value="{{$updateTypeList[$a]->id}}">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php  $a++; }
                                ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
@endsection
