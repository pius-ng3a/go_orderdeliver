@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
<dev class="container">
    <div class="container-fluid">
       <div class="row row-offcanvas row-offcanvas-left " >
       <!-- Left column -->
            @include('partials.dashboardleftcolumn')


           </div><!--/span-->




      <!-- center and right panel -->
        <div class="row">
            <!-- center left-->
            <div class="col-md-6">
                <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>

                <hr>

                <hr>
               
         <div class="product-head">
            
@if(Session::has('description'))
    <div class="alert alert-info">
      {{Session::get('description')}}
    </div>
    @elseif(Session::has('success'))
       <div class="alert alert-info">
        {{Session::get('success')}}
      </div>
@endif

             <h2>Add Product</h2>
             @if(count($errors)>0)
               <ul class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(array('route' => 'product_store', 'class' => 'form','files'=>true)) !!}

@include('partials.productform',['submit'=>'Add Product'])
    
{!! Form::close() !!}
</div>

          
                    <!--/panel-body-->
                    <!--tabs-->
                    <div class="panel">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                            <li><a href="#messages" data-toggle="tab">Messages</a></li>
                            <li><a href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active well" id="profile">
                                <h4><i class="glyphicon glyphicon-user"></i></h4> Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.</p>
                            </div>
                            <div class="tab-pane well" id="messages">
                                <h4><i class="glyphicon glyphicon-comment"></i></h4> Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                <p>Quisque mauris augu.</p>
                            </div>
                            <div class="tab-pane well" id="settings">
                                <h4><i class="glyphicon glyphicon-cog"></i></h4> Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                <p>Quisque mauris augue, molestie.</p>
                            </div>
                        </div>


                    <!--/tabs-->

                </div>

            </div>

            {{-- statistics section <div class="col-md-6">--}}

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Notices</h4></div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            This is a dismissable alert.. just sayin'.
                        </div>
                        <p>This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.</p>
                        <p>Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Visits</th>
                            <th>ROI</th>
                            <th>Source</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>45</td>
                            <td>2.45%</td>
                            <td>Direct</td>
                        </tr>
                        <tr>
                            <td>289</td>
                            <td>56.2%</td>
                            <td>Referral</td>
                        </tr>
                        <tr>
                            <td>98</td>
                            <td>25%</td>
                            <td>Type</td>
                        </tr>
                        <tr>
                            <td>..</td>
                            <td>..</td>
                            <td>..</td>
                        </tr>
                        <tr>
                            <td>..</td>
                            <td>..</td>
                            <td>..</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            {{-- end of statistics --}}
     </div>
    <!--/col-span-9-->
@stop
@section('footer')
    @include('footer')
@stop