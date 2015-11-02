<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\User;
use DB;

class DisplayProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function food(Request $request)
    {

        //$items = Item::all();/*->where('password',null);*/
        $items = DB::select(DB::raw("SELECT items.created_at,items.item_id,items.category,shops_shop_id,item_name,shop_name,unit_price,items.picture FROM  items,shops
        where items.shops_shop_id = shops.shop_id order by items.created_at,items.updated_at DESC "));
        return view('food',compact('items'));
    }

    public function getProductOfCategory(Request  $request)

    {
        $items = DB::select(DB::raw("SELECT items.item_name, items.item_id,items.category,items.picture,items.unit_price,items.shops_shop_id,shops.shop_id FROM  items,shops
        WHERE items.category='".$request->category."' AND items.shops_shop_id= shops.shop_id"));

        $adverts = DB::select(DB::raw("SELECT 8 FROM ITEMS WHERE items.advert=1"));
        $shops = DB::select(DB::raw("SELECT items.shops_shop_id, items.category, shops.shop_id, shops.shop_name from items,shops WHERE items.shops_shop_id=shops.shop_id AND items.category ='".$request->category."'"));
            return view('purchase/product',compact('items','adverts','shops'));
    }
    public function buyProduct(Request  $request)

    {
        $items = DB::select(DB::raw("SELECT * FROM  items WHERE items.category='".$request."' AND items.item_id=".$request->item_id));
        $adverts = DB::select(DB::raw("SELECT * FROM ITEMS WHERE items.advert=1"));
        return view('purchase/invoice',compact('items','adverts'));
    }

    public function showAppliances()
    {
       return view('appliance');
    }
    public function showKitchenUtensils()
    {
        return view('utensil');
    }
    public function showDeco()
    {
        return view('deco');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createItem(CreateItemRequest $request)
    {
        $item = new Item($request->all());
        Auth::user()->Items()->save($item);//ensure to create a relationship for users and item in laravel.
        return redirect('home');//this should be a page where items pertaining to the individual who is logged in are displayed
    }


    public function show($id)
    {
        //
    }



}
