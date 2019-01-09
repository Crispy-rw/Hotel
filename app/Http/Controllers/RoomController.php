<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Roomtype;
use App\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = collect();
       
        $hotels = Hotel::where('user_id', Auth()->User()->id )->get();

        $hotels->each(function($hotel) use($rooms){
            $hotel->rooms->each(function($room)use($rooms){
                $rooms->push($room);
            });
        });
        
            return view("operator.room")->with('rooms',$rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel = Hotel::where('user_id', Auth()->user()->id )->get();
        $type =  Roomtype::all();

            return view("operator.addroom")->with("hotel",$hotel)->with('type',$type);
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

            'name' => 'required|string|max:30',
            'description' => 'required|string|max:100',
            'hotel' => 'required',
            'type' => 'required',
            'price' => 'required',
            'logo' => 'required|image',

            ]);



                        $filenameWithExt = $request->file('logo')->getClientOriginalName();

                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                        $extension = $request->file("logo")->getClientOriginalExtension();

                        $fileNameToStore = $filename.'_'.time().'.'.$extension;

                        $path = $request->file("logo")->storeAs('public/room',$fileNameToStore);


                $room = new Room;
                $room->name = $request->Input('name');
                $room->description = $request->Input('description');
                $room->hotel_id = $request->Input('hotel');
                $room->roomtype_id = $request->Input('type');
                $room->price = $request->Input('price');
                $room->cover_image = $fileNameToStore;
                $room->status = 0;
                $room->user_id = Auth()->User()->id;
                $room->save();


                return redirect('/room');
            
    

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

        $hotel = Hotel::where('user_id', Auth()->user()->id )->get();
        $room = Room::find($id);
        $type =  Roomtype::all();

            return view("operator.editroom")->with('room',$room)->with("hotel",$hotel)->with('type',$type);
        
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

            'name' => 'required|string|max:30',
            'description' => 'required|string|max:100',
            'hotel' => 'required',
            'type' => 'required',
            'price' => 'required',

            ]);


                $room = Room::find($id);
                $room->name = $request->Input('name');
                $room->description = $request->Input('description');
                $room->hotel_id = $request->Input('hotel');
                $room->roomtype_id = $request->Input('type');
                $room->price = $request->Input('price');
                $room->save();

                    return redirect('/room');
        
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
