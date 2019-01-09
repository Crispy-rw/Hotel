<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Sector;
use App\Country;
use App\Hotel;
use App\Room;
use \Crypt;

class HotelController extends Controller
{

    public function __construct(){

        $this->middleware("auth")->except('show');
        $this->middleware("isOperator")->only('create');

    }

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

            'name' => 'required|string|max:50|unique:hotels',
            'description' => 'required|string|max:500',
            'star' => 'required|integer',
            'country' => 'required|integer',
            'province' => 'required|integer',
            'district' => 'required|integer',
            'sector' => 'required|integer',
            'email' => 'required|string',
            'website' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'telephone' => 'required|numeric',
            'logo' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=300,min_height=200|max:20000',
            'background' => 'image|mimes:jpeg,png,jpg|dimensions:min_width=400,min_height=400',

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

        $hotel_id = Crypt::decrypt($id);

        $hotel = Hotel::find($hotel_id);

        $rooms = Room::where('hotel_id',$hotel_id)->get();


        // return $hotel->user->Firstname;

            return view('singlelist')->with("hotel",$hotel)->with('rooms',$rooms);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $province = Province::all();
        $district = District::all();
        $sector = Sector::all();
        $country = country::all();


            return view('operator.edithotel')->with('hotel',$hotel)->with('country',$country)->with('province',$province)->with('district',$district)->with('sector',$sector);

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
        $this->validate($request,[

            'name' => 'required|string|max:50',
            'description' => 'required|string|max:500',
            'star' => 'required|integer',
            'country' => 'required|integer',
            'province' => 'required|integer',
            'district' => 'required|integer',
            'sector' => 'required|integer',
            'email' => 'required|string',
            'website' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'telephone' => 'required|numeric',
            
        ]);

            $hotel = Hotel::find($id);
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
            $hotel->save();

                return redirect('/hotel');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Room::where('hotel_id',$id)->delete()){
            
            Hotel::where('id',$id)->delete();

                echo "okkk";
        }
    }


    public function adminViewHotel(){

        $hotel = Hotel::all();

            return view('admin.hotel')->with('hotel',$hotel);


    }


    public function district(Request $dis){

        $value = $dis->Input("value");
        $district = District::whereProvince_id($value)->get();
            $output = '';
            foreach($district as $row){
                $output .='<option value="'.$row->id.'">'.$row->name.'</option>';
            }
                return $output;
    }

}
