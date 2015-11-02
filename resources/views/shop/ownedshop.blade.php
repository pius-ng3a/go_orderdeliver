@extends('app')
@section('header')
    @include('menu')
@endsection
@section('content')
<div class="container container-fluid">
        <div class="row row-offcanvas row-offcanvas-left " >
            @include('partials/dashboardleftcolumn')
            <ul class="nav nav-sidebar">

                <li><a href=""> </a></li>
                <li><a href=""> </a></li>
                <li><a href=""> </a></li>
            </ul>
        </div><!--/span-->

    <div class="row">
        <!-- replaces admin center left-->
        <div class="col-md-6">
            <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>

            <hr>
            <div class="panel panel-default">
                <h1 class="well well-lg">Shops Owned by {{Auth::user()->first_name }} {{Auth::user()->last_name }} </h1>
                @if(count($shops)>0)
                    @foreach( $shops as $shop )
                        <div class="container-fluid">
                            <div class=" seller-grid ">
                              <div class="col-md-6">
                                  <a href="{!! '/images/shop/'.$shop->picture !!}"><img src="{{URL::asset('images/shop/'. $shop->picture )}}"></a>
                                  <div><h4><strong>Shop Name:  </strong>{{$shop->shop_name}} </h4></div>
                              </div>
                              <div class="col-md-6">

                                  <div><p> <strong>Address:  </strong>{{$shop->address}}</p></div>
                                  <div><p><strong>Descriiption: </strong>{{$shop->description}}</p></div>
                                  <div><p><strong>Email:  </strong>{{$shop->email}}</p></div>
                                  <div><p><strong>Phone:  </strong>{{$shop->phone_num}}</p></div>
                              </div>
                            </div>
                        </div>
                        <div><br/></div>
                    @endforeach
                    @else
                        <div> <h5 style="text-align: center"></h5><p>You currently don't have a registered shop with us!!</p></div>
                @endif
            </div>
        </div>

    @include('partials/admincenterright')

@endsection
@section('footer')
    @include('footer')
@endsection