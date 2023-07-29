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
use App\Models\User2;
use App\Models\Favourite;
use Illuminate\Support\Facades\Mail;



class sdcontrol extends Controller
{
    function sdhome(){
    $output=house::orderByDesc('created_at')->get();
    $output2=house::all();

    return view ('student.sdhome',compact('output','output2'));
    }


function sdlistprop(Request $request){

    $keyword = $request->input('keyword');
    $propertyType = $request->input('propertyType');
    $furnishedType = $request->input('furnishedType');
    $bedrooms = $request->input('bedrooms');
    $priceRange = $request->input('pricerange');
    $distance = $request->input('dist');

    $orderBy = $request->query('orderBy');
    $order = $request->query('order');

    $query = House::query();

    // Apply search filters based on form inputs

    if ($keyword) {
        $query->where(function ($query) use ($keyword) {
            $query->where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('propname', 'LIKE', '%' . $keyword . '%');
        });
    }

    if ($propertyType) {
        $query->where('type', $propertyType);
    }

    if ($furnishedType) {
        $query->where('furnish', $furnishedType);
    }

    if ($bedrooms) {
        $query->where('bedroom', $bedrooms);
    }

    if ($priceRange) {
        $priceRange = explode(',', $priceRange);
        $minPrice = $priceRange[0];
        $maxPrice = $priceRange[1];
        $query->whereBetween('price', [$minPrice, $maxPrice]);
    }


    if ($distance) {
        $distance = explode(',', $distance);
        $minDistance = $distance[0];
        $maxDistance = $distance[1];
        $query->whereBetween('distance', [$minDistance, $maxDistance]);
    }

    // Apply sorting based on the orderBy and order query parameters

    if ($orderBy === 'created_at' && $order === 'DESC') {
        $query->orderBy('created_at', 'desc');
    } elseif ($orderBy === 'price' && $order === 'ASC') {
        $query->orderBy('price', 'asc');
    }
   // dd($query->toSql());
    $output = $query->paginate(10);
        $output2=house::all();

        return view ('student.sdlistprop',compact('output','output2'));
    }

    public function fav()
{
    $userID = Auth::guard('user2')->user()->id;
    $userFavorites = User2::find($userID)->favorites()->pluck('house_id')->toArray();
    $favprop = house::whereIn('id', $userFavorites)->get();

    $output2 = house::all();

    return view('student.favourite', compact('favprop', 'output2'));
}


    function sdviewprops($id){
        $output=house::find($id);
        $owner=User::find($output->ownerID);
        $user = Auth::guard('user2')->user();

        return view ('student.sdviewprop',compact('output','owner','user'));
    }


    public function addFavorite(Request $request, $houseId)
{
    $user = Auth::guard('user2')->user();

    // Check if the user already has the house in favorites
    if (!$user->favorites()->where('house_id', $houseId)->exists()) {
        $user->favorites()->attach($houseId);
    }

    return redirect()->back()->with('success', 'Property added to favorites');
}

// Remove favorite
public function removeFavorite(Request $request, $houseId)
{
    $user = Auth::guard('user2')->user();

    // Check if the user has the house in favorites
    if ($user->favorites()->where('house_id', $houseId)->exists()) {
        $user->favorites()->detach($houseId);
    }

    return redirect()->back()->with('success', 'Property removed from favorites');
}

public function logout()
{
    Auth::guard('user2')->logout();

    return redirect('/'); // Redirect to your desired page after logout
}




}
