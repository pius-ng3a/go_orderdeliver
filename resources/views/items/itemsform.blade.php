{!! Form::open(array('route' => 'product_store', 'class' => 'form')) !!}
<div class="row">

    <div class="col-md-6">
        {!! Form::label('product Name') !!}
        {!! Form::text('item_name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'product Name')) !!}


        {!! Form::label('category') !!}
        {!! Form::text('category', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'product category')) !!}

        {!! Form::label('Search Key') !!}
        {!! Form::text('search_key', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Search Key')) !!}

        {!! Form::label('Quantity') !!}
        {!! Form::text('quantity', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Quantity')) !!}

        {!! Form::label('Unit price') !!}
        {!! Form::text('unit_price', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Unit price')) !!}


        {!! Form::label('published_at', 'created on:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'date')) !!}


        {!! Form::label('Product Description') !!}
        {!! Form::textarea('description', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Product description')) !!}


        {!! Form::submit('Add product!',
array('class'=>'btn btn-primary')) !!}
    </div>

    <div class="col-md-6">
        <div>
            <img alt="140x140" id='pic' class="img-thumbnail" data-src="holder.js/140x140" />
            <!--input type="button" id='uploadBtn' class="btn btn-default" value="upload"/-->
        </div>
        <label for="profilePicFile">Profile pic*</label>
        <input type="file" value="{{ old('profilePicFile') }}" id="profilePicFile" name="profilePicFile">
        <p class="help-block">The selected file should be <=512Kb</p>


        {!! Form::label('Discount') !!}
        {!! Form::text('discount', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Discount')) !!}


        {!! Form::label('Product Code') !!}
        {!! Form::text('product_code', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Product_code')) !!}

        {!! Form::label('State') !!}
        {!! Form::text('state', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'State')) !!}
    </div>
</div>
{!! Form::close() !!}