<?php
use App\Roomtype;
use App\User;
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

    return view('index');

});


Route::resource('/hotel','HotelController');

Route::get('/singlehotel',function(){

	return view('singlelist');
	
});

Route::get('/admin', function(){

		return view('admin.admin');

	})->name('admin');

route::get('operator',function(){

		return view("operator.operator");

});


Route::get('hotelowner',function(){

		return view('admin.listhotelowner');

});

Route::get('/adminclients',function(){

		$users = User::whereType(1)->get();

		return view("admin.clients")->with('users',$users);
});

Route::get('/user/{id}/change',function($id){

	$user2 = User::find($id);

	return view("admin.changetype")->with('user',$user2);

});

Route::get('/roomtype',function(){

	$room = Roomtype::all();

	return view("admin.roomtype")->with('room',$room);

});

Route::post('/changetype/{id}','AdminController@changeType')->name("changetype");


Route::post('insertroom','AdminController@storeRoom')->name("insertroom");


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');





Route::get('/hotel_owner', 'PagesController@hotel_owner')->name('hotel_owner');


Route::get('/client', 'PagesController@client')->name('client');


Route::get('/dash',function(){

	return view('pages.dashboard-bookings');

});

