<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\house;
use App\Models\testdistance;
use Geocoder\Geocoder;
use Geocoder\Model\Coordinates;
use App\Models\User2;

class admincontrol extends Controller
{
    function adminhome(){
    
        $housesPerOwner = House::selectRaw('ownerID, COUNT(*) as houseCount')
        ->groupBy('ownerID')
        ->get();

        $output=house::all();
        $outputcount=house::count();
        $user = User::where('usertype', '!=', 1)->get();
        $usercount = User::where('usertype', '!=', 1)->count();
        $stdcount=User2::count();
        $std=User2::all();
         
            return view ('admin.adminhome',compact('housesPerOwner','output','outputcount','user','usercount','stdcount','std'));
        
    
    }

    function adminprop(){
    
        $housesPerOwner = House::selectRaw('ownerID, COUNT(*) as houseCount')
        ->groupBy('ownerID')
        ->get();

        $output=house::all();
        $outputcount=house::count();
        $user = User::where('usertype', '!=', 1)->get();
        $usercount = User::where('usertype', '!=', 1)->count();
        $stdcount=User2::count();
        $std=User2::all();
         
            return view ('admin.adminprop',compact('housesPerOwner','output','outputcount','user','usercount','stdcount','std'));
        
    
    }
    function adminstud(){
    
        $housesPerOwner = House::selectRaw('ownerID, COUNT(*) as houseCount')
        ->groupBy('ownerID')
        ->get();

        $output=house::all();
        $outputcount=house::count();
        $user = User::where('usertype', '!=', 1)->get();
        $usercount = User::where('usertype', '!=', 1)->count();
        $stdcount=User2::count();
        $std=User2::all();
         
            return view ('admin.adminstud',compact('housesPerOwner','output','outputcount','user','usercount','stdcount','std'));
        
    
    }

    function detailprop($id){
        $output=house::find($id);
        $owner=User::find($output->ownerID);
     
        return view ('admin.adviewprop',compact('output','owner'));
    }

    function editads($id){
        $output = house::find($id);
        $output2 = house::find($id);
        $selectedFacilities = explode(',', $output->facilities); // Assuming the facility values are stored as comma-separated string in the database
        return view('admin.adminedit', compact('output', 'output2', 'selectedFacilities'));
    }

    function deleteads($id){

        $prop=house::find($id);

        $prop->delete();
       session()->flash('success', 'Ad deleted successfully.');
       

        return redirect()->action([admincontrol::class, 'adminhome']);
    }

    public function update(Request $request)
    {
        $id=$request->id;
        $prop = house::find($id);

        
        $prop->propname=$request->propertyname;//belah kanan daripada blade file
        $prop->title=$request->title;
        $prop->price=$request->propertyprice;
        $prop->furnish=$request->furnished;
        $prop->type=$request->propertytype;
        //$prop->image="testing value";
        $prop->description=$request->description;
        //$prop->facilities=$req->input('facility');
        //$prop->facilities=$req->input('facility');
        //$prop->owner=Auth::user()->name;
        //$prop->ownerID=Auth::user()->id;
        $prop->bathroom=$request->bathroom;
        $prop->bedroom=$request->bedroom;
        $prop->size=$request->size;
        $prop->deposit=$request->rental;
        $prop->parking=$request->parking;
        $prop->address=$request->address;
        $prop->distance=$request->distance;
        $prop->latitude=$request->latitude;
        $prop->longitude=$request->longitude;
        $prop->floor=$request->floor;
        $prop->highlights=$request->highlight;
        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image']= $filename;
        }
        if ($request->hasFile('image2')) {
            $file= $request->file('image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image2']= $filename;
        } 
        if ($request->hasFile('image3')) {
            $file= $request->file('image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image3']= $filename;
        } 
        if ($request->hasFile('image4')) {
            $file= $request->file('image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image4']= $filename;
        }
        // Update the checkbox values
        $selectedFacilities = $request->input('facility', []);
        $prop->facilities = implode(',', $selectedFacilities);
        $prop->save();
    
        // Redirect or perform any other actions
        return redirect()->action([admincontrol::class, 'adminhome']);
    }
    
    public function deleteUser($id)
{
    $user = User::findOrFail($id);

    // Delete associated houses
    $user->houses()->delete();

    // Delete the user
    $user->delete();

    return redirect()->back()->with('success', 'User and associated houses have been deleted.');
}
}
