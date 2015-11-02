<div class="row">

           <div class="col-md-6">
    {!! Form::label('product Name') !!}
    {!! Form::text('item_name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'product Name')) !!}


    {!! Form::label('category') !!}


                   <select name="category" >
                       <option value="fruit">Fruit</option>
                       <option value="fish">Fish</option>
                       <option value="vegetable">Vegetable</option>
                       <option value="furniture">Furniture</option>
                       <option value="electronics">Electronics</option>
                       <option value="cosmetics">Cosmetics</option>
                       <option value="suit">Suit</option>
                       <option value="drinks">Drinks</option>
                       <option value="spices">spices</option>
                       <option value="computing">computing</option>
                       <option value="beverages">Beverages</option>
                   </select>

    {!! Form::label('Shop') !!}
     <div>
         <select name="shop_id">
             @foreach($shops as $shop)
               <option value="{{$shop->shop_id}}">{{$shop->shop_name}} </option>
              @endforeach
         </select>
     </div>
    {{-- @if(count($items)>0)
         <select name='shop_id' id = 'shop' class='form-control'>
         @foreach($shops as $shop)

                  <option value = '{{$shop->shop_id}}' >{{$shop->shop_name }}</option>


         @endforeach
         </select>
     @endif--}}
    {!! Form::label('Search Key') !!}
    {!! Form::text('search_key', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Search Key')) !!}

    {!! Form::label('Quantity') !!}
    <div class="row">
       <div class="col-md-9">
        {!! Form::text('quantity', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Quantity')) !!}
       </div>
       <div class="col-md-3">
            <select name="unit" >
                <option value="kg">kg</option>
                <option value="packets">packets</option>
                <option value="litres">litres</option>
                <option value="bags">bags</option>
                <option value="pieces">pieces</option>
                <option value="bottles">bottles</option>
                <option value="meters">meters</option>
                <option value="gallons">gallons</option>
            </select>
       </div>
    </div>

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


               {!! Form::submit($submit,
      array('class'=>'btn btn-primary')) !!}
             </div>

       <div class="col-md-6">
                    <div>
                       <i class="fa fa-random"></i><img alt="140x140" id='pic' class="img-thumbnail" data-src="holder.js/140x140" height="150px"width="150px" /></i>
                        <!--input type="button" id='uploadBtn' class="btn btn-default" value="upload"/-->
                    </div>
                        <label for="profilePicFile">Profile pic*</label>
                        <input type="file" value="{{ old('profilePicFile') }}" id="profilePicFile" name="profilePicFile">
                        <p class="help-block" style="color: red">Max Size(512Kb)</p>


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
    <select name="state" class="form-control" >
        <option value="0">select state</option>
     <option value="1">Available for sale</option>
     <option value="2">Good but Not Available for sale</option>
     <option value="3">Bad state</option>
    {{--{!! Form::text('state', 'select state',
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'State')) !!}
    --}}
    </select>
     </div>
</div>