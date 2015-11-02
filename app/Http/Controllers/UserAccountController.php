<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\SigninRequest;
use Hash;
use Session;
use Auth;




class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* adding a middleware to protect actions*/
    /*public function __construct(){
         $this->middleware('authuser',['except'=>'login']);

    }*/
    public function register()
    {
        return view('account/register');
    }
    public function login()
    {

        if(Auth::user()){
        \Session('success','You are already logged in'.''.Auth::user()->user_name);
        return \Redirect::back();
           }
        return view('account/login'); //use compact here to pass the details of he who is logged in and populate the neccesary filed

    }
    public function logout()
    {
        Auth::logout();
        return view('account/login');
        //use compact here to pass the details of he who is logged in and populate the neccesary filed
    }

    /*end of sign in*/

    public function term()
    {
        return view('account/terms');
    }

    public function store(CreateUserRequest $request)
    {
        //$input = $request->get('user_name');
        $password= Hash::make($request->input('password'));
        $user= new User;
        $user->password = $password;
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->user_phone = $request->input('user_phone');
        $user->save();
        //User::create($request->all());
        \Session::flash('message',' Your account was created successfully. Sign in to continue');
        return redirect('account/login');
       //return $input;

    }
     /*Reset password */
    public function resetPassword(){
        return view('auth/password');
    }
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
