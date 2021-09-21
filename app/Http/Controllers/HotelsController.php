<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelsController extends Controller
{
    public function index(){
        return view('pages.hotels');
    }

    public function searchHotel(Request $request){


        $this->validate($request , [
           
          'location'=>'required',
          'checkIn'=>'required',
          'checkOut'=>'required'
        ]);

        $hotels = Hotel::where([
            'location'=>$request->input('location')
        ])->get();
        
        return view('pages.hoteldetails',compact('hotels' , $hotels));
    }
}
