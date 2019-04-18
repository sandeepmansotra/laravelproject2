@extends('layouts.app')
@section('content')

<div class="container">
   <div class="jumbotron">
      <div class="card-body">
    <h1 class=" card-title text-center">Edit ADDRESS</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
         <div class="text-center">

         </div>
      </div>
      <div class=" col-md-9  personal-info ">

        <h3></h3>

        <form class="form-horizontal" role="form" method="post" action="/address/{{$add->id}}">
           @method('PATCH')
           @csrf
           <div class="form-group">
            <label class="col-lg-3 control-label">SELECT COUNTRY</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" name="country"class="form-control" value="{{$add->country}}">
                  <option value="INDIA">INDIA</option>
                  <option value="USA">USA</option>
                  <option value="CANADA">CANADA</option>
                  <option value="CHINA">CHINA</option>
                  <option value="PAKISTAN">PAKISTAN</option>
                </select>
              </div>
           </div><br>
          <div class="form-group">
            <label class="col-lg-3 control-label">FULL NAME</label>
            <div class="col-lg-8">
              <input class="form-control" name="names" placeholder="Full Name" value="{{$add->name}}" required/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">MOBILE NUMBER</label>
            <div class="col-lg-8">
              <input class="form-control" name="number" placeholder="10-digit Mobile Number" value="{{$add->number}}" required/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">E-MAIL</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" placeholder="E-mail" value="{{$add->email}}" required/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">PINCODE</label>
            <div class="col-lg-8">
              <input class="form-control" name="pincode" type="text" placeholder="Pincode" value="{{$add->pincode}}" required/>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-3 control-label">STREET ADDRESS</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="street" placeholder="Flat / House No. / Floor / Building" value="{{$add->street}}" required/>
           </div><br>
            <div class="col-md-8">
              <input class="form-control" type="text" name="" placeholder="Colony / Street / Locality">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">CITY</label>
            <div class="col-md-8">
              <input class="form-control" name="city" type="text" placeholder="City" value="{{$add->city}}" required/>
            </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">SELECT STATE</label>
           <div class="col-lg-8">
             <div class="ui-select">
               <select class="form-control"name="state" value="{{$add->state}}">
                 <option value="Jammu">Jammu</option>
                 <option value="Punjab">Punjab</option>
                 <option value="Harayana">Harayana</option>
                 <option value="Delhi">Delhi</option>
                 <option value="Himanchal">Himanchal</option>
               </select>
             </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
               <button name="btn1" class="btn btn-primary">Update Address</button>
              <span></span>
              <a href="/address/{{$add->id}}/edit" type="button" class="btn btn-default">Cancel</a>
            </div>
          </div>
        </form>
      </div>
   </div>
  </div>
</div>
</div>
<hr>



@endsection
