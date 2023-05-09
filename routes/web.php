<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\sdcontrol;
use App\Http\Controllers\Auth\CustomLoginController;
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

Route::get("/home",[homeControl::class,"index"]);
//Route::get("/viewprop",[homeControl::class,"viewprop"]);
Route::get("/listprop",[homeControl::class,"listprop"]);
Route::get("/test",[homeControl::class,"first"]);
Route::get("/sdlogin",[homeControl::class,"sdlogin"]);
Route::get("/submitp",[homeControl::class,"submitprop"]);
Route::get("/submit",[homeControl::class,"testsubmit"]);
Route::get("/vw/{id}",[homeControl::class,"viewprop"]);
Route::get("/myads",[homeControl::class,"viewownerads"]);
Route::get('regis', function () {
    return view('register');
});
Route::POST("/add",[homeControl::class,"addproj"]);


Route::get("/stdhome",[sdcontrol::class,"sdhome"]);
Route::get("/stdlistprop",[sdcontrol::class,"sdlistprop"]);

Route::get('/custom-login', [\App\Http\Controllers\Auth\CustomLoginController::class, 'showLoginForm'])->name('custom-login');
Route::post('/custom-login', [\App\Http\Controllers\Auth\CustomLoginController::class, 'login']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
