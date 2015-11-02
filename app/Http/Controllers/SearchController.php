<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\Response;

class SearchController extends Controller
{




    //SearchController.php
    public function autocomplete(){
        $term = Input::get('term');

        $results = array();

        $queries = DB::table('users')
            ->where('first_name', 'LIKE', '%'.$term.'%')
            ->orWhere('email', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
           // $results[] = [ 'id' => $query->user_name, 'value' => $query->ser_email ];
            $results[] = $query->user_name;
        }
        return response()->json($results[0]);
    }


/*//View
{{ Form::open(['action' => ['SearchController@searchUser'], 'method' => 'GET']) }}
    {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter name'])}}
    {{ Form::submit('Search', array('class' => 'button expand')) }}
    {{ Form::close() }}*/


//Route


//Javascript








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
