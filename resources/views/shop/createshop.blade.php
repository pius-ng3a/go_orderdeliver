@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
<dev class="container">
    <div class="container-fluid">
       <div class="row row-offcanvas row-offcanvas-left " >
       <!-- Left column -->
           @include('partials/dashboardleftcolumn')


           </div><!--/span-->




      <!-- center and right panel -->
        <div class="row">
            <!-- center left-->
            <div class="col-md-6">
                <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>

                <hr>

                <hr>
               
         <div class="shop-head">
            
@if(Session::has('description'))
    <div class="alert alert-info">
      {{Session::get('description')}}
    </div>
@endif
   @include('partials/errors')
{{--shop form starts here --}}
    <div class="row">
        <div ><h3><strong>Create Shop</strong></h3></div>
        <p></p>
        {!! Form::open(array('route' => 'shop_store', 'class' => 'form','files'=>true)) !!}
        @include('shop/shopform',['submit'=>'Create Shop','modified'=>'created_at',])
    </div>
 {{--form ends here --}}
    <!--/panel-body-->
                    <!--tabs-->

            </div>

            {{-- statistics section <div class="col-md-6">--}}

             @include('partials/admincenterright')
            {{--end of statistics part--}}
    <!--/col-span-9-->
@stop
@section('footer')
    @include('footer')
@stop