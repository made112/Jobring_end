@extends('layouts.admin_layout')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sub_Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sub_Category</h3>
                {{--                <a href="{{url('/admin/add-edit-section')}}" style="max-width: 150px; float:right;display: inline-block;" class="btn btn-block btn-success" >Add Category</a>--}}
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                    <tr>

                        <th>name</th>
                        <th>Category</th>
                        <th>operation</th>

                    </tr>
                    </thead>
                    <tbody>
                    @isset($sub_category)
                        @foreach($sub_category as $Cat)

                            <tr>


                                <td>{{$Cat->name}}</td>
                                <td>{{$Cat->category->name}}</td>
                                <td> <a href="{{route('admin.sub_category.edit',$Cat->id)}}" class="btn btn-success" >Edit </a>
                                    <a href="{{route('admin.sub_category.delete',$Cat->id)}}" class="btn btn-danger" >Delete </a></td>

                                @endforeach

                                @endisset






                            </tr>




                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->


@endsection
