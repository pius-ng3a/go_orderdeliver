@extends('app')
@section('header')
    @include('menu')
@endsection
@section('content')
<?php $c=0; ?>
<div class="row">
   <div class="product-model ">
       <div class="container well">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Products</li>
          </ol>
          <h2>OWNED PRODUCTS</h2>
          @if(count($items)==0)
              <p>No products in Your shop of the specified category!</p>
          @endif
          @foreach($shops as $shop)
          @endforeach
          {{-- product display here --}}
          <div class="col-md-9 ">
             @foreach($items as $item)
                  <?php $r = $c % 3; $c++; ?>
                  @if($r == 0)
                     <div class="row">
                         <div    >
                              {!! Form::open(['route'=>'product_category']) !!}
                                 <a href="single.html"><div class="product-grid love-grid">
                                   <div class="more-product"><span> </span></div>
                                       <div class=" b-link-stripe b-animate-go  thickbox">
                                           <img src="{{asset('images/'.$item->category.'/'.$item->picture)}}" class="img-responsive" alt="directory not found!" height="50px" width="450px"/>
                                           <div class="b-wrapper">
                                              <h4 class="b-animate b-from-left  b-delay03">
                                                  <button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
                                              </h4>

                                       </div>
                                   </div>
                                 </a>
                                 {{-- product details --}}
                                 <div class="product-info simpleCart_shelfItem">
                                    <div class="product-info-cust prt_name">
                                        {!! Form::text('item_id',$item->item_id,['hidden'] ) !!}
                                        <h4> {{$item->item_name}}</h4>
                                        {!! Form::text('shop_id',$item->shops_shop_id,['hidden'] ) !!}
                                        <p >Company  </p>
                                        <h5><p name="shop_name">{{$shop->shop_name}}</p></h5>
                                        <h4>Unit Price: USD</h4>
                                        <span class="item_price" name="unit_price"> {{$item->unit_price}}</span>
                                        <input name="quantity" type="text" class="item_quantity" value="1" />
                                        <div class="row">
                                           <div class="col-md-6">
                                              <input type="button" class="item_add items" value="ADD">
                                           </div>
                                           <div class="col-md-6">
                                              {!! Form::submit('BUY') !!}
                                           </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                 </div>{{-- End of details --}}
                              {!! Form::close() !!}
                         </div>
                     </div>
                  @else
                  <div>
                      {!! Form::open(['route'=>'product_category']) !!}
                      <a href="single.html"><div class="product-grid love-grid">
                              <div class="more-product"><span> </span></div>
                              <div class=" b-link-stripe b-animate-go  thickbox">
                                  <img src="{{asset('images/'.$item->category.'/'.$item->picture)}}" class="img-responsive" alt="directory not found!" height="50px" width="450px"/>
                                  <div class="b-wrapper">
                                      <h4 class="b-animate b-from-left  b-delay03">
                                          <button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
                                      </h4>

                              </div>
                          </div>
                      </a>
                      {{-- product details --}}
                      <div class="product-info simpleCart_shelfItem">
                          <div class="product-info-cust prt_name">
                              {!! Form::text('item_id',$item->item_id,['hidden'] ) !!}
                              <h4> {{$item->item_name}}</h4>
                              {!! Form::text('shop_id',$item->shops_shop_id,['hidden'] ) !!}
                              <p >Company  </p>
                              <h5><p name="shop_name">{{$shop->shop_name}}</p></h5>
                              <h4>Unit Price: USD</h4>
                              <span class="item_price" name="unit_price"> {{$item->unit_price}}</span>
                              <input name="quantity" type="text" class="item_quantity" value="1" />
                              <div class="row">
                                  <div class="col-md-6">
                                      <input type="button" class="item_add items" value="ADD">
                                  </div>
                                  <div class="col-md-6">
                                      {!! Form::submit('BUY') !!}
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"> </div>
                      </div>{{-- End of details --}}
                      {!! Form::close() !!}
                  </div>
             </div>
          @endif
       @endforeach
       </div> {{--end of col-9 --}}
        {{-- aside for adverts --}}
          <div class="col-md-3">
               <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Adverts </h4>
               <section  class="sky-form">
                   <div class="product_right">
                       <p>This is all we have for adverts. No products on promotion for now.</p>  {{--code here--}}
                   </div>
               </section>
          </div>{{--end of adverts section --}}
           <div>
               <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Adverts </h4>
               <section  class="sky-form">
                   <div class="product_right">
                       <p>This is all we have for adverts. No products on promotion for now1.</p>  {{--code here--}}

                   </div>
               </section>
           </div>{{--end of adverts section --}}
           <div >
               <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Adverts </h4>
               <section  class="sky-form">
                   <div class="product_right">
                       <p>This is all we have for adverts. No products on promotion for now2.</p>  {{--code here--}}

                   </div>
               </section>
           </div>{{--end of adverts section --}}

           </div>{{--end of col-3--}}
       </div>
   </div>{{--end of first row--}}
@endsection
@section('footer')
    @include('footer')
@endsection