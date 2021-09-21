<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restourent_comments;
class RestourentCommentsController extends Controller
{
    
public function store(Request $request)
  {
      $this->validate($request , [
          'message'=>'required'
      ]);
 
      $res_comm = new Restourent_comments; 
      $res_comm->body = $request->message;
      $res_comm['user_id'] = auth()->user()->id;
 
      $res_comm->save();
      
      $id = $request->id;
     $commts  = Restourent_comments::find($id);
       return view('pages.restdetails' , compact('comments',$commts));

    //   $input = $request->all();
    //   $input['user_id'] = auth()->user()->id;
    //   Restourent_comments::create($input);
    //   return back();

  }
}
