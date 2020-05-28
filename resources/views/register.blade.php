@extends('layouts.layout')

 
@section('content')

<div id="register" style="height:100vm">
    @if (count($errors) > 0)
    <div class="alert alert-danger" style="z-index:1;position:absolute;top:100px; right:80px;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/register" class="reg  was-validated" method="post">

        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        <div class="col">
            <div class="form-group row ">
                <label for="fname"> Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Full Name" name="name" required>
            </div>
            <div class="form-group row    ">
                <label for="pwd"> email:</label>
                <input type="email" class="form-control" id="email" placeholder=" " name="email" required>
            </div>
            <div class="form-group row">
                <label for="pwd">contact:</label>
                <input type="text" class="form-control" id="contact" placeholder=" " name="contact" required>
            </div>
            <div class="form-group row">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder=" " name="password" required>
            </div>
            <div class="form-group row">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="Repassword" placeholder=" " name="password_confirmation" required>
            </div>
        </div>
        <!-- 2nd row-->

        <input type="submit" name="register" class="btn btn-primary" value="Submit">

        <br><br><br>
    </form>

</div> 
@endsection