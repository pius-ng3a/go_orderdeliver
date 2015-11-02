<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateItemRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_name',
            'unit_price',
            'category',
            'search_key',
            'description',
            'product_code',
            'shops_shop_id',
            'user_type',
            'picture',
            'discount',
            'updated_at',
            'unit'


        ];
    }
}
