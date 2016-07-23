<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use App\Site;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        if(isset(Auth::user()->id))
        {
            $site =Auth::user()->site()->first()['attributes']['id'];
            // $site = Site::find(Auth::user()->id);
            if($site)
            {
                return view('home',compact('site'));            
            }
        }

        try {
                if(Auth::user()->status == 'reseller')
                {
                    return redirect('/reseller');
                }
                else
                {
                    return view('home');   
                }    
            }
        catch (\Exception $e) {
            return view('home');
            }
        
    }
}
