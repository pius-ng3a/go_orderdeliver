@extends('app')
@section('header')
    @include('menu')
@endsection
@section('content')
    <div class="product-model">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Products</li>
            </ol>
            <h2>OUR PRODUCTS</h2>
            <div class="col-md-9 product-model-sec">
            @if(count($Items)>0)
              @include('partials.itempartial')
            @endif

@endsection