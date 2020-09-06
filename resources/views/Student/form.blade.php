
@extends('layouts.front_layout')
@section('request')
<section id="form" style="margin-top:20px;"><!--form-->
        <div class="container">
            <div class="row">


                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form" >
                        <br>
                        <br>

                        <h2> send request  </h2>
                        <br>
                        <form id="accountForm" name="accountForm"  action="{{route('email.send')}}" method="POST">
                            @csrf

                            <input  id="name" name="name" value="" class="form-control" type="text" placeholder="Name"/>
                            <br>

                            <input  id="file" name="image" class="form-control" type="file" placeholder="Address"/>
                            <br>


                            <button type="submit" class="btn btn-danger">Post</button>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>


    </section><!--/form-->
@stop
