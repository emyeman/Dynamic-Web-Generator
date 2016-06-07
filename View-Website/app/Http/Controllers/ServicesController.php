<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ServicesController extends Controller
{
    //
    public function show()
    {
    	$services = DB::select('select * from services where site_id = ?', [1]);
    	return view('YasminTemplate.services.index',compact('services'));
    	# code...
    }
}
