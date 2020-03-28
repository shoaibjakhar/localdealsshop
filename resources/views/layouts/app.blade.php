<!DOCTYPE html>
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Groupon</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link id="favicon" rel="icon"  type="images/favicon.png" href="{{ asset('/assets/frontend/images/favicon.svg') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/bootstrap.min.css') }}">
    <!-- listings page css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/frontend/css/jquery.dataTables.min.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/frontend/css/style.css') }}" />
    <script src="{{ asset('/assets/frontend/js/modernizr.min.js') }}"></script>

</head>
<body id="page-name">


<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>



<div class="top_wrap">
   <div class="container">
      <div class="row">
         <div class="col-xl-8 col-lg-8 col-md-8 hidden-sm top_menu_left">
            <ul>
               <li><a class="active" href="{{ url('add_listing') }}">Add Listing</a></li>
            </ul>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 top_menu_left top_menu_right">
            <img class="toggle_btn" src="{{ asset('assets/frontend/images/toggle.png') }}">
            
            <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="padding: 0px">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->first_name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                  <a class="dropdown-item" href="{{ route('profile') }}"> Profile </a>
                                  
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>


                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>

                          </li>
                      @endguest
                  </ul>
              </div>
            </nav>
         </div>
      </div>
   </div>
</div>


<div class="header_wrap">
   <div class="container">
      <div class="row">
         <div class="col-xl-2 col-lg-2 col-md-2 logo_fiji">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></a>
         </div>
         <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 search_items">
            <form action="">
               <select name="category">
                  <option value="all">All Categories</option>
                  <option value="15">Automotive</option>
                  <option value="105">Beauty &amp; Spas</option>
                  <option value="106">Food &amp; Drink</option>
                  <option value="107">Health &amp; Fitness</option>
                  <option value="109">BagsHome Service</option>
                  <option value="110">Personal Services</option>
                  <option value="111">Jewelry &amp; Watches</option>
                  <option value="112">Baby & Kids</option>
                  <option value="113">Computer &amp; Office</option>
                  <option value="114">Phones &amp; Accessories</option>
                  <option value="115">Men’s Clothing</option>
                  <option value="116">Women’s Clothing</option>
                  <option value="117">Dresses</option>
                  <option value="118">Jackets &amp; Coats</option>
                  <option value="119">Sweaters</option>
                  <option value="120">Jeans</option>
                  <option value="121">Suits &amp; Sets</option>
                  <option value="122">Blouses &amp; Shirts</option>
                  <option value="123">Hoodies &amp; Sweatshirts</option>
                  <option value="124">Jackets</option>
                  <option value="125">T-Shirts</option>
                  <option value="126">Shirts</option>
                  <option value="127">Sweaters</option>
                  <option value="128">Socks</option>
                  <option value="108">Toys, Kids &amp; Baby</option>
                  <option value="104">Home Improvement</option>
               </select>
               <input type="text" placeholder="What Are You Looking For?">
               <input type="text" placeholder="Location ?" style="width: 150px">
            <button type="submit"><i class="fa fa-search"></i> Search</button>
            </form>
         </div>


         <!-- <div class="col-xl-3 col-lg-3 col-md-3 cart_box">
            <ul>
               <li class=""><a href="#"><i class="fa fa-list"></i> Watchlist</a></li>
               <li class=""><a href="#"><i class="fa fa-heart-o"></i> Favourites</a></li>
             </ul>
           </div> -->
      </div>
   </div>
</div>

@yield('content')


<div class="footer1-widgets">
   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 footer_mobile-control four_colums_footer">
            <div class="widget contact">
               <h4 class="widget-title">Company Info</h4>
               <ul>
               <li><a href="#">Privacy Policy</a></li>  
               <li><a href="#">Licenses</a></li> 
               <li><a href="#">Terms and Conditions</a></li>  
               </ul>
            </div>
         </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 footer_mobile-control icons_right-ftr four_colums_footer">
         <div class="widget contact">
            <h4 class="widget-title">Work With Groupon</h4>
            <ul>
            <li><a href="#">Join Marketplace</a></li>  
            <li><a href="#">Run Deal</a></li>  
            <li><a href="#">Vendor Code of Conduct</a></li>  
            </ul>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 get-app footer_mobile-control four_colums_footer">
         <div class="widget contact">
               <h4 class="widget-title">Customer Service</h4>
               <ul>
               <li><a href="#">About us</a></li>
               <li><a href="#">Contact us</a></li>  
               <li><a href="#">FAQs</a></li>  
               </ul>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 footer_mobile-control four_colums_footer">
            <div class="widget contact">
               <div class="socials">
                  <div class="footer-title">BUY WITH CONFIDENCE</div>
                  <img class="img-responsive" src="{{ asset('assets/frontend/images/nortonf_03.jpg') }}" alt="">
               </div>
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 subsribe">
            <span></span>
            <h4 class="widget-title">STAY UP TO DATE</h4>
            <div class="form-group is-empty">
            <input type="email" name="email" value="" class="form-control" id="email" placeholder="Please enter your email" required="required">
            <button name="submit" type="submit" value="Submit" class="btn btn-default rippler rippler-default">Subscribe</button>
            </div>
            <p><small>Register now to get updates on promotions and coupons.</small></p>
         </div> 
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 footer_mobile-control socials_follow">
            <div class="widget contact stay_conected">
               <h4 class="widget-title widget-title_sec">STAY CONNECTED</h4>
               <div class="socials">
                  <ul>
                     <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                     <li><a target="_blank" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> 
                  </ul>
               </div>
            </div>
         </div> 
      </div>
   </div>
</div>

<div class="footer1-meta">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="copyright">
               Copyright © 2019 Groupon | All rights Reserved |  
               <!-- <a href="#" target="_blank" class="link">Pure Digital</a>  -->
            </div>
         </div>
      </div>
   </div>
</div>

<script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
<!-- listings page js -->
<script src="{{ asset('assets/frontend/js/jquery.dataTables.min.js') }}"></script>

<!-- add_listing js -->
<script>

$(".step-1 li").click(function(){
  $(".step-2, .step1-line").show();
});

</script>
<!-- end -->

</body>
</html>