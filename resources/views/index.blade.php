@extends('layouts.app')


@section('content')
<div class="slider_wrap">
   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-3 sidebar_menu">
            <ul>
               <li><a href="#">All Categories </a></li>
               @if(!empty($data['all_categories']))
               @foreach($data['all_categories'] as $category)
               <li><a href="#">{{ $category->title }} <i class="fa fa-angle-right"></i></a></li>
               @endforeach
               @endif
            </ul>
         </div>
         <div class="col-xl-9 col-lg-9 col-md-9 slider_content">
            <img src="{{ asset('assets/frontend/images/banner.png') }}" alt="">
         </div>
      </div>
   </div>
</div>

<div class="sell_products">
   <div class="container">
      <div class="row inner_shadow">
         <div class="col-xl-3 col-lg-3 col-md-6 feat-inner sliding_box">
               <img src="{{ asset('assets/frontend/images/hand-icon') }}.png">
               <h4>Easy to use</h4>
               <p>Buying or selleing your items is quick and simple.</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 feat-inner sliding_box">
               <img src="{{ asset('assets/frontend/images/lock-icon') }}.png">
               <h4>Secure</h4>
               <p>All your transactions are 100% secure.</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 feat-inner sliding_box">
               <img src="{{ asset('assets/frontend/images/dollars-icons') }}.png">
               <h4>Competitive</h4>
               <p>Sell your items with lower fees than ebay.</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 feat-inner-bg sliding_box sliding_box_hover">
               <a href="{{ url('add_listing') }}">
                  <h3>Sell a service</h3>
                  <p>List your items for free for a limited time.</p>
               </a>
            </div>
        </div>
   </div>
</div>

<section class="recent_activity">
  <div class="container">
    <div class="blog_head">
      <h4>Best Discount Deals</h4>
    </div>
    <div class="row">
    @if(!empty($data['all_listings'][0]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][0]['image'] }}">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][0]['title'] }}</h4>
            <p>Free 3-Month Subscription to Pandora Premium</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][0]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar5824685.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Mark Freeman</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][0]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>How to deal with Mondays. Works everytime :D...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][0]['created_at'])); ?>
                <p>{{ $created->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][1]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][1]['image'] }}">
            <div class="discount_offer">
               <p>48% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][1]['title'] }}</h4>
            <p>160+ bought</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][1]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar125.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Nathan Thomas</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][1]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>Best ! </b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][1]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][2]))

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][2]['image'] }}">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][2]['title'] }}</h4>
            <p>Free 60-Day from Daily Burn</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][2]['price'], 2) }}</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar1.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Andras Palmer</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][2]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>Excellent hotel of this class...best experience...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][2]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    </div>

    <div class="row">
    @if(!empty($data['all_listings'][3]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs inner_gapp">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][3]['image'] }}">
            <div class="discount_offer">
               <p>30% OFF</p>
            </div>
          </div>
          <div class="thums_img">
            <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 Like</p>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][3]['title'] }}</h4>
            <p>Hotels</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][3]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar1254785.jpg') }}">
              </div>
              <div class="col-sm-11 user_rating">
                <h5>Mark Freeman</h5>
                <h6>Added 1 photo</h6>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][4]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs inner_gapp">
          <div class="recent_img">
            <div class="discount_offer">
               <p>53% OFF</p>
            </div>
            <img src="{{ url('storage')}}/{{ $data['all_listings'][4]['image'] }}">
          </div>
          <div class="thums_img">
            <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 views</p>
          </div>
          <div class="row">
            <div class="col-sm-6 left_recent right_gap">
              <div class="recent_img">
                <img src="{{ asset('assets/frontend/images/recent582.jpg') }}">
              </div>
              <div class="thums_img">
                <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 views</p>
              </div>
            </div>
            <div class="col-sm-6 left_recent">
              <div class="recent_img">
                <img src="{{ asset('assets/frontend/images/recent5287.jpg') }}">
              </div>
              <div class="thums_img">
                <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 views</p>
              </div>
            </div>
          </div>
          <div class="all_show">
            <p>Show all 18 photos</p>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][4]['title'] }} </h4>
            <p> Food Delivery Services, Bakeries, Desserts</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][4]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar12568.jpg') }}">
              </div>
              <div class="col-sm-11 user_rating">
                <h5>Mark Freeman</h5>
                <h6>Added 1 photo</h6>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][5]))

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][5]['image'] }}">
            <div class="discount_offer">
               <p>15% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][5]['title'] }}</h4>
            <p>Restaurants</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][5]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar1.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Nathan Thomas</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][5]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>I thought I'd just shoot two birds with
            one stone. I got my churros and
            walked over to grab a mangonada.
            Luckily, the line wasn't too long so
            I didn't have to wait more than two
            minutes. At first I thought it was kind
            of pricey, but after tasting it, I didn't
            Continue reading</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][5]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    </div>

    <div class="view_more">
    <a href="#">
      View More <img src="{{ asset('assets/frontend/images/Shape-1') }}.png">
    </a>
  </div>
  </div>
