<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{
    public function register()
    {
        return view('account/register');

    }
    public function term()
    {
        return view('account/terms');
    }

}
