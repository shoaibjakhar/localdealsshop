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
              <li><a class="active" href="{{ route('listings') }}">your Listings</a></li> 
              <li><a href="{{ route ('buyings') }}">Buying History</a></li>
              <li><a href="{{ route ('sellings') }}">Selling History</a></li>
           </ul>
      </div>
      <div class="row head_info">
        <div class="col-lg-12 p-0">
            <h3>All Listings</h3>
           <div class="shadow p-3">
                <table id="transaction" class="display" style="width:100%">
                    <thead class="mt-3">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Coupon Enabled</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="text-center">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($listings))
                        @foreach($listings as $listing)

                        <tr>
                            <td>{{ $listing->id }}</td>
                            <td>
                                <img src="{{ url('storage')}}/{{ $listing->image }}" class="img-thumbnail" width="30px"></td>
                            <td>${{ number_format($listing->price, 2) }}</td>
                            <td>${{ number_format($listing->discount, 2) }}</td>
                            <td>{{ ($listing->is_coupon_enabled == 1) ? "Yes" : 'No' }}</td>
                            <td>{{ $listing->created_at }}</td>
                            <td>Pending</td>
                            <td  class="text-center invoice"><a href="{{ route('listing_detail', $listing->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-file"></i> View</a> </td>
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
