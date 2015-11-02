{!! Form::open(['url'=>'admin/dashboard']) !!}
<div class="col-md-6"><h5>
    {!! Form::label('User Email') !!}
    </h5>
    {!! Form::email('email','',['placeholder'=>'Email address','tabindex'=>'3','required','autofocus']) !!}

    {!! Form::submit('Login',['id'=>'register-submit']) !!}
</div>
<div class="col-md-6">
     <h5>
        {!! Form::label('User Password') !!}
    </h5>
    {!! Form::password('password','',['placeholder'=>'Input password','tabindex'=>'3','required','autofocus']) !!}
    <p>   <a href="{{action('UserAccountController@resetPassword')}}">Forgot Password ?</a></p>
    {!! Form::close() !!}
</div>
