<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('userauth');
    }
    public function manage()
    {
       return view('admin/dashboard');
    }
   /* public function adminmanage()
    {
        return view('admin/admindashboard');
    }*/
    public function showusers()
    {
        // $users = DB::select(DB::raw('SELECT * FROM users ORDER BY created_at, updated_at ASC '));
        $users=User::all();
        if(count($users)>0){
            return view('showuser/selectuser')->with('users',$users);
        }
        else{
            return \Redirect::back()->whith('message', 'You are not a rigistered user in our site!! Please create an account.');
        }
    }

    /*managing users*/
    public function deleteUser()
    {
        //return view('admin/dashboard');
        return "hello man";
    }
    public function deleteShop()
    {
        // return view('admin/dashboard');
        return 'we saw it too';
    }
    public function addAdmin()
    {

        /*$user -> user_id = "YOUR ID";
        $user -> email = "YOUR@email.com";
        $user -> save();
        */
        return view('admin/addadmin');
        // return view('admin/dashboard');

    }
    public function sortUsers(Request $request){

        $user_type=$request->get('sort');

        $sort=User::where('user_type',$user_type)->orderBy('created_at','desc')->get();

        return view('showuser/selectuser')->with('users',$sort);
    }

    public function generateReport()
    {
        //return view('admin/dashboard');
    }
    /*managing users*/

    /**



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
