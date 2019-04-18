@extends('layouts.app')
@section('content')


<div id="content-wrapper">
<div class="container">
   <ol class="breadcrumb">
     <li class="breadcrumb-item">
       <a href="/projects">Your Account</a>
     </li>
     <li class="breadcrumb-item active">Your Info</li>
   </ol>
   <div class="jumbotron">

      <div class="card-body">
    <h1 class=" card-title text-center">YOUR INFORMATION</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
         <div class="text-center">

         </div>
      </div>
      <div class=" col-md-9  personal-info ">

        <h3></h3>

        <form class="form-horizontal" role="form">


          <div class="form-group">
            <label class="col-lg-3 control-label">FIRST NAME</label>
            <div class="col-lg-8">
              <p class="form-control" >{{Auth::user()->name}}</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name</label>
            <div class="col-lg-8">
              <p class="form-control" >{{Auth::user()->lastname}}</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">E-MAIL</label>
            <div class="col-lg-8">
              <p class="form-control" >{{Auth::user()->email}}</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">PASSWORD</label>
            <div class="col-lg-8">
              <p class="form-control" type="password">**********</p>
            </div>
          </div>

        </form>
      </div>
   </div>
  </div>
</div>
</div>
</div
<hr>
@endsection
