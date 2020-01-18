<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Admin\Category;
class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_categories = Category::all();
        return view('add_listing', ['all_categories' => $all_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (empty(auth()->user()->id)) {
            return redirect('login')->with('message', "Please login to add listing");
        }

        $validated_data = $this->validate($request, [
            'title'         => 'required',
            'category_id'   => 'required',
            'image'         => 'required',
            'price'         => 'required',
            'summary'       => 'required',
        ]);

        $path = array();

        if($files = $request->file('image'))

            foreach ($files as $file) {
                
                $path[] = $file->store('assets/frontend/images', 'public');

            }
            

            $listing = new Listing;

            $listing->user_id       = auth()->user()->id;
            $listing->title         = $request->title;
            $listing->category_id   = $request->category_id;
            $listing->image         = implode("|", $path);
            $listing->price         = $request->price;
            $listing->summary       = $request->summary;
            $listing->discount      = $request->discount;
            $listing->description   = $request->description;

            $listing->save();
            
            return redirect('listings')->with('message', "Data Added successfully.");
    
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

    public function listing_detail($id)
    {

        $listing_data = Listing::findorfail($id);

        return view('listing_detail', ['listing_data' => $listing_data]);
    }
}
