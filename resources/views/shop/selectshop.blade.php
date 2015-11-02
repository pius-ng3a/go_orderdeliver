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
                        <h1 class="well well-lg"> {{Auth::user()->first_name }} Select Shop to Edit </h1>
                        <div class="row">
                            @if(count($shops)>0)
                                @foreach($shops as $shop)
                                    <div class="row">
                                        {!! Form::open(['route'=>'select_shop']) !!}
                                        <div class="col-md-4">
                                            <h4>Shop Name:
                                                {!! Form::text('shop_name',$shop->shop_name) !!}
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Shop ID:
                                                {!! Form::text('shop_id',$shop->shop_id) !!}
                                            </h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Date Created:
                                                {!! Form::text('created_at',$shop->created_at,['type'=>'date']) !!}
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                            {!! Form::label('   ',null,['type'=>'hidden']) !!}
                                            </div>
                                            <h4>
                                            {!! Form::submit('Update!',['id'=>'register-submit ']) !!}
                                            </h4>
                                        </div>
                                        <hr>
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                            @else
                                <div> No Registered shops in the database!!</div>
                            @endif




                             <p></p>
                             {!! Form::open(array('route' => 'select_shop', 'class' => 'form') )!!}
                                <select name="shop_name">
                                    @if($shops>0)
                                        @foreach($shops as $shop)
                                            <option value="{{$shop->shop_name}}">{{$shop->shop_name}}</option>

                                        @endforeach
                                    @endif
                                </select>
                                {!! Form::submit('Submit') !!}
                                {!! Form::close() !!}
                        </div>
                    {{--form ends here --}}

                    </div>
                  </div>

                    {{-- statistics section <div class="col-md-6">--}}
                    @include('partials/admincenterright')
                    {{--end of statistics section--}}
                            <!--/col-span-9-->
@stop
@section('footer')
    @include('footer')
@stop