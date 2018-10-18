<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Sector;
use App\Country;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $hotels = Hotel::where('User_id', Auth()->User()->id )->orderBy("created_at",'DESC')->get();
       
        return view("operator/hotel")->with('hotels',$hotels);
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
        $country = country::all();
        
        return view('operator.addhotel')->with('country',$country)->with('province',$province)->with('district',$district)->with('sector',$sector);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,[

            // 'name' => 'required|string|max:50|unique:hotels',
            // 'description' => 'required|string|max:500',
            // 'province' => 'required|integer',
            // 'district' => 'required|integer',
            // 'sector' => 'required|integer',
            // 'email' => 'required|string',
            // 'website' => 'required|string',
            // 'telephone' => 'required|integer',
            // 'hotel' => 'string|required',
            // 'phone'  => 'required|string|max:50',
            // 'website' => 'required|string|max:50'
            // 'logo' => 'required'

        ]);


        if($request->hasFile('logo')){

            $filenameWithExt = $request->file('logo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file("logo")->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file("logo")->storeAs('public/logo',$fileNameToStore);

        }


        if($request->hasFile('background')){

            $filenameWithExt2 = $request->file('logo')->getClientOriginalName();

            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);

            $extension2 = $request->file("logo")->getClientOriginalExtension();

            $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;

            $path2 = $request->file("logo")->storeAs('public/background',$fileNameToStore);

        }else{

            $fileNameToStore2 = Null;

        }

            $hotel = new Hotel;
            $hotel->name = $request->Input("name");
            $hotel->description =  $request->Input("description"); 
            $hotel->star = $request->Input("star");
            $hotel->country_id =  $request->Input("country");
            $hotel->province_id =  $request->Input("province");
            $hotel->district_id =  $request->Input("district");
            $hotel->sector_id =  $request->Input("sector");
            $hotel->website =  $request->Input("website");
            $hotel->email =  $request->Input("email");
            $hotel->phone = $request->Input("telephone");
            $hotel->cover_image = $fileNameToStore;
            $hotel->background_image = $fileNameToStore2;
            $hotel->active = 0;
            $hotel->user_id = Auth()->User()->id ;
            $hotel->save();

       
       return redirect('/hotel');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
       
        return view('singlelist')->with("hotel",$hotel);

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
}
