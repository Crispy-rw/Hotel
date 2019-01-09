<?php
use App\Roomtype;
use App\User;
use App\Hotel;
use App\Room;
use App\District;
use App\Restaurent;

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


Route::post('/search','UserController@search');

Route::get('test',function(){

	return view('admin.restaurant.singleresto');

});

Route::get('single/{id}/show',function(){

	$resto = Restaurent::find(1);

		return view("admin.restaurant.single")->with('resto',$resto);

});


Route::get('/main/{id}',function($id){


	$hotels = Hotel::where('district_id',$id)->orWhere('province_id',$id)->get();
	

	return view('top')->with('hotels',$hotels);
});



Route::get('/allhotel',function(){

	$hotels = Hotel::all();

	return view('all')->with('hotels',$hotels);

});


Route::get('/operatorbook',['middleware' => 'isOperator','uses' => 'BookingController@operatorbook']);


Route::get('/', function () {

// echo "okk";

	$hotels = Hotel::all();

	//     return view('index')->with('hotels',$hotels);

	// return $hotels->user->email;

})->name("home");


Route::resource('/hotel','HotelController');


Auth::routes();


Route::get('/book/{id}/create',['middleware' =>'auth',function($id){

	$id1 = Crypt::decrypt($id);

	$room = Room::find($id1);


		return view('client.book')->with('room',$room)->with('id',$id1);


}]);


Route::group([' middleware' => ['auth']],function(){

				Route::post('/dynamic_district','HotelController@district');

				Route::resource('/resto','RestoController');

				route::get('/change',['middleware'=>'auth',function(){

					return view('change');

				}]);

				Route::post('password','UserController@change');

				Route::get('/adminbooking','BookingController@adminbooking')->middleware('isAdmin');

				Route::get('/adminhotel','HotelController@adminViewHotel')->middleware('isAdmin');


				Route::post('/sendmail/send','sendmailController@send');


				Route::resource('/bookings','BookingController');


				Route::resource('/room','RoomController');


				Route::get('operatorBooking','BookingController@operatorBooking'); 


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

				Route::get('/roomtype',['middleware' => 'isAdmin',function(){

					$room = Roomtype::all();

						return view("admin.roomtype")->with('room',$room);

				}]);

				Route::post('/changetype/{id}','AdminController@changeType')->name("changetype");


				Route::post('insertroom','AdminController@storeRoom')->name("insertroom");



				Route::get('/home', 'HomeController@index')->name('home');



				Route::get('/hotel_owner', 'PagesController@hotel_owner')->name('hotel_owner');


				Route::get('/client', 'PagesController@client')->name('client');


				Route::get('/dash',function(){

					return view('pages.dashboard-bookings');

				});
				




});
