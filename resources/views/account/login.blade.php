@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
        <!-- Login proceeds from here -->
<div class="login_sec">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{action('VisitorController@register')}}">Home</a></li>
            <li class="active">Login</li>
        </ol>
        <h2>Login</h2>
        <div class="col-md-6 log">
            <p>Welcome, please enter the following to continue.</p>
            <p>If you have previously Login with us, <span>click here</span></p>
            @include('partials/errors')
           @include('partials/loginform')

        </div>
        <div class="col-md-6 login-right">
            <h3>NEW REGISTRATION</h3>
            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
            <a class="acount-btn" href="{{action('VisitorController@register')}}">Create an Account</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end of login section -->

@stop
@section('footer')
 @include('footer')
@stop