<?php

namespace App\Http\Controllers;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\house;
use App\Models\Booking;
use App\Models\testdistance;
use Geocoder\Geocoder;
use Geocoder\Model\Coordinates;

class homecontrol extends Controller
{

    function redirectFunct(){
        $typeuser=Auth::user()->usertype;
        if($typeuser==1)
        {
            return redirect()->action([admincontrol::class, 'adminhome']);
        }

        else{
            return redirect()->action([homecontrol::class, 'index']);
        }
    }

    function index(){


        $output=house::orderByDesc('created_at')->get();
        $output2=house::all();

            return view ('home',compact('output','output2'));


    }

    function viewprop($id){
        $output=house::find($id);
        $owner=User::find($output->ownerID);
        $username=Auth::user()->id;
        $bookings = Booking::where('car_id', $id)->get();

    // Convert the booking data to the required format for FullCalendar
    $events = [];
    foreach ($bookings as $booking) {
        // Calculate the duration of the booking
        $startDate = $booking->start_date;
        $endDate = $booking->return_date;

        // Create an event object for each day of the booking duration
        while ($startDate <= $endDate) {
            $event = [
                'title' => 'Booking ID: ' . $booking->id,
                'start' => $startDate,
                'end' => $startDate, // Assuming the booking is for a single day
                // Add other optional properties here, e.g., 'color' for custom event colors
            ];
            $events[] = $event;

            // Increment the start date to the next day
            $startDate = date('Y-m-d', strtotime($startDate . ' +1 day'));
        }
    }

    // Convert the $events array to JSON to be used in the FullCalendar JavaScript code
    $eventsJson = json_encode($events);

        return view ('viewproperty',compact('output','owner','username','eventsJson'));
    }

    function editads($id){
        $output = house::find($id);
        $output2 = house::find($id);
        $selectedFacilities = explode(',', $output->facilities); // Assuming the facility values are stored as comma-separated string in the database
        return view('editproperty', compact('output', 'output2', 'selectedFacilities'));
    }

    function deleteads($id){

        $prop=house::find($id);

        $prop->delete();
       session()->flash('success', 'Ad deleted successfully.');


        return redirect()->action([homecontrol::class, 'index']);
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
        $prop->owner=Auth::user()->name;
        $prop->ownerID=Auth::user()->id;
        $prop->bathroom=$request->bathroom;
        $prop->bedroom=$request->bedroom;
        $prop->size=$request->size;
        $prop->deposit=$request->rental;
        $prop->parking=$request->parking;
        $prop->address=$request->address;

        $prop->latitude=$request->latitude;
        $prop->longitude=$request->longitude;
        //$prop->floor=$request->floor;
        $prop->highlights=$request->location;
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
        return redirect()->action([homecontrol::class, 'index']);
    }

    public function addDiscount(Request $request, $id)
    {
        $property = house::findOrFail($id);

        // Validate the discount input
        $request->validate([
            'discount' => 'required|numeric|min:0|max:100',
        ]);

        // Save the discount to the property
        $property->floor = $request->input('discount');
        $property->save();

        return redirect()->back()->with('success', 'Discount added successfully.');
    }

    public function updateDiscount(Request $request, $id)
    {
        $property = house::findOrFail($id);

        // Validate the discount input
        $request->validate([
            'discount' => 'required|numeric|min:0|max:100',
        ]);

        // Update the discount for the property
        $property->floor = $request->input('discount');
        $property->save();

        return redirect()->back()->with('success', 'Discount updated successfully.');
    }


    public function updateStatus(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'car_status' => 'required|in:available,not_available',
        ]);

        // Find the property by ID
        $property = house::findOrFail($id);

        // Update the car status
        $property->distance = $request->car_status;
        $property->save();

        // Redirect back to the property detail page
        return redirect()->back()->with('success', 'Car status updated successfully.');
    }


    function listprop(Request $request){

        /*$orderBy = $request->query('orderBy');
    $order = $request->query('order');

    if ($orderBy === 'created_at' && $order === 'DESC') {
        $output = House::orderBy('created_at','desc')->paginate(10);
    } elseif ($orderBy === 'price' && $order === 'ASC') {
        $output = House::orderBy('price', 'ASC')->paginate(10);
    } else {
        $output = House::paginate(10);
    }*/

    $keyword = $request->input('keyword');
    $propertyType = $request->input('propertyType');
    $furnishedType = $request->input('furnishedType');
    $bedrooms = $request->input('bedrooms');
    $priceRange = $request->input('pricerange');

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
        $query->where('bathroom', '>=', $bedrooms);
        $query->orWhere(function ($query) use ($bedrooms) {
            $query->whereNull('bathroom');
        });
    }

    if ($priceRange) {
        $priceRange = explode(',', $priceRange);
        $minPrice = $priceRange[0];
        $maxPrice = $priceRange[1];
        $query->whereBetween('price', [$minPrice, $maxPrice]);
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

        return view ('listproperty',compact('output','output2'));
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

        $prop->propname=$req->carname;//belah kanan daripada blade file
        $prop->title=$req->title;
        $prop->price=$req->rentalprice;
        $prop->furnish=$req->furnished;
        $prop->type=$req->propertytype;
        //$prop->image="testing value";
        $prop->description=$req->description;
        //$prop->facilities=$req->input('facility');
        //$prop->facilities=$req->input('facility');
        $prop->owner=Auth::user()->name;
        $prop->ownerID=Auth::user()->id;
        $prop->bathroom=$req->bathroom;
        $prop->bedroom=$req->bedroom;
        $prop->size=$req->size;
        $prop->deposit=$req->rental;
        $prop->parking=$req->parking;
        $prop->address=$req->address;
        $prop->distance="available";
        $prop->latitude=$req->latitude;
        $prop->longitude=$req->longitude;
        $prop->bank=$req->bank;
       // $prop->floor=$req->floor;
        $prop->highlights=$req->location;
        $selectedFacilities = $req->input('facility', []);
         // Convert the array of selected facilities to a string
        $facilityString = implode(',', $selectedFacilities);
        // Save the facilities in the house table
        $prop->facilities = $facilityString;



        if($req->file('image')){
            $file= $req->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image']= $filename;
        }
        if($req->file('image2')){
            $file= $req->file('image2');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image2']= $filename;
        }
        if($req->file('image3')){
            $file= $req->file('image3');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image3']= $filename;
        }
        if($req->file('image4')){
            $file= $req->file('image4');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $prop['image4']= $filename;
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

        return redirect()->action([homecontrol::class, 'index']);

    }



    function viewownerads(){

        $output=house::all();
        $output2=house::all();
        $username=Auth::user()->name;

        return view ('ownerads',compact('output','output2','username'));
    }


    function testsubmit2(Request $req){
        $prop= new testdistance;

        $prop->distance=$req->distance;
        $prop->latitude=$req->latitude;
        $prop->longitude=$req->longitude;
        $prop->save();
        return redirect()->action([homeControl::class, 'index']);
    }

}
