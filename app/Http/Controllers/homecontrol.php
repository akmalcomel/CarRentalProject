<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontrol extends Controller
{
    function index(){
        return view('home');
    }

    function viewprop(){
        return view('viewproperty');
    }

    function listprop(){
        return view('listproperty');
    }
}
