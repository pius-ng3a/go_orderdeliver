<div class="col-md-3">

        <h4>Shop Name:
            {!! Form::text('shop_name',$shop->shop_name) !!}
        </h4>
        <h4>
            {!! Form::text('shop_id',$shop->shop_id,['hidden']) !!}
        </h4>
    </div>

    <div class="col-md-3">
        <h4>Address
            {!! Form::text('address',$shop->address) !!}
        </h4>
    </div>
    <div class="col-md-3">
        <h4>Date Created:
            {!! Form::text('created_at',$shop->created_at,['type'=>'date']) !!}
        </h4>
    </div>
    <div class="col-md-3">
        <h4>
            <select name="category" >
                <option value="Product Category">Product Category</option>
                <option value="fruit">fruit</option>
                <option value="fish">Fish</option>
                <option value="food">Food</option>
                <option value="electronics">Electronics</option>
                <option value="computing">Computing</option>
                <option value="light">Light</option>
                <option value="vegetables">Vegetables</option>
                <option value="spices">Species</option>
                <option value="drinks">Drinks</option>
                <option value="tubers">Tuber</option>
                <option value="plantains">plantains</option>

            </select>{!! Form::submit('Submit',['id'=>'register-submit ','class'=>'active button']) !!}


        </h4>
    </div>

    {!! Form::close() !!}
    <hr>
    <hr>
</div>