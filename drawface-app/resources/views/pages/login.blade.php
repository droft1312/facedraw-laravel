@extends('layouts.app')
@section('content')
<form class="container" style="margin-top: 50px;">

    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <div class="form-group">
        <h1 class="jumbotron-heading text-center">Login</h1>

        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
