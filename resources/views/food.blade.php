@extends('app')
@section('header')
    @include('menu')
   <!--code to retrieve and display items; -->
@stop
@section('content')
	<?php $c=0; $a=0; ?>
	<div class="product-model ">
		<div class="container ">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Products</li>
			</ol>
			<h2>OUR PRODUCTS</h2>
			@if(count($items)==0)
				<p>No products in Your shop of the specified category!</p>
			@endif
			{{--@foreach($shops as $shop)

			@endforeach--}}

			<div class="col-md-12 ">

				<div class="row  ">
					@foreach($items as $item)
						<?php $c++; $r= $c %3;  ?>
						<div class="col-md-3  item1 ">
							{!! Form::open(['route'=>'show_products']) !!}
							<a href="single.html"><div class=" love-grid">
									<div class="more-product"><span> </span></div>
									<div class=" b-link-stripe b-animate-go  thickbox">
										<img src="{{asset('images/'.$item->category.'/'.$item->picture)}}" class="img-responsive" alt="directory not found!" height="100%" width="100%"/>
 									<div class="b-wrapper">
											<h4 class="b-animate b-from-left  b-delay03">
												<button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
											</h4>
										</div>
									</div>
								</div>
							</a>

							{{--image ends here--}}

							{{-- product details --}}
							<div class="product-info simpleCart_shelfItem">
								<div class="product-info-cust prt_name">
									{!! Form::text('item_id',$item->item_id,['hidden'] ) !!}
									<h4> {{$item->item_name}}</h4>

									{!! Form::text('shop_id',$item->shops_shop_id,['hidden'] ) !!}
									<p >Company  </p>
									<h5><p name="shop_name">{{$item->shop_name}}</p></h5>
									<h4>Unit Price: USD</h4>
									<span class="item_price" name="unit_price"> {{$item->unit_price}}</span>
									<input name="quantity" type="text" class="item_quantity" value="1" size="10" />
									<input type="button" class="item_add items" value="ADD">
								</div>
								<div class="clearfix"> </div>
							</div>
							{{-- End of details --}}
							{!! Form::close() !!}

						</div>
						@if($r == 0)

								<div class="col-md-2 p-separation ">{{--adverts start--}}
									<?php $a++ ?>
									<p> advert &nbsp;&nbsp;</p> <?php echo $a; ?>
								</div>
							</div>




							<br/>
							<hr/>
							<div class="row ">
						@endif
			@endforeach</div>
		</div>
	</div>




@stop
@section('footer')
    @include('footer')
@stop