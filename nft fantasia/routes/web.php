<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');     //landing
});

//auth for admin and user
Route::group(['middleware'=> ['auth']],function(){
    route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});     //dashboard


//for user
Route::group(['middleware'=> ['auth','role:user']],function(){
    route::get('/dashboard/myprofile','App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
    route::get('/getSecreatKey/{id}','App\Http\Controllers\DashboardController@getSecreatKey')->name('dashboard.getSecreatKey');
    //user profile
});

//for adminn
Route::group(['middleware'=> ['auth','role:admin']],function(){
    route::get('/dashboard/Shop','App\Http\Controllers\DashboardController@shop')->name('dashboard.shop');
    //view sales records
});

Route::resource('items', 'App\Http\Controllers\ItemsController');
Route::get('billboard', 'App\Http\Controllers\ItemsController@billboard')->name('items.billboard');

Route::get('/buy/{id}', 'App\Http\Controllers\PaymentController@buy')->name('buy');
Route::post('/verify', 'App\Http\Controllers\itemsController@verify')->name('verify');
require __DIR__.'/auth.php';
