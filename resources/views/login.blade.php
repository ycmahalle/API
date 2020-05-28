@extends('layouts.layout')

@section('title','Log In')


@section('content')

<div id="login" style="height:100vm">
    @if (count($errors) > 0)
    <div class="alert alert-danger" style="z-index:1;position:absolute;top:100px; right:80px;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/login" class="reg  was-validated" method="post">

        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        <div class="col">
            <div class="form-group row    ">
                <label for="pwd"> email:</label>
                <input type="email" class="form-control" id="email" placeholder=" " name="email" required>
            </div>
            <div class="form-group row">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder=" " name="password" required>
            </div>
        </div>
        <!-- 2nd row-->

        <input type="submit" name="login" class="btn btn-primary" value="Log In">

        <br><br><br>
    </form>

</div>
@endsection