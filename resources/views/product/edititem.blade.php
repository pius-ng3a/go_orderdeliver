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

                    <div class="shop-head">

                        @if(Session::has('description'))
                            <div class="alert alert-info">
                                {{Session::get('description')}}
                            </div>
                        @endif
                        @include('partials/errors')
                        <h1 class="well well-lg">Shop Owner: {{Auth::user()->first_name }} {{Auth::user()->last_name }} </h1>
                        @if(($item)!= null)

                                <div class="row well-lg">
                                    <div ><h3><strong>{!! trans('pagination.updateprod') !!} </strong></h3></div>
                                    <p></p>
                                    <hr>
                                    <hr>
                                    {!! Form::open(array('route' => 'update_store', 'class' => 'form','files'=>true)) !!}

                                    {{--@include('partials/productform',['submit'=>'Update product'])--}}{{--,'modified'=>'updated_at'--}}{{--
                                --}}


                                    <div class="row well ">

                                        <div class="col-md-6">
                                            {!! Form::text('item_id',$item->item_id,['hidden'] ) !!}
                                            {!! Form::label('Name') !!}
                                            {!! Form::text('item_name', $item->item_name,
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'product Name')) !!}
                                            {!! Form::label('category') !!}
                                           <select name="category" >
                                                <option value="kg">fruit</option>
                                                <option value="packets">food</option>
                                                <option value="litres">furniture</option>
                                                <option value="bags">electronics</option>
                                                <option value="pieces">cosmetics</option>
                                                <option value="bottles">Dresses</option>
                                                <option value="meters">Drinks</option>
                                                <option value="gallons">species</option>
                                            </select>

                                            {!! Form::text('shops_shop_id', $item->shops_shop_id,['hidden'])!!}
                                            {!! Form::label('Search Key') !!}
                                            {!! Form::text('search_key', $item->search_key,
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'Search Key')) !!}

                                            {!! Form::label('Quantity') !!}
                                            <div class="row">
                                                <div class="col-md-9">
                                                 {!! Form::text('quantity', $item->quantity,
                                                        array('required',
                                                              'class'=>'form-control',
                                                              'placeholder'=>'Quantity')) !!}
                                                </div>
                                                <div class="col-md-3">
                                                    <select name="unit" >
                                                        <option value="kg">kg</option>
                                                        <option value="packets">packets</option>
                                                        <option value="litres">litres</option>
                                                        <option value="bags">bags</option>
                                                        <option value="pieces">pieces</option>
                                                        <option value="bottles">bottles</option>
                                                        <option value="meters">meters</option>
                                                        <option value="gallons">gallons</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {!! Form::label('Unit price') !!}
                                            {!! Form::text('unit_price', $item->unit_price,
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'Unit price')) !!}


                                            {!! Form::label('published_at', 'Edited On:') !!}
                                            {!! Form::input('date', 'updated_at',date('Y-m-d'),
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'date','type'=>'date')) !!}

                                            {!! Form::label('State') !!}
                                            <select name="state" class="form-control" >
                                                <option value="0">select state</option>
                                                <option value="1">Available for sale</option>
                                                <option value="2">Good but Not Available for sale</option>
                                                <option value="3">Bad state</option>

                                            </select>

                                            {!! Form::label('Product Description') !!}
                                            {!! Form::textarea('description', $item->description,
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'Product description')) !!}


                                            {!! Form::submit('Update Product',
                                   array('class'=>'btn btn-primary')) !!}
                                        </div>

                                        <div class="col-md-6">
                                            <div>
                                                <i class="fa fa-random"></i><img alt="140x140" id='pic' class="img-thumbnail" src="{{asset('images/'.$item->category.'/'.$item->picture)}}" height="150px"width="150px" /></i>
                                                <!--input type="button" id='uploadBtn' class="btn btn-default" value="upload"/-->
                                            </div>
                                            <label for="profilePicFile">Profile pic*</label>
                                            <input type="file" value="{{ old('profilePicFile') }}" id="profilePicFile" name="profilePicFile">
                                            <p class="help-block" style="color: red">Max Size(512Kb)</p>


                                            {!! Form::label('Discount') !!}
                                            {!! Form::text('discount', $item->discount,
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'Discount')) !!}


                                            {!! Form::label('Product Code') !!}
                                            {!! Form::text('product_code', $item->product_code,
                                                array('required',
                                                      'class'=>'form-control',
                                                      'placeholder'=>'Product_code')) !!}

                                        </div>
                                    </div>




                                </div>

                        @else
                            <div> <h5 style="text-align: center"></h5><p>You currently don't have a registered shop with us!!</p></div>
                            @endif


                            {{--form ends here --}}
                                    <!--/panel-body-->
                            <!--tabs-->
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