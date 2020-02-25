@extends('layouts.app')

@section('content')

<style>
    
    #transaction{
        text-align: center;
    }
</style>

<div class="slider_wrap">
   <div class="container">
      <div class="top_nav">
         <ul>
              <li><a href="{{ route ('profile') }}">Profile</a></li>
              <li><a href="{{ route('listings') }}">your Listings</a></li> 
              <li><a href="{{ route ('buyings') }}">Buying History</a></li>
              <li><a href="{{ route ('sellings') }}">Selling History</a></li>
              <li><a class="active" href="{{ route ('coupons_history') }}">Coupons History</a></li>
           </ul>
      </div>
      <div class="row head_info">
        <div class="col-lg-12 p-0">
            <h3>All Coupons</h3>
           <div class="shadow p-3">
                <table id="transaction" class="display" style="width:100%">
                    <thead class="mt-3">
                        <tr>
                            <th>SR.</th>
                            <th>Coupon Number</th>
                            <th>Expiry Date</th>
                            <th>Download Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if(!empty($coupons))
                        @foreach($coupons as $coupon)


                        <tr>
                            <td>001</td>
                            <td>{{ $coupon->coupon_number }}</td>
                            <td>04-03-2020</td>
                            <td>{{ $coupon->updated_at }}</td>
                            <td>Not Used</td>
                        </tr>
                        @endforeach
                      @endif
                    </tbody>                  
                </table>
           </div>
        </div>
      </div>
   </div>
</div>
@endsection
