<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Coupon;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.all_coupons', ['coupons' => $coupons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_coupon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = new Coupon;

        // $category->user_id       = auth()->user()->id;
        $number_of_coupons         = $request->number_of_coupons;
        $coupons_arr = array();
        for ($i=0; $i < $number_of_coupons; $i++) { 
            $coupons_arr[]['coupon_number'] = rand(1000,10000000);
        }
        // $coupon->coupon_number = $coupons_arr;
        // dd($coupon->coupon_number);
        Coupon::insert($coupons_arr);
        return redirect('all_coupons')->with('message', "Copuons Generated Successfully.");
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
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function purchased_coupons()
    {
        $purchased_coupons = Coupon::where('user_id_belongs_to', '>', 0)
               ->orderBy('id', 'desc')
               ->get();
        return view('admin.purchased_coupons',['purchased_coupons' => $purchased_coupons]);
    }
}
