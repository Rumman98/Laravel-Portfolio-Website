<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;

class CourseController extends Controller
{
   function CoursePage(){

    $CoursesData = json_decode(CourseModel::orderby('id','desc')->get());
 
       return view('Courses',[
        'CoursesData'=>$CoursesData
       ]);
   }
}
