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
                        <h1 class="well well-lg">Shop Owner: {{Auth::user()->first_name }} {{Auth::user()->last_name }} </h1>
                            @if(count($shops)>0)
                                @foreach( $shops as $shop )
                                    <div class="row">
                                        <div ><h3><strong>{!! trans('pagination.updateshop') !!} </strong></h3></div>
                                        <p></p>
                                        {!! Form::model($shop,array('route' => 'save_update', 'class' => 'form','files'=>true)) !!}

                                        {!! Form::text('shop_id',null ) !!}
                                        @include('shop/shopform',['submit'=>'Update Shop','modified'=>'updated_at'])
                                    </div>

                                @endforeach
                            @else
                                <div> <h5 style="text-align: center"></h5><p>You currently don't have a registered shop with us!!</p></div>
                                @endif


                        {{--form ends here --}}
                        <!--/panel-body-->
                        <!--tabs-->

                    </div>

                    {{-- statistics section <div class="col-md-6">--}}
                    @include('partials/admincenterright')
                  {{--end of statistics section--}}
            <!--/col-span-9-->
@stop
@section('footer')
    @include('footer')
@stop