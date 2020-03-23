@extends('layouts.app')

@section('content');
<div class="login_wrap">
   <div class="container">
      <div class="signup_form" id="registration">
         <form action="{{ route('register') }}" method="POST">
            @csrf

            <h4>VENDOR REGISTRATION</h4>
            <span></span>
            <div class="user_details">
              @if( session('message') )
              <p>{{ session('message') }}</p>
              @endif
              <div class="row">

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-6">
                  <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" required autofocus placeholder="Last Name">

                  @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required autofocus placeholder="Email">

                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" required autofocus placeholder="Phone">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="password" required autofocus placeholder="Password">

                  @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-lg-6">
                  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus placeholder="Confirm Password">

                  @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" autofocus placeholder="City">
                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" autocomplete="state" autofocus placeholder="State">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country" autofocus placeholder="Country">
                </div>
                <div class="col-lg-6">
                  <input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" autocomplete="zip_code" autofocus placeholder="Zip Code">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1') }}" autocomplete="address_1" autofocus placeholder="Address Line 1">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 terms">
                    <input class="checkbox" name="terms_check" required type="checkbox" value="ok"> I Agree With
                    <a href="#" target="_blank">Terms &amp; Conditions</a>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <button class="btn btn-primary" type="submit">Register</button>
                </div>
              </div>
               
            </div>
         </form>
      </div>
   </div>
</div>



@endsection
