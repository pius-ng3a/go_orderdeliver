@extends('app')
@section('header')
    @include('menu')
@stop
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{action('WelcomeController@index')}}">Home</a></li>
            <li class="active">Account</li>
        </ol>
        <div class="registration">
            <div class="registration_left">
                <h2>new user? <span> create an account </span></h2>
                <!-- [if IE]
                   < link rel='stylesheet' type='text/css' href='ie.css'/>
                [endif] -->

                <!-- [if lt IE 7]>
                   < link rel='stylesheet' type='text/css' href='ie6.css'/>
                <! [endif] -->
                <script>
                    (function() {

                        // Create input element for testing
                        var inputs = document.createElement('input');

                        // Create the supports object
                        var supports = {};

                        supports.autofocus   = 'autofocus' in inputs;
                        supports.required    = 'required' in inputs;
                        supports.placeholder = 'placeholder' in inputs;

                        // Fallback for autofocus attribute
                        if(!supports.autofocus) {

                        }

                        // Fallback for required attribute
                        if(!supports.required) {

                        }

                        // Fallback for placeholder attribute
                        if(!supports.placeholder) {

                        }

                        // Change text inside send button on submit
                        var send = document.getElementById('register-submit');
                        if(send) {
                            send.onclick = function () {
                                this.innerHTML = '...Sending';
                            }
                        }

                    })();
                    $('document').ready(function() {
                        <!-- validate the password input to be sure there is no mismatch-->

                        $('#pass2').change(function(){
                            if($('#pass1').val()== $('#pass2').val()){
                                $('#passwordcheck').html('');
                            }
                            else{
                                $('#passwordcheck').html('Password mismatch');
                            }

                        });


                    });



                </script>
                <div class="registration_form">
                    <!-- Form -->
                    {!! Form::open(['url'=>'account/login'])  !!}
                    <div>
                        {!! Form::text('first_name','',['placeholder'=>'first name:','tabindex'=>'1','type'=>'text','autofocus','required']) !!}
                    </div>
                    <div>
                        {!! Form::text('last_name','',['placeholder'=>'Last name:','tabindex'=>'2','type'=>'text','autofocus','required']) !!}
                    </div>
                    <div>
                        {!! Form::email('email','',array('placeholder'=>'email address:','tabindex'=>'3','required')) !!}
                    </div>
                    <div>
                        {!! Form::text('user_phone','',['placeholder'=>'Mobile:','tabindex'=>'3','type'=>'text','required']) !!}

                    </div>
                    <div>
                        {!! Form::password('password', array('class' => 'field','placeholder'=>'password','tabindex'=>'4','required','id'=>'pass1')) !!}
                    </div>
                    <div>
                        {!! Form::password('password', array('class' => 'field','placeholder'=>'Retype password','tabindex'=>'4','required','id'=>'pass2')) !!}   </div>
                </div>
                <p style="color: red" id="passwordcheck"></p>
                {!! Form::label('users','Producer: P,  Wholesaler: W,  Retailer: R , Customer: C') !!}
                <div>
                    {!! Form::label('Select User Type') !!}
                    {!! Form::select('user_type',  ['C'=>'Custimer','R'=>'Retailer','W'=>'Wholesaler','P'=>'Producer'], ['class' => 'form-control','placeholder'=>'User type','required']) !!}
                </div>
                <div>
                    {!! Form::submit('Create An Account',['id'=>'register-submit']) !!}
                </div>
                {!! Form::close() !!}
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all()as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                @endif
                <div class="sky-form">
                    <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to Go_OrderDeliver &nbsp; <a style="color: red" href="{{action('VisitorController@term')}}">terms of service</a> </label>
                </div>
                <!-- Registration Form Ends -->
            </div>
        </div>
        <div class="registration_left">
            <h2>existing user</h2>
            <div class="registration_form">
                @include('partials/loginform')
                <!-- /Form -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
    <!-- end registration -->

@stop

@section('footer')
    @include('footer')
@stop
