<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crypt;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\house;


class sdcontrol extends Controller
{
    function sdhome(){
    $output=house::orderByDesc('created_at')->get();
    $output2=house::all();
 
    return view ('student.sdhome',compact('output','output2'));
}

function sdlistprop(){

    $output=house::orderByDesc('created_at')->get();

    $output2=house::all();
 
    return view ('student.sdlistprop',compact('output','output2'));
}
}
