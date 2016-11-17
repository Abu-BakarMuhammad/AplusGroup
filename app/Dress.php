<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dress extends Model
{
    public static function getDress($gender)
	{
		if($gender == "men"){
	    	$result = DB::table('MenDress')->orderBy('id', 'asc')->get();
	    }
	    else {
	    	$result = DB::table('WomenDress')->orderBy('id', 'asc')->get();
	    }
	    return $result;
	}
}