</section>


<section class="recent_activity">
  <div class="container">
    <div class="blog_head">
      <h4>Popular Deals</h4>
    </div>
    <div class="row">
    @if(!empty($data['all_listings'][0]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][0]['image'] }}">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][0]['title'] }}</h4>
            <p>Free 3-Month Subscription to Pandora Premium</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][0]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar5824685.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Mark Freeman</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][0]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>How to deal with Mondays. Works everytime :D...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][0]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][1]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][1]['image'] }}">
            <div class="discount_offer">
               <p>48% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][1]['title'] }}</h4>
            <p>160+ bought</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][1]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar125.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Nathan Thomas</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][1]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>Best ! </b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][1]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][2]))

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][2]['image'] }}">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][2]['title'] }}</h4>
            <p>Free 60-Day from Daily Burn</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][2]['price'], 2) }}</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar1.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Andras Palmer</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][2]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>Excellent hotel of this class...best experience...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][2]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    </div>

    <div class="row">
    @if(!empty($data['all_listings'][3]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs inner_gapp">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][3]['image'] }}">
            <div class="discount_offer">
               <p>30% OFF</p>
            </div>
          </div>
          <div class="thums_img">
            <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 Like</p>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][3]['title'] }}</h4>
            <p>Hotels</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][3]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar1254785.jpg') }}">
              </div>
              <div class="col-sm-11 user_rating">
                <h5>Mark Freeman</h5>
                <h6>Added 1 photo</h6>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][4]))
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs inner_gapp">
          <div class="recent_img">
            <div class="discount_offer">
               <p>53% OFF</p>
            </div>
            <img src="{{ url('storage')}}/{{ $data['all_listings'][4]['image'] }}">
          </div>
          <div class="thums_img">
            <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 views</p>
          </div>
          <div class="row">
            <div class="col-sm-6 left_recent right_gap">
              <div class="recent_img">
                <img src="{{ asset('assets/frontend/images/recent582.jpg') }}">
              </div>
              <div class="thums_img">
                <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 views</p>
              </div>
            </div>
            <div class="col-sm-6 left_recent">
              <div class="recent_img">
                <img src="{{ asset('assets/frontend/images/recent5287.jpg') }}">
              </div>
              <div class="thums_img">
                <p><img src="{{ asset('assets/frontend/images/thumbsup.png') }}"> 9 views</p>
              </div>
            </div>
          </div>
          <div class="all_show">
            <p>Show all 18 photos</p>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][4]['title'] }} </h4>
            <p> Food Delivery Services, Bakeries, Desserts</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][4]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar12568.jpg') }}">
              </div>
              <div class="col-sm-11 user_rating">
                <h5>Mark Freeman</h5>
                <h6>Added 1 photo</h6>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    @endif
    @if(!empty($data['all_listings'][5]))

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="{{ url('storage')}}/{{ $data['all_listings'][5]['image'] }}">
            <div class="discount_offer">
               <p>15% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>{{ $data['all_listings'][5]['title'] }}</h4>
            <p>Restaurants</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">${{ number_format($data['all_listings'][5]['price'], 2) }}</div>&nbsp;
               <!-- <div class="cui-price-discount c-txt-price">Free</div> -->
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="{{ asset('assets/frontend/images/avatar1.jpg') }}">
              </div>
              <div class="col-sm-7 user_rating">
                <h5>Nathan Thomas</h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="col-sm-4 plus_reviews">
                <a href="{{ route('listing_detail' , $data['all_listings'][5]['id'] ) }}">Get Coupon</a>
              </div>
            </div>
            <b>I thought I'd just shoot two birds with
            one stone. I got my churros and
            walked over to grab a mangonada.
            Luckily, the line wasn't too long so
            I didn't have to wait more than two
            minutes. At first I thought it was kind
            of pricey, but after tasting it, I didn't
            Continue reading</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="{{ asset('assets/frontend/images/thumbsup.png') }}">
              </div>
              <div class="col-sm-6 time_ago">
                <?php $created = \Carbon\Carbon::createFromTimeStamp(strtotime($data['all_listings'][5]['created_at'])); ?>
                <p>{{ $created ->diff(\Carbon\Carbon::now())->format('%h hours and %i minutes') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    </div>

    <div class="view_more">
    <a href="#">
      View More <img src="{{ asset('assets/frontend/images/Shape-1') }}.png">
    </a>
  </div>
  </div>
</section>

@endsection

