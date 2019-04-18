@extends('layouts.app')

@section('content')


<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">{{ __('Register') }}</h5>

               <form class="form-signin" method="POST" action="{{ route('register') }}">
                   @csrf
              <div class="form-label-group">
                 <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="First Name" required autofocus>
                 <label for="name" >{{ __('First Name') }}</label>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-label-group">
                 <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name" required autofocus>
                 <label for="lastname" >{{ __('Last Name') }}</label>
                @if ($errors->has('lastname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-label-group">
                 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                 <label for="email" >{{ __('E-Mail Address') }}</label>
                 @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
              </div>

              <hr>

              <div class="form-label-group">
                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                  <label for="password" >{{ __('Password') }}</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Passworf" required>
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>
              <a class="d-block text-center mt-2 large" href="{{ route('login') }}">LOGIN</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
