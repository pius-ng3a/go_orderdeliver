<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class shop extends Model
{
   protected $table='shops';
    protected $primaryKey='shop_id';
   protected $fillable =[
       'shop_name',
       'description',
       'user_id',
       'streets_street_id',
       'phone_num',
       'email',
       'created_at',
       'updated_at',
       'address'

   ];
    public function users(){
        return $this->belongsTo('App\User');
    }
    //function to filter through names of country
    public static function getCountryOptions($selected=''){
        $res=" ";
        $query= DB::select(DB::raw("SELECT * FROM   country_codes")); //raw query execution
        foreach($query as $row){
            if($selected == $row->country){
                $res .= "<option value ='".$row->country."' selected>".$row->country."</option>";
            }
            else{
                $res .= "<option value ='".$row->country."'>".$row->country."</option>";
            }
        }
        return $res;
    }
}
