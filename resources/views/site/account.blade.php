<!doctype html>

<html class="no-js" lang="ar">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
    <section id="form" style="margin-top:20px;"><!--form-->
        <div class="container">
            <div class="row">


                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form" >
                        <br>
                        <br>

                        <h2>Complete Account to use the site </h2>
                        <br>
                        <form id="accountForm" name="accountForm"  action="{{route('update.account')}}" method="POST">
                            @csrf
{{--                            <input  id="email" value="{{$details->email }}" name="email" class="form-control" type="email" placeholder="Email" />--}}
                            <br>
{{--                            <input  id="name" name="name" value="{{$details->name}}" class="form-control" type="text" placeholder="Name"/>--}}
                            <br>
                            <input  id="address" name="address" class="form-control" type="text" placeholder="Address"/>
                            <br>
                            <input  id="city" name="city" type="text" class="form-control" placeholder="City"/>
                            <br>
                            <input  id="state" name="state" type="text" class="form-control" placeholder="State"/>
                            <br>
                            <select id="country" name="country" class="form-control">
                                @foreach($Country as $Count)
                                <option value="{{$Count->name}}">{{$Count->name}}</option>
                                @endforeach
                            </select>
                            <br>                            <br>

                            <input  style="margin-top: 10px;" id="pincode" name="pincode" type="text" placeholder="Pincode" class="form-control"/>
                            <br>
                            <input  id="mobile" name="mobile" type="text" placeholder="Mobile" class="form-control"/>

                            <br>
                            <button type="submit" class="btn btn-danger">Update</button>
                        </form>
                    </div>
                </div>
                <br>

                <div class="col-sm-5">
                    <div class="signup-form">

                        <br>                        <br>
                        <br>
                        <br>
                        <h1 style="text-align: center;font-size: 26px;color: red ; position: relative;right: 340px;" >OR</h1>
<br>

    </section><!--/form-->

</html>
