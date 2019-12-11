<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show user listigns.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listings()
    {

        $listings = auth()->user()->listings;

        return view('listings', ['listings' => $listings]);
    }     

    /**
     * Show user listigns.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listing_detail($id)
    {

        $listing_data = Listing::findorfail($id);

        return view('listing_detail', ['listing_data' => $listing_data]);
    }    

    /**
     * Show user buyings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function buyings()
    {
        return view('buyings');
    }

    /**
     * Show user sellings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sellings()
    {
        return view('sellings');
    }
}
