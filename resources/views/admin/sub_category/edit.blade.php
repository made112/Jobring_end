@extends('layouts.admin_layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>SubCategory</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit SubCategory</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->

        <section  class="content" >
            <div class="container-fluid">
                @include('admin.includes.alerts.success')
                @include('admin.includes.alerts.errors')

                <form method="post" name="sectionForm" id="sectionForm"
                      action="{{route('admin.sub_category.update',$Sub_Category->id)}}">
                    @csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">SUB_Category Name</label>
                                        <input name="name"  value="{{$Sub_Category->name}}" type="text" class="form-control" >

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>                         <br>


                        <label for="projectinput2"> choose category </label>

                        <select name="category_id" class=" form-control">
                            <optgroup >
                                @if($category-> count() > 0)
                                    @foreach($category as $cat)
                                        <option
                                            value="{{$cat-> category-> id }}"
                                        >{{$cat->category->  name}}</option>
                                    @endforeach
                                @endif
                            </optgroup>
                        </select>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
@endsection
