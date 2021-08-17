<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReviewModel;

class ReviewController extends Controller
{
    function ReviewIndex(){

        return view('Review');
    }

    function GetReviewData(){
        $result = json_encode(ReviewModel::orderby('id','desc')->get()); 
        return $result;
       }

       function GetReviewDetails(Request $request){
        $id= $request->input('id');
        $result = json_encode(ReviewModel::where('id','=',$id)->get()); 
        return $result;
       }


       function ReviewDelete(Request $request){
        $id= $request->input('id');
        $result = ReviewModel::where('id','=',$id)->delete();
 
        if($result==true){
            return 1;
        }
 
        else{
            return 0;
        }
     }

     function ReviewUpdate(Request $request){
        $id= $request->input('id');
        $name= $request->input('name');
        $des= $request->input('des');
        $img= $request->input('img');

        $result = ReviewModel::where('id','=',$id)->update([
            'name'=>$name,
            'des'=>$des,
            'img'=>$img
        ]);
 
        if($result==true){
            return 1;
        }
 
        else{
            return 0;
        }
     }

     function ReviewAdd(Request $request){
        $name= $request->input('name');
        $des= $request->input('des');
        $img= $request->input('img');

        $result = ReviewModel::insert([
            'name'=>$name,
            'des'=>$des,
            'img'=>$img
        ]);
 
        if($result==true){
            return 1;
        }
 
        else{
            return 0;
        }
     }

    
}
