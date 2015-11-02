@extends('app')

@section('header')

  @include('menu')
@stop


@section('content')

<div class="container well">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <h2>CONTACT</h2>
                     @if(count($errors)>0)
                       <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('Your Name') !!}
            {!! Form::text('name', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your name')) !!}
        </div>


        <div class="form-group">
            {!! Form::label('Phone Number') !!}
            {!! Form::text('phone_num', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Phone Number')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your E-mail Address') !!}
            {!! Form::text('email', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Description') !!}
            {!! Form::textarea('description', null,
                     array('required',
                     'class'=>'form-control',
                      'placeholder'=>'Description')) !!}


        <div class="form-group">
            {!! Form::submit('Contact_Us',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
         </div>
     </div>
    <div class="col-md-3">

    </div>
</div>

@stop
@section('footer')

   @include('footer')

@stop   