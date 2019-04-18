<?php

namespace App\Http\Controllers;
use \App\Add;

use Illuminate\Http\Request;

class AddController extends Controller
{
   public function index()
   {
      $add=new \App\Add;
      $adds=$add::all();
      return view('address',compact('adds'));
   }
   public function create()
   {
      return view('add_address');
   }
   public function store()
   {
         $add=request()->validate([
            'names' => ['required'],
            'country'=> ['required'],
            'number' => ['required' ,'max:10','min:10'],
            'email' => ['required'],
            'pincode' => ['required' ,'max:6'],
            'street' => ['required' ,'min:6'],
            'city' => ['required' ,'min:3'],
            'state' => ['required'],
         ]);
      $add=new \App\Add;
      $add->names=request('names');
      $add->country=request('country');
      $add->number=request('number');
      $add->email=request('email');
      $add->pincode=request('pincode');
      $add->street=request('street');
      $add->city=request('city');
      $add->state=request('state');
      $add->save();
      return redirect("/address");

   }
   public function edit($id)
   {
      $add = Add::find($id);
      return view('edit_address',compact('add'));
   }
   public function update($id)
   {
      $add = Add::find($id);
      $add->names=request('names');
      $add->country=request('country');
      $add->number=request('number');
      $add->email=request('email');
      $add->pincode=request('pincode');
      $add->street=request('street');
      $add->city=request('city');
      $add->state=request('state');
      $add->update();
      return redirect('/address');
   }
   public function destroy($id)
   {
      $add = Add::find($id);
      $add->delete();
      return redirect("/address");
   }
   public function show(Add $add)
   {
      return view ('address',compact('add'));
   }
}
