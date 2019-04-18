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
            <h5 class="card-title text-center">Welcome back!</h5>

               <form class="form-signin" method="POST" action="{{ route('login') }}">
                   @csrf


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
              <div class="custom-control custom-checkbox mb-3">
                 <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                 <label class="custom-control-label" for="remember">
                     {{ __('Remember Me') }}
                 </label>
              </div>



              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>

              <a class="d-block text-center mt-2 large" href="{{ route('register') }}">Register</a>
              <div class="d-block text-center mt-2 large">
                 @if (Route::has('password.request'))
                     <a class="btn btn-link" href="{{ route('password.request') }}">
                         {{ __('Forgot Your Password?') }}
                     </a>
                 @endif
                </div>

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
