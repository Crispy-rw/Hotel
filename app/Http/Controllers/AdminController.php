<?php

namespace App\Http\Controllers;
use App\Roomtype;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function storeRoom(Request $req){

    	$this->validate($req,[
    		'name' => 'required|string'
    		]);

    	$room = new roomtype;
    	$room->name = $req->Input("name");
    	$room->save();

    	return redirect()->back();
    }


    public function changeType(Request $req,$key){
    	

    	$user =  User::find($key);
    	$user->type = $req->Input('type');
    	$user->save();


    	return redirect("/hotelowner");


    }

}
