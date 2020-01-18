<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Listing;
class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_listings = \DB::table('listings')
        ->join('users','listings.user_id','users.id')
        ->join('categories','listings.category_id','categories.id')
        ->paginate(30, array('listings.*', 'categories.title as category', 'users.first_name as created_by'));
        return view('admin.all_listings', ['all_listings' => $all_listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_listing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $path = '';

        if($request->file('image')!='')

            $path = $request->file('image')->store('assets/frontend/images', 'public');

            

            $listing = new Listing;

            $listing->user_id       = 0;
            $listing->title         = $request->title;
            $listing->image         = $path;
            $listing->price         = $request->price;
            $listing->discount       = $request->discount;
            $listing->summary       = $request->summary;
            $listing->description   = $request->description;

            $listing->save();
            
            return redirect('all_listings')->with('message', "Data Added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
