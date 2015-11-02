@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
<div class="container">
    @if(Session::has('logged_in'))
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> </button>
        <div class=" alert alert-success">{{ Session::get('logged_in') }}</div>

    @elseif(Session::has('success'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> </button>
            <div class=" alert alert-success">{{ Session::get('success') }}</div>
    @endif
</div>
<div class="container container-fluid">
           <div class="row row-offcanvas row-offcanvas-left " >
                      @include('partials/dashboardleftcolumn')
                           <ul class="nav nav-sidebar">
                           <li><a href=""> </a></li>
                           <li><a href=""> </a></li>


                      </ul>
            </div><!--/span-->

            @include('partials/admincenterleft')
            @include('partials.admincenterright')
@stop
@section('footer')
    <script>
      $('div.alert').delay(7000).slideUp(500);
    </script>
    @include('footer')
@stop