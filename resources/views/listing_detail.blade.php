@extends('layouts.app')

@section('content')





<div class="sec-padd allCat-list-wrap light-gray-bg">
  <div class="container">
    <div class="row">
        

          <div class="col-xl-8 col-lg-8 col-md-8">
              
              <div class="all-cat-list job-lists">
                <div class="row">
                    <div class="col-lg-12 p-0">
                      <div id="demo" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                          </ul>
                          
                          <!-- The slideshow -->
                          <div class="carousel-inner">
                            
                            @if( urls_array($listing_data->image) )
                              @foreach(urls_array($listing_data->image) as $key => $url)
                              <div class="carousel-item {{ ($loop->first) ? 'active':'' }} ">
                                <img src="{{ url('storage')}}/{{ ($url) ?? '' }}" alt="Los Angeles" width="1100" height="500">
                              </div>
                              @endforeach
                            @endif
                            
                          </div>
                          
                          <!-- Left and right controls -->
                          <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 p-0">
                      <div class="job-listing-box-inner job-details">
                          <h4>{{ $listing_data->title }}</h4>
                          <div class="job-bottom-detail">
                            <h6>Key details</h6>

                            <div class="row">
                              <div class="col-lg-12">
                                  <p>{{ $listing_data->summary }}</p>
                              </div>
                            </div>

                            <!-- <div class="row">
                              <div class="col-lg-2">
                                  <p><strong>Location:</strong></p>
                              </div>
                              <div class="col-lg-10">
                                  <p>4 Victor st, Avondale, Auckland City, Auckland.</p>
                              </div>
                            </div> -->
                            <!-- <div class="row">
                              <div class="col-lg-2">
                                  <p><strong>Available:</strong></p>
                              </div>
                              <div class="col-lg-10">
                                  <p>Mon 14 Jan</p>
                              </div>
                            </div> -->
                            <!-- <div class="row">
                              <div class="col-lg-2">
                                  <p><strong>Property ID#:</strong></p>
                              </div>
                              <div class="col-lg-10">
                                  <p>GCK832</p>
                              </div>
                            </div> -->
                            <!-- <div class="row">
                              <div class="col-lg-2">
                                  <p><strong>Furnishings: </strong></p>
                              </div>
                              <div class="col-lg-10">
                                  <p>Washing machine, Dryer, Dishwasher­, Fridge etc...</p>
                              </div>
                            </div> -->
                            <!-- <div class="row">
                              <div class="col-lg-2">
                                  <p><strong>In the area:</strong></p>
                              </div>
                              <div class="col-lg-10">
                                  <p>Avondale college, Avondale Primary, Rosebank School, Lynn Mall, Reading Cinema, Uptown Bounce, Gym.</p>
                              </div>
                            </div> -->

                            <!-- <div class="row">
                              <div class="col-lg-2">
                                  <p><strong>Parking:</strong></p>
                              </div>
                              <div class="col-lg-10">
                                  <p>Off street and on street parking.</p>
                              </div>
                            </div> -->
                          </div>
                          <h6>Description</h6>
                          <ul>
                            <li>{{ $listing_data->description }}</li>
                          </ul>
                          <h4 style="margin: 27px 0 18px;border-bottom: 1px solid #cccccc70;padding: 0 0 6px;">Relevant Reviews</h4>
                          <!-- <div class="row">
                            <div class="col-sm-1 user_avatar" style="    text-align: center;padding: 5px 0 0;">
                              <img src="images/avatar5824685.jpg">
                            </div>
                            <div class="col-sm-11 user_rating" style="    padding: 0;">
                              <h5>Mark Freeman</h5>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-half-o"></i>
                            </div>
                            
                          </div> -->
                          <!-- <b style="    font-size: 13px;padding: 8px 15px 12px;display: block;">I’m still exploring the different music genre’s. So far, I’m enjoying having Pandora.</b> -->
                          <!-- <div class="row" style="    padding: 0 14px 16px;">
                          <div class="col-sm-6 thumup">
                            <img src="images/thumbsup.png">
                          </div>
                          <div class="col-sm-6 time_ago">
                            <p>45 min ago</p>
                          </div>
                        </div> -->

                          <b style="font-size: 13px;padding: 8px 15px 12px;display: block;">No Reviews Yet</b>

                      </div>
                    </div>
                </div>
              </div>
            
          </div>


        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="category-lists" id="adv-det">                 
                <div class="category-list-group motor-right">
                    <h4>Advertiser's details</h4>
                    <div class="row border_box">
                      <div class="col-sm-6 limited_offer">
                        <i class="fa fa-clock-o"></i>
                        <p>Limited Time Remaining!</p>
                      </div>
                      <div class="col-sm-6 ratings_box">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p>0 ratings</p>
                      </div>
                    </div>
                    <ul class="checkbox_items">
                      <li>
                        <input type="radio" id="f-option" name="selector">
                        <label for="f-option">Free 3-Month Subscription to Pandora Premium</label>
                        <div class="check"></div>
                        <div class="row sidegapp">
                          <div class="col-sm-6 thumup">
                            <p>5,000+ bought</p>
                          </div>
                          <div class="col-sm-6 time_ago">
                            <p>${{ number_format($listing_data->price, 2) }}</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <input type="radio" id="t-option" name="selector">
                        <label for="t-option">Free 3-Month Ad-Free Music Pandora Plus Subscription</label>
                        <div class="check"><div class="inside"></div></div>
                        <div class="row sidegapp">
                          <div class="col-sm-6 thumup">
                            <p>1,000+ bought</p>
                          </div>
                          <div class="col-sm-6 time_ago">
                            <p>${{ number_format($listing_data->price, 2) }}</p>
                          </div>
                        </div>
                      </li>
                      
                      </ul>
                    <div class="row adv-detail">
                      <div class="col-lg-12  p-0  ">
                        <!-- <div class="custom-control custom-checkbox my-2">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked203">
                        <label class="custom-control-label" for="defaultUnchecked203"> Email me a copy of this message</label>
                        </div> -->
                        @guest
                        <a href="{{ route('login') }}">
                          <button type="submit" class="btn btn-primary btn-block" ><i class="fa fa-gift"></i> Get Coupon</button>
                          
                          <button type="submit" class="btn btn-primary btn-block" ><i class="fa fa-phone"></i> Call Now</button>
                        </a>
                        @else
                        <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-gift"></i> Get Coupon</button>

                        <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#phoneModel"><i class="fa fa-phone"></i> Call Now</button>
                        @endguest
                      </div>
                      
                    </div>  
                           
                </div>
            </div>



        </div>
    </div>
  </div>
