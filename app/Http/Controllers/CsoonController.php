<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class CsoonController extends Controller
{
   public function index()
   {
      $csoon=new \App\Csoon;
      $csoons=$csoon::all();
      return view('csoon',compact('csoons'));
   }
   public function create()
   {
      return view ('csoon');
   }
   public function store()
   {
      $csoon=request()->validate([
         'names'=>['required'],
         'email'=>['required']
      ]);
      $csoon= new \App\Csoon;
      $csoon->names=request('names');
      $csoon->email=request('email');
      $csoon->save();
      return redirect('/projects');
   }
}
