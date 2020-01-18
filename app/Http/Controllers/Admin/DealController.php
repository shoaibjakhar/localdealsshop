<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function best_deals()
    {
        $best_deals_listings = \DB::table('listings')
        ->join('users','listings.user_id','users.id')
        ->join('categories','listings.category_id','categories.id')
        ->where('best_deal',1)
        ->paginate(30, array('listings.*', 'categories.title as category', 'users.first_name as created_by'));
        return view('admin.best_deals', ['best_deals_listings' => $best_deals_listings]);
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popular_deals()
    {
        $popular_deals_listings = \DB::table('listings')
        ->join('users','listings.user_id','users.id')
        ->join('categories','listings.category_id','categories.id')
        ->where('popular_deal',1)
        ->paginate(30, array('listings.*', 'categories.title as category', 'users.first_name as created_by'));
        return view('admin.popular_deals', ['popular_deals_listings' => $popular_deals_listings]);
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function featured_deals()
    {
        $featured_deals_listings = \DB::table('listings')
        ->join('users','listings.user_id','users.id')
        ->join('categories','listings.category_id','categories.id')
        ->where('featured_deal',1)
        ->paginate(30, array('listings.*', 'categories.title as category', 'users.first_name as created_by'));
        return view('admin.featured_deals', ['featured_deals_listings' => $featured_deals_listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
