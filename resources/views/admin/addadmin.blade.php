@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
    <div class="container container-fluid">
        <div class="row row-offcanvas row-offcanvas-left " >
            
<ul class="nav nav-sidebar">
                <li><a href=""> </a></li>
       
                <li><a href=""> </a></li>
 </ul>
        </div>


    </div class ="row">
<div class "col-md-6">
            @include('partials/dashboardleftcolumn')



</div>    

      <!-- Creating admin form For existing User -->

   
<div class =  "col-md-6">
 {!! Form::open(['url'=>'account/login']) !!} 


<div class = "row">
    <div class =  "col-md-6">
       <h2>For Existing user</h2>
        <br>
        <div class="form-group">
            {!! Form::label('USER ID') !!}
            {!! Form::text('user_id', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'USER ID')) !!}
        </div>

        <div class="form-group">
    {!! Form::label('E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>' E-mail address')) !!}
         </div>
          {!! Form::submit('Add Admin',['id'=>'register-submit']) !!}    
          {!! Form::close() !!}  
           
    </div>
      
      <!-- Creating admin form For new user User -->

        <div class = "col-md-6 pull-right">
 
 <h3 class="text-info">Create new Admin user</h3>
 <br>
  

          {!! Form::open(['url'=>'account/login','class'=>'form-horizontal','role'=>'form']) !!} 

            @include('account.registeradminform')
 
        
        
   
  {!! Form::close() !!}   
  </div>
</div>

 </div>
     </div>    
        <!--/span-->
    

    @include('partials.admincenterright')
@stop
@section('footer')
    @include('footer')
@stop