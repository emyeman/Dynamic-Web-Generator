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
//        if (isset($_SERVER['HTTP_COOKIE'])) {
//            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//            foreach($cookies as $cookie) {
//                $parts = explode('=', $cookie);
//                $name = trim($parts[0]);
//                setcookie($name, '', time()-1000);
//                setcookie($name, '', time()-1000, '/');
//            }
//        }


        if(isset(Auth::user()->id))
        {
            $site =Auth::user()->site()->first()['attributes']['id'];
            // $site = Site::find(Auth::user()->id);
            if($site)
            {
                return redirect('/dashboard');
            }

            if(Auth::user()->status == 'reseller')
            {
                return redirect('/reseller');
            }
            else
            {
                $firstvisitsite = '';
                if (!isset($_COOKIE['firsttimesite']))
                {
                    $firstvisitsite = 'yes';
                    setcookie("firsttimesite", "no");
                    return view('home',compact("firstvisitsite"));
                }
                else
                {
                    $firstvisitsite = 'no';
                    return view('home',compact("firstvisitsite"));
                }
            }
        }


        $firstvisit = '';
        if (!isset($_COOKIE['firsttime']))
        {
            $firstvisit = 'yes';
            setcookie("firsttime", "no");
            return view('home',compact("firstvisit"));
        }
        else
        {
            $firstvisit = 'no';
            return view('home',compact("firstvisit"));
        }



    }
}
