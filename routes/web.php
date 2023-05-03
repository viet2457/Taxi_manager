<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\handlelogin;
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
    return view('login');
});
Route::get('layout',function(){
    return view('layout');
});
Route::get('dashboard',function()
    {
        return view('dashboard');
    }
);
Route::get('listdriver',function(){
    return view('listdriver');
});

Route::get('listvideo',function(){
    return view('listvideo');
});
Route::get('listinsurance',function(){
    return view('listinsurance');
});
Route::get('listreport',function(){
    return view('listreport');
});
Route::get('listvehiclemanufacture',function(){
    return view('listvehiclemanufacture');
});
Route::get('listlicense',function(){
    return view('listlicense');
});
Route::get('listtaxi',function(){
    return view('listtaxi');
});
Route::get('adddriver',function(){
    return view('adddriver');
});
Route::get('addinsurance',function(){
    return view('addinsurance');
});
Route::get('addvideo', function(){
    return view('addvideo');
});
Route::get('addlicense',function(){
    return view('addlicense');
});
Route::get('addtaxi',function(){
    return view('addtaxi');
});
Route::get('addvehiclemanufacture',function(){
    return view('addvehiclemanufacture');
});
Route::get('addreport', function(){
    return view('addreport');
});




Route::get('handle-login', [handlelogin::class, 'login'])->name('login.handle');
