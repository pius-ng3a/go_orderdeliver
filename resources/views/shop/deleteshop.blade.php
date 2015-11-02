@extends('app')
@section('header')
    @include('menu')
@endsection
@section('content')
    @if(count($shops)>0)
     @foreach($shops as $shop)
     
       <div class="row ">
         {!! Form::open(['route'=>'delete_shop','role'=>'form','class'=>'form-horizontal']) !!}
         <div class="col-md-2">
         </div>
         <div class="col-md-3 form-group">
             <h4>Shop Name:
             {!! Form::text('shop_name',$shop->shop_name,['id'=>'shop_name ','class'=>'form-control']) !!}
             </h4>
         </div>
         <div class="col-md-3 form-group">
         <h4>Shop ID:
                 {!! Form::text('shop_id',$shop->shop_id, ['id'=>'shop_id ','class'=>'form-control']) !!}
             </h4>
         </div>
         <div class="col-md-2 form-group">
             <h4>Date Created:
              {!! Form::text('created_at',$shop->created_at,['type'=>'date', 'class'=>'form-control']) !!}
             </h4>
         </div>
         <div class="col-md-3 form-group">
          {!! Form::submit('Delete',['id'=>'register-submit','class'=>'btn btn-info']) !!}
         </div>
         <hr>
        {!! Form::close() !!}
       </div>
     @endforeach
    @else
         <div> No Registered shops in the database!!</div>
    @endif

@endsection
@section('footer')
    @include('footer')
@endsection