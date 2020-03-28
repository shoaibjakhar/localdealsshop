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
     * Update profile information.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {

        $data = [
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'phone'         => $request->phone,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country,
            'zip_code'      => $request->zip_code
        ];

        $updated = \DB::table('users')
                    ->where('id', auth()->user()->id)
                    ->update($data);

        return redirect('profile')->with('info_updated', "Data updated successfully.");
    }    
    
    /**
     * Update profile information.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update_profile_photo(Request $request)
    {
    
        $validated_data = $this->validate($request, [
            'image' => 'required',
        ]);

        $path = array();

        if($file = $request->file('image'))

            $path = $file->store('assets/frontend/images', 'public');

             $updated = \DB::table('users')
                    ->where('id', auth()->user()->id)
                    ->update(['profile_image' => $path]);

        return redirect('profile')->with('image_updated', "Profile Image updated successfully.");
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
    /**
     * Show user coupons.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function coupons_history()
    {

        $coupons_data = \DB::table('coupons')
            ->where('customer_id_used_by', auth()->user()->id)
            ->get();

        return view('coupons_history', ['coupons' => $coupons_data]);

    }
}