</div>



<!-- <div class="payment_wrap">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 cards_payments">
           <ul>
             <li class="full-info"><span>Payment Methods:</span>
             </li>
             <li><i class="partner p-master"></i></li>
             <li><i class="partner p-visa"></i></li>
             <li><i class="partner p-maestro"></i></li>
             <li><i class="partner p-paypal"></i></li>
             <li><i class="partner p-discover"></i></li>
             <li><i class="partner p-ae"></i></li>
           </ul>
         </div>
         <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 payments_cards">
           <ul>
               <li class="full-info"><span>Delivery Methods:</span></li>
               <li><i class="partner p-ems"></i></li>
               <li><i class="partner p-ups"></i></li>
               <li><i class="partner p-dhl"></i></li>
            </ul>
         </div>
       </div>
   </div>
</div> -->

<section class="recent_activity">
  <div class="container">
    <div class="blog_head">
      <h4>Recent Items</h4>
    </div>
    <div class="row">
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="images/c349x211q85.jpg">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>Pandora</h4>
            <p>Free 3-Month Subscription to Pandora Premium</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$29.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar5824685.jpg">
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
                <a href="#">Get Coupon</a>
              </div>
            </div>
            <b>How to deal with Mondays. Works everytime :D...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>45 min ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="images/blog3.jpg">
            <div class="discount_offer">
               <p>48% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>Davines Melu Anti-Breakage Shampoo</h4>
            <p>160+ bought</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$30.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar125.jpg">
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
                <a href="#">Get Coupon</a>
              </div>
            </div>
            <b>Best ! </b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>1 hour ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="images/blog55.jpg">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
          </div>
          <div class="recent_post_info">
            <h4>Daily Burn</h4>
            <p>Free 60-Day from Daily Burn</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$40.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar1.jpg">
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
                <a href="#">Get Coupon</a>
              </div>
            </div>
            <b>Excellent hotel of this class...best experience...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>1 hour ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    

    <div class="row">
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="images/c349x211q85.jpg">
          </div>
          <div class="recent_post_info">
            <h4>Pandora</h4>
            <p>Free 3-Month Subscription to Pandora Premium</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$29.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar5824685.jpg">
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
                <a href="#">Get Coupon</a>
              </div>
            </div>
            <b>How to deal with Mondays. Works everytime :D...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>45 min ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
            <img src="images/blog3.jpg">
          </div>
          <div class="recent_post_info">
            <h4>Davines Melu Anti-Breakage Shampoo</h4>
            <p>160+ bought</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$30.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar125.jpg">
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
                <a href="#">Get Coupon</a>
              </div>
            </div>
            <b>Best ! </b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>1 hour ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <div class="discount_offer">
               <p>43% OFF</p>
            </div>
            <img src="images/blog55.jpg">
          </div>
          <div class="recent_post_info">
            <h4>Daily Burn</h4>
            <p>Free 60-Day from Daily Burn</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$40.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar1.jpg">
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
                <a href="#">Get Coupon</a>
              </div>
            </div>
            <b>Excellent hotel of this class...best experience...</b>
            <div class="row">
              <div class="col-sm-6 thumup">
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>1 hour ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs inner_gapp">
          <div class="recent_img">
            <img src="images/recent125.jpg">
          </div>
          <div class="thums_img">
            <p><img src="images/thumbsup.png"> 9 Like</p>
          </div>
          <div class="recent_post_info">
            <h4>Royal Residences</h4>
            <p>Hotels</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$29.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar1254785.jpg">
              </div>
              <div class="col-sm-11 user_rating">
                <h5>Mark Freeman</h5>
                <h6>Added 1 photo</h6>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs inner_gapp">
          <div class="recent_img">
            <img src="images/recent-125478.jpg">
          </div>
          <div class="thums_img">
            <p><img src="images/thumbsup.png"> 9 Like</p>
          </div>
          <div class="row">
            <div class="col-sm-6 left_recent right_gap">
              <div class="recent_img">
                <img src="images/recent582.jpg">
              </div>
              <div class="thums_img">
                <p><img src="images/thumbsup.png"> 9 Like</p>
              </div>
            </div>
            <div class="col-sm-6 left_recent">
              <div class="recent_img">
                <img src="images/recent5287.jpg">
              </div>
              <div class="thums_img">
                <p><img src="images/thumbsup.png"> 9 Like</p>
              </div>
            </div>
          </div>
          <div class="all_show">
            <p>Show all 18 photos</p>
          </div>
          <div class="recent_post_info">
            <h4>Cake Corner </h4>
            <p> Food Delivery Services, Bakeries, Desserts</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$29.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar12568.jpg">
              </div>
              <div class="col-sm-11 user_rating">
                <h5>Mark Freeman</h5>
                <h6>Added 1 photo</h6>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>

      <div class="col-sm-4 recent_box">
        <div class="shadow_boxs">
          <div class="recent_img">
            <img src="images/avatar125698.jpg">
          </div>
          <div class="recent_post_info">
            <h4>Food Zone</h4>
            <p>Restaurants</p>
            <div class="cui-price" data-pingdom-id="deal-price">
               <div class="cui-price-original c-txt-gray-dk">$29.97</div>&nbsp;
               <div class="cui-price-discount c-txt-price">Free</div>
            </div>
            <div class="row">
              <div class="col-sm-1 user_avatar">
                <img src="images/avatar1.jpg">
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
                <a href="#">Get Coupon</a>
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
                <img src="images/thumbsup.png">
              </div>
              <div class="col-sm-6 time_ago">
                <p>1 hour ago</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="view_more">
    <a href="#">
      View More <img src="images/Shape-1.png">
    </a>
  </div>
  </div>
