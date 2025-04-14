<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\stages;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;

class questionController extends Controller
{
   public function postquestion(Request $request)  {
    $vaidator=Validator::make($request->all(),[
        'image'=>'required|mimes:png,jpg,jpeg,gif'
    ]);
    if ($vaidator->fails()) {
        return response()->json(['status'=>false,'errors'=>$vaidator->errors()->first(),'message'=>'please fix the errors']);
}
$img=$request->image;
$ext=$img->getClientOriginalExtension();
$imageName=time().'.'.$ext;
$img->move(public_path().'/uploads/', $imageName);


        $newuser=question::create([
            "question"=>$request->input("question"),
            "leeters"=>$request->input("leeters"),
            "anser"=>$request->input("anser"),
            "points"=>$request->input("points"),
            "stars"=>$request->input("stars"),
            "talmeh"=>$request->input("talmeh"),
            "image"=>$imageName,
        ]);
        return response()->json(["status"=>"success"]);
    }
   public function poststages(Request $request)  {
  
  



        $newuser=stages::create([
            "num_stars"=>$request->input("num_stars"),
            "num_question"=>$request->input("num_question"),
        
          
        ]);
        return response()->json(["status"=>"success"]);
    }
   public function getquestion(Request $request)  {
        $newuser=question::inRandomOrder()->take(value: $request->input("num"))->get();
        return response()->json(["status"=>"success","question"=>$newuser
    ]);
    }
   public function getallquestion()  {
        $newuser=question::get();
        return response()->json(["status"=>"success","question"=>$newuser
    ]);
    }
 
}
