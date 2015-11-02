
<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('first_name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'First name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('last_name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Last name')) !!}
</div>
<div class="form-group">
    {!! Form::label('E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>' E-mail address')) !!}
</div>
<div class="form-group">
    {!! Form::label('Mobile Number') !!}
    {!! Form::text('user_phone', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>' Phone Number')) !!}
</div>
<div class="form-group">
    {!! Form::label('Password') !!}
    {!! Form::password('password', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>' Password')) !!}
</div>
<div class="form-group">
    {!! Form::label('Confirm Password') !!}
    {!! Form::password('password_confirm', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Retype Password')) !!}
</div>
  <div class="form-group">
                    {!! Form::label('Select User Type') !!}
                    {!! Form::select('user_type',  ['P'=>'Producer'], ['class' => 'form-control','placeholder'=>'User type','required']) !!}
                </div>

<div class="form-group">
    {!! Form::submit('Add Admin', 
      array('class'=>'btn btn-primary','id'=>'register-submit')) !!}
</div>