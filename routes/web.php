<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontrol;
use App\Http\Controllers\sdcontrol;
use App\Http\Controllers\admincontrol;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\Auth\CustomLoginController2;
use App\Http\Controllers\RenterRegistrationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('firstpage');
});

Route::get('/testingsub', function () {
    return view('testingsubmit');
});

Route::get("/redirect",[homecontrol::class,"redirectFunct"]);

Route::get("/home",[homecontrol::class,"index"]);
//Route::get("/viewprop",[homeControl::class,"viewprop"]);
Route::get("/listprop",[homecontrol::class,"listprop"])->name('listprop');
Route::get("/test",[homecontrol::class,"first"]);
Route::get("/sdlogin",[homecontrol::class,"sdlogin"]);
Route::get("/submitp",[homecontrol::class,"submitprop"]);
//Route::get("/edit",[homecontrol::class,"update"]);
Route::get("/submit",[homecontrol::class,"testsubmit"]);
Route::get("/vw/{id}",[homecontrol::class,"viewprop"]);

Route::get("/myads",[homecontrol::class,"viewownerads"]);
Route::get('regis', function () {
    return view('register');
});
Route::POST("/add",[homecontrol::class,"addproj"]);
Route::POST("/edit",[homecontrol::class,"update"]);
Route::POST("/submit2",[homecontrol::class,"testsubmit2"]);
Route::get("/editprop/{id}",[homecontrol::class,"editads"]);
Route::get("/deleteprop/{id}",[homecontrol::class,"deleteads"]);



Route::get("/stdhome",[sdcontrol::class,"sdhome"]);
Route::get("/stdlistprop",[sdcontrol::class,"sdlistprop"])->name('sdlistprop');
Route::get("/sdvw/{id}",[sdcontrol::class,"sdviewprops"]);
Route::get("/myfav",[sdcontrol::class,"fav"]);



Route::get('/custom-login', [\App\Http\Controllers\Auth\CustomLoginController::class, 'showLoginForm'])->name('custom-login');
Route::post('/custom-login', [\App\Http\Controllers\Auth\CustomLoginController::class, 'login']);
Route::get('/custom-login2', [\App\Http\Controllers\Auth\CustomLoginController2::class, 'showLoginForm'])->name('custom-login2');
Route::post('/custom-login2', [\App\Http\Controllers\Auth\CustomLoginController2::class, 'login'])->name('custom-login2.post');
Route::post('/logout', [\App\Http\Controllers\Auth\CustomLoginController2::class, 'logout'])->name('logout');

Route::get('/registerrent', [RenterRegistrationController::class, 'showRegistrationForm'])->name('renter.register.form');
Route::post('/registerrent', [RenterRegistrationController::class, 'register'])->name('renter.registerrent');


Route::middleware(['auth:user2'])->group(function () {
    Route::post('favorites/add/{houseId}', [sdcontrol::class, 'addFavorite'])->name('favorites.add');
    Route::post('favorites/remove/{houseId}', [sdcontrol::class, 'removeFavorite'])->name('favorites.remove');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/admin', function () {
    return view('admin.adminhome');
});
Route::get("/adminh",[admincontrol::class,"adminhome"]);
Route::get("/adminp",[admincontrol::class,"adminprop"]);
Route::get("/admins",[admincontrol::class,"adminstud"]);
Route::get("/advw/{id}",[admincontrol::class,"detailprop"]);
Route::get("/addeleteprop/{id}",[admincontrol::class,"deleteads"]);
Route::get("/adeditprop/{id}",[admincontrol::class,"editads"]);
Route::POST("/adedit",[admincontrol::class,"update"]);
Route::get("/deluser/{id}",[admincontrol::class,"deleteUser"]);
