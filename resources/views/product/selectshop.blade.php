@extends('app')
@section('header')
    @include('menu')
@endsection
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
                <div class="col-md-9">

                    <div class="shop-head">

                        @if(Session::has('description'))
                            <div class="alert alert-info">
                                {{Session::get('description')}}
                            </div>
                        @endif
                        @include('partials/errors')

                        <div class="row">
                            @if($shops != null)
                                <h1 class="well well-lg"> {{Auth::user()->first_name }} Select Shop with product </h1>

                                @foreach($shops as $shop)
                                    <div class="row well ">
                                        {!! Form::open(['route'=>'product_shop']) !!}

                                         @include('product/selectshopform')
                                @endforeach
                            @endif







                        </div>
                        {{--form ends here --}}

                    </div>
                </div>

                {{-- statistics section <div class="col-md-6">--}}
     </div>

@endsection
@section('footer')
    @include('footer')
@endsection