<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\User;
use App\Restaurent;
use App\Hotel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $key){


        $this->validate($key,[
            'keyword' => 'required',
            'cat' => 'required'
        ]);
       
       $name = "%%".$key->get("keyword")."%%";
       $keyword = $key->get("cat");


               if($keyword == 1){

                    $hotel = Hotel::where('name','LIKE',$name)->get();

                        return view("search")->with('hotel',$hotel)->with('resto');

               }else{

                    $resto = Restaurent::where('name','LIKE',$name)->get();

                        return view("search")->with('resto',$resto)->with('hotel');

               }

    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function change(Request $key){


        $this->validate($key,[
            'current' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

            $user = User::find(Auth()->User()->id);
 
 
                if (Hash::check($key->get("current"), $user->password))
                {
                    if( $key->input("password") == $key->input("password_confirmation") )
                        {
                        $user->password = bcrypt($key->input("password"));

                        if( $user->save() )  return redirect('/client')->with('success','Password Changed');;
        
                        }
                    return redirect()->back()->with('error','Confirmation password do not Match');
        
                }else{
        
                    return redirect()->back()->with('error','Password Do Not match');
                    
                }
     }
}
