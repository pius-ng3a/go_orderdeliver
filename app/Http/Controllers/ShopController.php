<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Http\Requests\deleteShopRequest;
use Auth;
use DB;
use App\Shop;
use Illuminate\Support\Facades\Redirect;
use Input;
use Session;
class ShopController extends Controller
{
       public function __construct(){
        $this->middleware('userauth');
    }
    public function create()
    {
        $first =\Auth::user()->first_name;
        $last = \Auth::user()->last_name;
        $user = $first.' '.$last;
        $data['country'] = shop::getCountryOptions();

        return view('shop.createshop',compact('user'))->with($data);

    }

    public function store(Requests\ShopRequest $request)
    {

        $shop = new Shop;
        $shop->shop_name = $request->get('shop_name');
        $shop->address=$request->get('address');
        $shop->description=$request->get('description');
        $shop->email=$request->get('email');
        $shop->phone_num=$request->get('phone_num');
        if($request->hasFile('profilePicFile')) {
            $file = Input::file('profilePicFile');
            $name = Auth::user()->user_id.'-'.$file->getClientOriginalName();
            $shop->picture = $name;

            $file->move(public_path().'/images/shop/', $name);
        }

        Auth::user()->Items()->save($shop);


        return \Redirect::back()->with('message', 'Your shop has been creatrd successfully.');


    }
    public function showOwnedShop(Request $request)
    {
        $id = Auth::user()->user_id;
        $shops = DB::select(DB::raw("SELECT shop_name,shops.email,phone_num,shops.picture,shops.description,address,shops.created_at,users.user_id from users,shops WHERE
                   users.user_id='$id'&& users.user_id=shops.user_id "));
        return view('shop/ownedshop', compact('shops'));

    }
    /*update method only picks out shops owned by an individual and returns for him to select which to update */
    public function updateShop(UpdateShopRequest $request){
        $name=$request->shop_name;
        $id = Auth::user()->user_id;
        $shops = DB::select(DB::raw("SELECT * from shops WHERE
                   shops.user_id='$id'&& shop_name='$name' "));

        if(count($shops)>0){
            $data['country']= shop::getCountryOptions();
            return view('shop/updateshop',compact('shops'))->with($data);
        }
        else{
            return \Redirect::back()->whith('message', 'You do not have a rigistered shop in our store!! Please create one.');
        }
    }
    /*method to select shops owned by an individual*/
    public function pickShop(){
        $id = Auth::user()->user_id;
        $shops = DB::select(DB::raw("SELECT shops.shop_id,shops.created_at,shop_name,users.user_id,shops.user_id from shops,users WHERE
                   users.user_id='$id'&& users.user_id=shops.user_id "));

        if(count($shops)>0){
            return view('shop/selectshop',compact('shops'));
        }
        else{
            return \Redirect::back()->whith('message', 'You do not have a rigistered shop in our store!! Please create one.');
        }
    }
    /*this method will show all shops to the administrator*/
    public function pickAllShop(){
        $shops = DB::select(DB::raw('SELECT * FROM shops ORDER BY created_at, updated_at ASC '));
        return view('shop/deleteshop',compact('shops'));

    }

    public function shopDelete(DeleteShopRequest $request){
      $id = $request->shop_id;
      DB::delete(DB::raw("DELETE FROM shops where shop_id =".$request->shop_id));
        \Session::flash('success',trans('pagination.shopdelete'));
    return Redirect::back();

    }
    /*this method actually saves the updates*/
    public function saveUpdate(UpdateShopRequest $request){
        $id = $request->shop_id;
        $shop = Shop::findOrFail($id);
        $shop->update($request->all());
        \Session::flash('success',trans('pagination.shopupdate'));
        return view('admin/dashboard');
    }

}
