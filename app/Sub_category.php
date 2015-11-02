<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    protected $primaryKey ='sub_category_id';
    protected $fillable =[
        'sub_category_name'=>'required',
        'category_id'=>'required',
        'updated_at'

    ];

}
