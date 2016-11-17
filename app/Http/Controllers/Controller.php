<?php

namespace App\Http\Controllers;
use App\Dress;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showDress($gender){
		$dressData = Dress::getDress($gender);
		return view('dashboard', array('dress' => $dressData));
	}
}


