<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;
use App\Booking;
use App\Coupon;
use App\Hotel;
use App\Room;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('User_id', Auth()->user()->id )->get();


             return view('client.mybook')->with('booking',$bookings);

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


        $this->validate($request,[
            'adult' => 'required|numeric',
            'checkout' =>'required',
            'checkin' => 'required',
            'child' => 'required|numeric'
        ]);

                        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        $res = "";
                        for ($i = 0; $i < 9; $i++) {
                            $res .= $chars[mt_rand(0, strlen($chars)-1)];
                        }


                    $coupon = new Coupon;

                    $coupon->data = Auth()->user()->id."-".$res."-".$request->Input("id");

                    if( $coupon->save() )
                                {


                            $book = new Booking;
                            $book->user_id = Auth()->user()->id;
                            $book->room_id = $request->Input("id");
                            $book->adult = $request->Input("adult");
                            $book->children = $request->Input("child");
                            $book->checkin = $request->Input("checkin");
                            $book->checkout = $request->Input("checkout");
                            $book->coupon_id = $coupon->id;

                                    if( $book->save() ){

                                        // $datas = array(
                                        //     '' => ''
                                        // ); 

                                        // Mail::to('nshimyumukizachristian@gmail.com')->send(new Sendmail($datas));

                                            return redirect('/bookings'); 

                                    }

                }

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



    public function bookingOperator()
    {

        echo "Okk";
        
    }




    public function operatorbook(){


        $rooms = collect();
       
        $hotels = Hotel::where('user_id', Auth()->User()->id )->get();

        $hotels->each(function($hotel) use($rooms){
            $hotel->bookings->each(function($room)use($rooms){
                $rooms->push($room);
            });
        });


        return view('operator.booking')->with('bookings',$rooms);

        
    }

    public function adminbooking(){

        $booking = Booking::all();

            return view('admin.bookings')->with('bookings',$booking);
    }


}
