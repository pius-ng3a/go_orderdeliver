<!-- Left column -->

<div class="col-sm-3 col-md-2 sidebar-offcanvas dropdowns well" id="sidebar" role="navigation">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle active" type="button" data-toggle="dropdown">Manage Product
            <span class="caret"></span></button>
        <ul class="dropdown-menu active nav-sidebar">
            <li class="active"><a href="{{action('ProductController@create')}}">{!! trans('pagination.addprod') !!}</a></li>
            <li><a href="{{action('ProductController@pickShop1')}}">{!! trans('pagination.updateprod') !!}</a></li>
            <li><a href="{{action('ProductController@getShopWithProduct')}}">{!! trans('pagination.viewprod') !!}</a></li>
            <li><a href="{{action('ProductController@pickShop')}}">{!! trans('pagination.deleteprod') !!}</a></li>
            <li><a href="#">{!! trans('pagination.promoteprod') !!}</a></li>

        </ul>
    </div>
    <ul class="nav nav-sidebar">







    </ul>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle active" type="button" data-toggle="dropdown">Manage Shop
            <span class="caret"></span></button>
        <ul class="dropdown-menu active nav-sidebar">
            <li class="active"><a href="{{action('ShopController@create')}}">{!! trans('pagination.createshop') !!}</a></li>
            <li><a href="{{action('ShopController@showOwnedShop')}}">{!! trans('pagination.viewshop') !!}</a></li>
            <li><a href="{{action('ShopController@pickShop')}}">{!! trans('pagination.updateshop') !!}</a></li>

        </ul>
    </div>
    <ul class="nav nav-sidebar">









    </ul>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle active" type="button" data-toggle="dropdown">Manage Profile
            <span class="caret"></span></button>
        <ul class="dropdown-menu active nav-sidebar">
            <li><a href="">{!! trans('pagination.updateprofile') !!}</a></li>
        </ul>
    </div>
    <ul class="nav nav-sidebar">









    </ul>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle active" type="button" data-toggle="dropdown"> Product categories
            <span class="caret"></span></button>
        <ul class="dropdown-menu active nav-sidebar">{{--pick roles from database and actions --}}
            <li class="active"><a href="{{action('ProductController@create')}}">{!! trans('pagination.addprod') !!}</a></li>


        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle active" type="button" data-toggle="dropdown">Newsletters
            <span class="caret"></span></button>
        <ul class="dropdown-menu active nav-sidebar">
            <li><a href="">{!! trans('pagination.postletter') !!}</a></li>
            <li><a href="">View Previous Letters </a></li>
            <li><a href="">More navigation</a></li>

        </ul>
    </div>
    <ul class="nav nav-sidebar">








    </ul>
    @if(Auth::user()->user_type =='P')
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle active" type="button" data-toggle="dropdown">Admin Roles
                <span class="caret"></span></button>
            <ul class="dropdown-menu active nav-sidebar">
            @foreach($rules as $rule)
                <li><a href="{{action($rule->controller)}}">{{ $rule->rule_name }}</a></li>
            @endforeach
        </ul>
        </ul>
        </div>

    @endif



