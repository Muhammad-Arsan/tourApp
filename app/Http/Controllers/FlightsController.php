<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flights;
class FlightsController extends Controller
{
    public function index(){
        return view('pages.flights');
    }

    public function searchFlight(Request $request){

        $this->validate($request , [
            'departure'=>'required',
            'arrival'=>'required',
            'depart_date'=>'required',
            'return_date'=>'required', 

        ]);
        
        $flights = Flights::where([
            'departure' => $request->input('departure'),
            'arrival' => $request->input('arrival'),
            //'departure_date' => $request->input('depart_date'),
            //'arrival_date' => $request->input('return_date'),
        ])->get();
        
        //dd($flights);
        
        return view('pages.booking' , compact('flights' , $flights));        
    
   
}
}