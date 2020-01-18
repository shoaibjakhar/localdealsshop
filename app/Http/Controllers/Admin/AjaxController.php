<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AjaxController extends Controller
{
   public function post(Request $request){

    $response = array(
      'status' 	=> 'error',
      'msg' 	=> 'Error Occured! Try Again',
      );
    
   	$field_name = $request->field_name;
   	$field_val  = $request->field_val;
   	$listing_id = $request->listing_id;

   	$updated = \DB::table('listings')
            ->where('id', $listing_id)
            ->update([$field_name => $field_val]);

    if (!empty($updated)) {
      
      $response = array(
          'status' 	=> 'success',
          'msg' 	=> 'Data updated successfully!',
      );
    	
    }
      return response()->json($response); 
    
    }
}
