<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use Auth;
use DB;
use Input;
use Session;

class ProductController extends Controller
{
  
    public function create()
    {

      //$data['category'] = product::getCategoryOptions(); 

        $id = Auth::user()->user_id;
        $shops = DB::select(DB::raw('SELECT * FROM shops WHERE shops.user_id='.$id));

        return view('product.createproduct',compact('shops'));
    }

    public function store(Requests\CreateItemRequest $request)
    {

        $product = new Item;
        $product->item_name = $request->get('item_name');
        $product->category = $request->get('category');
        $product->expiry_date = $request->get('expiry_date');
        $product->search_key = $request->get('search_key');
        $product->quantity = $request->get('quantity');
        $product->unit_price = $request->get('unit_price');
        $product->shops_shop_id = $request->shop_id;
        $product->unit = $request->unit;
       // $product->picture = $request::get('picture');

        if($request->hasFile('profilePicFile')) {
            $file = Input::file('profilePicFile');
            $name = $request->shop_id.'-'.$product->item_name.$file->getClientOriginalName();
            $product->picture = $name;

            $file->move(public_path().'/images/'.$product->category.'/', $name);
        }

        $product->discount = $request->get('discount');
        $product->product_code = $request->get('product_code');
        $product->state = $request->get('state');
        $product->description=$request->get('description');
        


       // $data['country'] = Product::getCountryOptions();

        //Auth::user()->Items()->save($product);
        \Session::flash('success','Product successfully added!');
        $product->save();
        return \Redirect::back();//->with($data);
    

    }

      public function update(Requests\UpdateShopRequest $request)

      {


        $id = Auth::user()->user_id;
        $shops = DB::select(DB::raw('SELECT shops.shop_id FROM shops WHERE shops.user_id ='.$id));
        $items = DB::select(DB::raw("SELECT * FROM items WHERE items.category='".$request->category."' AND items.shops_shop_id = ".$request->shop_id));//IN (SELECT shops.shop_id FROM shops WHERE shops.user_id=".$id." ORDER BY created_at DESC)"));

       if(count($items)>0){
          return view('product.selectproduct',compact('items'));
        }
        else{
            \Session::flash('description','Your shop does not have products of category'. $request->category);
            return view('product.selectproduct',compact('items'));


        }

      }
    public function storeupdate(Requests\UpdateItemRequest $request){
        $id = $request->item_id;
        $item = Item::findOrFail($id);
        $item->update($request->all());
        \Session::flash('success',trans('pagination.itemupdate'));
        return \Redirect::back();

    }
    public function edit(Requests\UpdateItemRequest $request){
        $item = Item::findOrFail($request->item_id);


        return view('product.edititem',compact('item'));
    }

    /*select shop for owners with more than one shop */

    public function pickShop(){
        $id = Auth::user()->user_id;

        $shops = DB::select(DB::raw("SELECT shops.shop_id,shops.created_at,shop_name,shops.address,users.user_id,shops.user_id from shops,users WHERE
                   users.user_id='$id'&& users.user_id=shops.user_id "));

        if(count($shops)>1){
             return view('product/selectshop',compact('shops'));
        }
        elseif(count($shops)==1){
            foreach($shops as $shop){

            }
            $items = DB::select(DB::raw('SELECT * FROM items WHERE items.shops_shop_id='.$shop->shop_id));
            return view('product/deleteproduct',compact('items'));
        }
        else{
            return \Redirect::back()->with('description','you do not currently have a shop with us.Please create one');
        }
    }

    public function pickShop1(){
        $id = Auth::user()->user_id;
         $shops = DB::select(DB::raw("SELECT shops.shop_id,shops.created_at,shop_name,shops.address,users.user_id,shops.user_id from shops,users WHERE
         users.user_id=".$id.'&& users.user_id=shops.user_id '));

        if(count($shops)>1){
            return view('product/shopforupdate',compact('shops'));
        }
        elseif(count($shops)==1){
            foreach($shops as $shop)
            $items = DB::select(DB::raw('SELECT * FROM items WHERE items.shops_shop_id='.$shop->shop_id));
            return view('product/deleteproduct',compact('items'));
        }
        else{
            return \Redirect::back()->with('description','you do not currently have a shop with us.Please create one');

        }
    }


    public function pickProduct(Requests\UpdateShopRequest $request){
        $id = $request->shop_id;

           $items = DB::select(DB::raw('SELECT * FROM items WHERE items.shops_shop_id='.$id));
        /*dd(count($items));*/
            return view('product/deleteproduct',compact('items'));
    }

    public function deleteProduct(Requests\DeleteItemRequest $request){

        //DB::delete(DB::raw("DELETE FROM items where item_id =".$request->item_id));
         \Session::flash('description','Item deleted!!');
        return \Redirect::back();
    }
    public function selectShopItems(Requests\SelectShopRequest $request){
        $shops=DB::select(DB::raw("select * from shops WHERE shop_name='".$request->shop_name."' AND shop_id=".$request->shop_id));

      If($request->category=='Product Category'){
          $items=  DB::select(DB::raw("SELECT  * FROM items WHERE items.shops_shop_id =".$request->shop_id));
          //dd($items);

      }
      else{
         $items=  DB::select(DB::raw("SELECT * FROM   ITEMS WHERE items.shops_shop_id =".$request->shop_id." AND items.category='".$request->category."'"));

         // $items=  DB::select(DB::raw("SELECT * FROM items where items.shops_shop_id =".$request->shop_id." AND items.category='".$request->category."'"));

     }
        \Session::flash('description','Item deleted!!');
        return  view('product/ownedproduct',compact('items','shops'));
    }
/*function returns shops owned by a user so he can get his products*/
    public function getShopWithProduct(Requests\SelectShopRequest $request){

        $id = Auth::user()->user_id;
        $shops = DB::select(DB::raw("SELECT shops.shop_id,shops.created_at,shop_name,shops.address,users.user_id,shops.user_id from shops,users WHERE
                   users.user_id=".$id.' AND users.user_id=shops.user_id '));

        if(count($shops)>1){
            return view('product/shopwithproduct',compact('shops'));
        }
        elseif(count($shops)==1){
            foreach($shops as $shop)
            $items = DB::select(DB::raw('SELECT * FROM items WHERE items.shops_shop_id='.$shop->shop_id));
            return view('product/ownedproduct',compact('items'));
        }
        else{
            return \Redirect::back()->with('description','You do not have registered shops!');
        }

    }

    /* public function selectProduct(Requests\DeleteItemRequest $request){
         $id = $request->item_id;
         dd($id);

         $items = DB::select(DB::raw('SELECT * FROM items WHERE items.shops_shop_id='.$id));
         dd(count($items));
         return view('product/selectproduct',compact('items'));
     }*/

}
