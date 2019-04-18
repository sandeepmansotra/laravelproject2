@extends('layouts.app')
@section('content')


<div id="content-wrapper">
<div class="container">
   <div class="jumbotron">
      <div class="card-body">
    <h1 class=" card-title text-center">LOGIN INFORMATION</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
         <div class="text-center">

         </div>
      </div>
      <div class=" col-md-9  personal-info ">

        <h3></h3>

        <form class="form-horizontal" role="form" method="POST" action="/projects/{{Auth::user()->id}}">
          @method('PATCH')
          @csrf

          <div class="form-group">
            <label class="col-lg-3 control-label">FIRST NAME</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" value="{{Auth::user()->name}}" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name</label>
            <div class="col-lg-8">
              <input class="form-control" name="lastname" value="{{Auth::user()->lastname}}"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">E-MAIL</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" value="{{Auth::user()->email}}" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">PASSWORD</label>
            <div class="col-lg-8">
              <input class="form-control" name="password" type="password" value="********"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            <div class="col-lg-8">
             <button class="btn btn-success">UPDATE INFO</button>
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


<a href="/projects/{{Auth::user()->id}}/edit" class="btn btn-success">CREATE NEW PROJECT</a>





@endsection
