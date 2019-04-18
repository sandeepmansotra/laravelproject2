@extends('layouts.app')
@section('content')

<div class="container">

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/address">Your Address</a>
        </li>
        <li class="breadcrumb-item active">Add New Address</li>
      </ol>
      <div class="jumbotron">
      <div class="card-body">
    <h1 class=" card-title text-center text-primary">ADD ADDRESS</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
         <div class="text-center">

         </div>
      </div>
      <div class=" col-md-9  personal-info ">

        <h3></h3>

        <form class="form-horizontal" role="form" method="post" action="/address">
           @csrf

           <div class="form-group">
            <label class="col-lg-3 control-label text-primary">SELECT COUNTRY</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" name="country" value = "{{ old('country') }}" class="form-control">
                  <option value="INDIA">INDIA</option>
                  <option value="USA">USA</option>
                  <option value="CANADA">CANADA</option>
                  <option value="CHINA">CHINA</option>
                  <option value="PAKISTAN">PAKISTAN</option>
                </select>
              </div>
           </div><br>
          <div class="form-group">
            <label class="col-lg-3 control-label text-primary">FULL NAME</label>
            <div class="col-lg-8">
              <input class="form-control" name="names" placeholder="Full Name" value = "{{ old('name') }}" required/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label text-primary">MOBILE NUMBER</label>
            <div class="col-lg-8">
              <input class="form-control" name="number" placeholder="10-digit Mobile Number" value = "{{ old('number') }}" required/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label text-primary">E-MAIL</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" placeholder="E-mail"  value = "{{ old('email') }}" required/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label text-primary">PINCODE</label>
            <div class="col-lg-8">
              <input class="form-control" name="pincode" type="text" placeholder="Pincode" value = "{{ old('pincode') }}" required/>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-3 control-label text-primary">STREET ADDRESS</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="street" placeholder="Flat / House No. / Floor / Building" value = "{{ old('street') }}" required/>
           </div><br>
            <div class="col-md-8">
              <input class="form-control" type="text" name="" placeholder="Colony / Street / Locality">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label text-primary">CITY</label>
            <div class="col-md-8">
              <input class="form-control" name="city" type="text" placeholder="City" value = "{{ old('city') }}" required/>
            </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label text-primary">SELECT STATE</label>
           <div class="col-lg-8">
             <div class="ui-select">
               <select class="form-control" name="state" value = "{{ old('state') }}">
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
               <button name="btn1" class="btn btn-primary">Add Address</button>
              <span></span>
              <a href="/address/create" type="button" class="btn btn-default">Cancel</a>
            </div>
          </div>

        </form>
        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </div>
   </div>
  </div>
</div>
</div>
<hr>

@endsection
