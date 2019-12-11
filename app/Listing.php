<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
	protected $guarede = [];
    //
    public function users(){
    	return $this->belongsTo(User::class, 'user_id');
    }
}