</section>

<!-- Modal for coupon -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px">
    <div class="modal-content">
      <div class="row coupon_row">
        <div class="col-sm-5 left_col">
          <input type="hidden" id="customer_id_used_by" value="{{ auth()->id() }}">
          <span class="company_info">Company Name</span>
          <h3 style="">SAVE UP TO</h3>
          <h1>30% OFF</h1>
        </div>
        <div class="col-sm-7 right_col">
          <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo" style="width:100%">
          <h2>Get Coupon Code</h2>
          <span id="foo">{{ $coupon_details->coupon_number }} </span>
          <span class="copied_clipboard" style="display: none; padding: 10px; color: #fff;"></span><br>
          <div class="bottom_div">
            <!-- <button class="btn">Download Code</button> -->
            <button class="btn copy_to_clipboard" data-clipboard-target="#foo">Copy Code</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Model for phone no -->
<div class="modal fade" id="phoneModel" tabindex="-1" role="dialog" aria-labelledby="phoneModelTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px">
    <div class="modal-content">
      <div class="row coupon_row">
        <div class="col-sm-5 left_col">
          <input type="hidden" id="customer_id_used_by" value="{{ auth()->id() }}">
          <span class="company_info">Company Name</span>
          <h3 style="">SAVE UP TO</h3>
          <h1>30% OFF</h1>
        </div>
        <div class="col-sm-7 right_col">
          <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo" style="width:100%">
          <h2>Agnet Phone Number</h2>
          <span id="foo1">+1 32465465465 </span>
          <span class="copied_clipboard1" style="display: none; padding: 10px; color: #fff;"></span><br>
          <div class="bottom_div">
            <!-- <button class="btn">Download Code</button> -->
            <button class="btn copy_to_clipboard1" data-clipboard-target="#foo1">Copy Phone</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script src="dist/clipboard.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>

<script>

  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

</script>

@endsection