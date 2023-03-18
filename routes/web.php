<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;

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
Route::get("/viewprop",[homeControl::class,"viewprop"]);
Route::get("/listprop",[homeControl::class,"listprop"]);
Route::get("/test",[homeControl::class,"first"]);
Route::get("/sdlogin",[homeControl::class,"sdlogin"]);
Route::post("/sdlogin1",[homeControl::class,"sdlogin1"]);
Route::get("/submitp",[homeControl::class,"submitprop"]);
Route::get("/submit",[homeControl::class,"testsubmit"]);

Route::POST("/add",[homeControl::class,"addproj"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
