<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restourent;

class RestourentController extends Controller
{
    public function index(){
        return view('pages.restourent');
    }

    public function details($id){
        $restourent = Restourent::find($id);
        return view('pages.restdetails' , compact('restourent',$restourent));
    }

    public function searchRestourents(Request $request)
    {         
       $this->validate($request,[
        'location'=>'required'
       ]);
    
        $restourents = Restourent::where([
        'location'=>$request->input('location')
        ])->get();
        //  dd($restourent);    
       return view('pages.restourent' , compact('restourents' , $restourents));
    }

    public function reserve(){
        return view('pages.reserveTable');
    }



   
}
