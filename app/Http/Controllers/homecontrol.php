<?php

namespace App\Http\Controllers;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\house;

class homecontrol extends Controller
{
    function index(){
    

            $output=house::all();
            $output2=house::all();
         
            return view ('home',compact('output','output2'));
        
    
    }

    function viewprop(){
        return view('viewproperty');
    }

    function listprop(){
        return view('listproperty');
    }

    function first(){
        return view('firstpage');
    }

    function submitprop(){
        return view('submit-prop');
    }

    function testsubmit(){
        return view('testingsubmit');
    }

    function sdlogin(){
        return view('studentlogin');
    }

    function addproj (Request $req){

        $prop= new house;

        $prop->propname=$req->propertyname;//belah kanan daripada blade file
        $prop->title=$req->title;
        $prop->price=$req->propertyprice;
        $prop->furnish=$req->furnished;
        $prop->type=$req->propertytype;
        //$prop->image="testing value";
        $prop->description=$req->description;
        $prop->facilities="testing value";
        $prop->owner=$username=Auth::user()->name;
        $prop->bathroom=$req->bathroom;
        $prop->bedroom=$req->bedroom;
        $prop->size=$req->size;
        $prop->deposit=$req->rental;
        $prop->parking=$req->parking;

        if($req->file('image1')){
            $file= $req->file('image1');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image']= $filename;
        }
        $prop->save();

        /*$prop->propname="testing";//belah kanan daripada blade file
        $prop->title="testing";
        $prop->price=2400;
        $prop->furnish="testing";
        $prop->type="testing";
        $prop->image="testing value";
        $prop->description="testing";
        $prop->facilities="testing value";
        $prop->owner="testing";
        $prop->bathroom=3;
        $prop->bedroom=4;
        $prop->size=23;
        $prop->deposit=2400;
        $prop->parking=2;
        $prop->save();*/

        return redirect()->action([homeControl::class, 'index']);

    }

    function sdlogin1(Request $req){

        $user= Student::where('email',$req->input('email'))->get();
        if (Crypt::decrypt($user->password)==$req->input('password'))
        {
            $req->session()->put('Student',$user[0]->name);
            return redirect('/home');
        }
    }

    
}
