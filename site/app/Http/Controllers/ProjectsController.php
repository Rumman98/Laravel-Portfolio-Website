<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectsModel;

class ProjectsController extends Controller
{
    function ProjectsPage(){

        $ProjectData = json_decode(ProjectsModel::orderby('id','desc')->get());
        return view('Projects',[
            'ProjectData'=>$ProjectData,
           ]);
    }
}
