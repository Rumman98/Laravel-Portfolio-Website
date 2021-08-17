<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;
use App\ContactModel;
use App\ProjectsModel;
use App\ReviewModel;
use App\ServiceModel;
use App\VisitorModel;

class HomeController extends Controller
{
   function HomeIndex(){
      $TotalCourse=CourseModel::count();
      $TotalContact=ContactModel::count();
      $TotalProject=ProjectsModel::count();
      $TotalReview=ReviewModel::count();
      $TotalService=ServiceModel::count();
      $TotalVisitor=VisitorModel::count();
       
    return view('home',[
     'TotalCourse'=> $TotalCourse,
      'TotalContact'=>$TotalContact,
      'TotalProject'=>$TotalProject,
      'TotalReview'=>$TotalReview,
      'TotalService'=>$TotalService,
      'TotalVisitor'=>$TotalVisitor

    ]);
   }
}
