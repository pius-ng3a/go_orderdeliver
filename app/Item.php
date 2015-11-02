<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Item extends Model
{
    protected $primaryKey ='item_id';
    protected $fillable =[
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

    public function users(){
        return $this->belongsTo('App\User');
    }
}
