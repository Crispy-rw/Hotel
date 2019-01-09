<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Sector;
use App\Restaurent;

class RestoController extends Controller
{


    public function __construct(){

        $this->middleware('isAdmin');
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resto = Restaurent::find(1);

        echo "<img src='storage/resto/$resto->cover_image' />";

        // $resto = Restaurent::all();

        //     return view('admin.restaurant.resto')->with('resto',$resto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province::all();
        $district = District::all();
        $sector = Sector::all();
        
        return view('admin.restaurant.addresto')->with('province',$province)->with('district',$district)->with('sector',$sector);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        


        if($request->hasFile('logo')){

            $filenameWithExt = $request->file('logo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file("logo")->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file("logo")->storeAs('public/resto',$fileNameToStore);

        }

        $resto = new Restaurent;
        $resto->name = $request->Input('name');
        $resto->description = $request->Input('description');
        $resto->province_id = $request->Input('province');
        $resto->district_id = $request->Input('district');
        $resto->sector_id = $request->Input('sector');
        $resto->phone = $request->Input("telephone");
        $resto->cover_image = $fileNameToStore;
        $resto->save();







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resto = Restaurent::find(1);

            return view("admin.restaurant.singleresto")->with('resto',$resto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resto = Restaurent::find($id);
        $province = Province::all();
        $district = District::all();
        $sector = Sector::all();
        
        return view('admin.restaurant.editresto')->with('resto',$resto)->with('province',$province)->with('district',$district)->with('sector',$sector);

        
        
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

        $resto = Restaurent::find($id);
        $resto->name = $request->Input('name');
        $resto->description = $request->Input('description');
        $resto->province_id = $request->Input('province');
        $resto->district_id = $request->Input('district');
        $resto->sector_id = $request->Input('sector');
        $resto->phone = $request->Input("telephone");
        $resto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resto = Restaurent::find($id);
        $resto->delete();

            return view('/admin.restaurant.resto');

    }
}
