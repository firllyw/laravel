@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <section class="content">
        <!-- CREATE FORM -->
        <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Search</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('usersAccess.store') }}">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <label>User</label>
                            </div>
                            <div class="form-group">
                                <label>Module</label>
                            </div>
                            <button class="btn btn-primary btn-flat" type="submit">Search</button>
                        </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
    @include('layouts.notification')

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="{{route('materials.create')}}" class="btn btn-primary btn-flat">Add New Material</a>
                        <br>
                        <table id="table1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Material Name</th>
                                <th>Stock</th>
                                <th>Unit</th>
                                <th>Length</th>
                                <th>Width</th>
                                <th>Weight</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( as )
                                
                            @endforeach
                            @foreach($items as $item)
                                <tr>
                                    <td>{{$item['title']}} </td>
                                    <td>{{$item['stock']}}</td>
                                    <td>{{$item['unit']['title']}}</td>
                                    <td>{{$item['length']}}</td>
                                    <td>{{$item['width']}}</td>
                                    <td>{{$item['weight']}}</td>
                                    <td>{{$item['updated_at']}}</td>
                                    <td>
                                        <a class="btn btn-success btn-flat"
                                           href="{{route('materials.edit', $item['id'])}}"><i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-warning btn-flat"
                                           href="{{route('materials.destroy', $item['id'])}}"><i
                                                    class="fa fa-trash-o"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Module Access</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
