<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class ProjectsController extends Controller
{
   public function index()
   {
      $project=new \App\Project;
      $list=$project::all();
      return view("/projects")->with(["list"=>$list]);
   }

   public function show($id)
   {
      $project=User::find($id);
      return view ('display',compact('project'));
   }
}
