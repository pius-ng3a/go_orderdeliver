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
                <div class="col-md-9">
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
                        <h1 class="well well-lg"> {{Auth::user()->first_name }} Select Item to Delete </h1>
                        <div class="row">
                            @if(count($items)>0)
                                @foreach($items as $item)
                                    <div class="row well">
                                        {!! Form::open(['route'=>'delete_product']) !!}
                                        <div class="col-md-4">
                                            <h4>Item Name:
                                                {!! Form::text('item_name',$item->item_name) !!}
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Item ID:
                                                {!! Form::text('item_id',$item->item_id) !!}
                                            </h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Date Created:
                                                {!! Form::text('created_at',$item->created_at,['type'=>'date']) !!}
                                            </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                                {!! Form::label('   ',null,['type'=>'hidden']) !!}
                                            </div>
                                            <h4>
                                                {!! Form::submit('Delete',['id'=>'register-submit ']) !!}
                                            </h4>
                                        </div>
                                        <hr>
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                            @else
                                <div> You don't currently have Registered Items in the database!!</div>
                            @endif
                            {{--form ends here --}}
                        </div>
                    </div>
                </div>
            </div>
                {{-- statistics section <div class="col-md-6">--}}

                {{--@include('partials/admincenterright')end of statistics section--}}
                        <!--/col-span-9-->
@stop
@section('footer')
    @include('footer')
@stop