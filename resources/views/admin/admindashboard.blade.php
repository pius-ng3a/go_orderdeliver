@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
    <div class="container container-fluid">
        <div class="row row-offcanvas row-offcanvas-left " >
            @include('partials/dashboardleftcolumn')
            <ul class="nav nav-sidebar">
                <li><a href=""> </a></li>
                <li><a href=""> </a></li>

            </ul>
        </div><!--/span-->

    @include('partials.admincenterleft')
    @include('partials.admincenterright')
@stop
@section('footer')
    @include('footer')
@stop