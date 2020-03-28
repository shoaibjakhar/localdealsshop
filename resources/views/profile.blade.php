@extends('layouts.app')

@section('content')

@if(session('message'))
<div class="alert alert-success" role="alert">
  {{ session('message') }}
</div>
@endif
  <div class="slider_wrap">
     <div class="container">
        <div class="top_nav">
           <ul>
              <li><a class="active" href="profile.html">Profile</a></li>
              <li><a href="{{ route('listings') }}">your Listings</a></li> 
              <li><a href="{{ route ('buyings') }}">Buying History</a></li>
              <li><a href="{{ route ('sellings') }}">Selling History</a></li>
              <li><a href="{{ route ('coupons_history') }}">Coupons History</a></li>
           </ul>
        </div>
        <div class="head_info">
           <h3>Profile Information</h3>
        </div>
        <div class="row dash-row">
              <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 dsh-outer">
                <div class="prof-dash prof-dash0">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <h2><span>Total Buyings </span><span class="sec-span">$0.00</span></h2>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 dsh-outer">
                <div class="prof-dash prof-dash0">
                    <i class="fa fa-dollar" aria-hidden="true"></i>
                    <h2><span>Total Sellings </span><span class="sec-span">$0.00</span></h2>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 dsh-outer">
                  <div class="prof-dash prof-dash3">
                      <i class="fa fa-ban" aria-hidden="true"></i>
                      <h2><span>Total Orders </span><span class="sec-span"> 0</span></h2>
                  </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 dsh-outer">
                <div class="prof-dash prof-dash4">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2><span>User Since </span><span class="sec-span"> 20 Nov, 2019</span></h2>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 dsh-outer">
                <div class="prof-dash prof-dash5">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <h2><span>Last Login </span><span class="sec-span"> 26 Nov, 2019</span></h2>
                </div>
              </div>
          </div>

          <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 profile_info">
              <h4>Change Your Profile Information</h4>
                <form action="{{ route('update_profile_info') }}" method="POST">
                  @csrf
                   <div class="user_details">
                    @if(session('info_updated'))
                    <div class="alert alert-success" role="alert">
                      {{ session('info_updated') }}
                    </div>
                    @endif
                     <div class="row">
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="first_name" value="{{ Auth::user()->first_name }}" placeholder="">
                       </div>
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="last_name" value="{{ Auth::user()->last_name }}" placeholder="">
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                         <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" placeholder="Email" readonly="">
                       </div>
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="phone" value="{{ Auth::user()->phone }}"  placeholder="Phone">
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="city" value="{{ Auth::user()->city }}" placeholder="City">
                       </div>
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="state" value="{{ Auth::user()->state }}" placeholder="State">
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="country" value="{{ Auth::user()->country }}" value="Eastern" placeholder="">
                       </div>
                       <div class="col-lg-6">
                         <input class="form-control" type="text" name="zip_code" value="{{ Auth::user()->zip_code }}" placeholder="ZIP">
                       </div>
                     </div>
                    
                     <div class="row">
                       <div class="col-lg-3">
                         <button class="btn btn-primary" type="submit">Update Profile</button>
                       </div>
                     </div>
                      
                   </div>
                </form>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 profile_info">
                <h4>Change Your Password</h4>
                 @if(session('image_updated'))
                    <div class="alert alert-success" role="alert">
                      {{ session('image_updated') }}
                    </div>
                    @endif
                <div class="row user_details">
                    <div class="col-lg-4 change_profile">
                        <form action="{{ route('update_profile_photo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                         <div class="avatar-upload">
                              <div class="avatar-edit">
                                  <input class="form-control" type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                  <label for="imageUpload">Change Profile Picture</label>
                              </div>
                              <div class="avatar-preview">
                                  <div id="imagePreview" style="background: url('{{ url('storage')}}/{{ (Auth::user()->profile_image) ?? '' }}');">
                                  </div>
                              </div>
                          </div>
                          <button class="btn btn-primary" type="submit" id="update_image" style="display: none;">Update Image</button>
                        </form>
                      </div>
                    <div class="col-lg-8">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12 m-p-0">
                                    <input class="form-control" type="text" placeholder="Old Password">
                                </div>
                                <div class="col-lg-12 m-p-0">
                                    <input class="form-control" type="text" placeholder="New Password">
                                </div>
                                <div class="col-lg-12 m-p-0">
                                    <input class="form-control" type="text" placeholder="Confirm New Password">
                                </div>
                                <div class="col-lg-12 m-p-0">
                                    <button class="btn btn-primary" type="submit">Update Password</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
             </div>
          </div>
     </div>
  </div>

@endsection
