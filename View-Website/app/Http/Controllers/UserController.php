<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class UserController extends Controller
{
    //
    public function show()
    {
    	# code...
    	$results = DB::select('select * from users where id = ?', [1]);
    	return view('user.show');
    }
}
