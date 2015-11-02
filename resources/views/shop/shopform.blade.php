

    {{--first column for middle column starts--}}
            <div class=" col-md-6">
                 <div class="form-group">
                     {!! Form::label('shop Name') !!}
                     {!! Form::text('shop_name', null,
                         array('required',
                               'class'=>'form-control',
                               'placeholder'=>'shop Name')) !!}
                 </div>

                 <div class="form-group">
                     {!! Form::label('Phone Number') !!}
                     {!! Form::text('phone_num',Auth::user()->user_phone,
                         array('required',
                               'class'=>'form-control',
                               'placeholder'=>'Phone Number')) !!}
                 </div>

                 <div class="form-group">
                     {!! Form::label('Email Address') !!}
                     {!! Form::email('email', Auth::user()->email,
                         array('required',
                               'class'=>'form-control',
                               'placeholder'=>'Email Address')) !!}
                 </div>



                 <div class="form-group">
                     {!! Form::label('shop Address') !!}
                     {!! Form::text('address', null,
                         array('required',
                               'class'=>'form-control',
                               'placeholder'=>'e.g Mega Electronics,R13A, Fotabe House Molyko Buea')) !!}
                 </div>
                <select name='country' id = 'country' class='form-control'>
                    <option value ='none'>Select country</option>
                    {!!$country!!}
                </select>

                 <div class="form-group">
                     {!! Form::label('Shop Description') !!}
                     {!! Form::textarea('description', null,
                         array('required',
                               'class'=>'form-control',
                               'placeholder'=>'Shop description')) !!}

                 </div>
                 <div class="form-group">
                 {!! Form::submit($submit,
                       array('class'=>'btn btn-primary')) !!}
                 </div>
            </div>
        <div class="col-md-6">
             <div class="form-group">
                 <div>
                     <img alt="140x140" id='pic' class="img-thumbnail" data-src="holder.js/140x140" height="120px" width="100" />
                 </div>
                 <label for="profilePicFile">Profile pic*</label>
                 <input type="file" value="{{ old('profilePicFile') }}" id="profilePicFile" name="profilePicFile">
                 <p class="help-block">Max size(512Kb)</p>
             </div>
             <div class="form-group">
                 {!! Form::label('published_at', 'Date :') !!}
                 {!! Form::input('date', $modified, date('Y-m-d'), null,
                     array('required',
                           'class'=>'form-control',
                           'placeholder'=>'date')) !!}
             </div>


             {!! Form::close() !!}
        </div>

</div>

