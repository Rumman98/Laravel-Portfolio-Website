<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServiceModel;
use App\CourseModel;
use App\ProjectsModel;
use App\ContactModel;
use App\ReviewModel;

class HomeController extends Controller
{
    function HomeIndex(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");

        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]); 
        $servicesData = json_decode(ServiceModel::all());
        $CoursesData = json_decode(CourseModel::orderby('id','desc')->limit(6)->get());
        $ProjectData = json_decode(ProjectsModel::orderby('id','desc')->limit(10)->get());
        $ReviewData = json_decode(ReviewModel::all());

        return view('home',[
            'ServiceData'=>$servicesData,
            'CoursesData'=>$CoursesData,
            'ProjectData'=>$ProjectData,
            'ReviewData'=>$ReviewData

        
        ]);
    }

    function ContactSend(Request $request){
        $contact_name= $request->input('contact_name');
        $contact_mobile= $request->input('contact_mobile');
        $contact_email= $request->input('contact_email');
        $contact_message= $request->input('contact_message');
    $result =ContactModel::insert([
        'contact_name'=>$contact_name,
            'contact_mobile'=>$contact_mobile,
            'contact_email'=>$contact_email,
            'contact_message'=>$contact_message
    ]);

    if($result==true){
        return 1;
    }

    else{
        return 0;
    }
    }


}
