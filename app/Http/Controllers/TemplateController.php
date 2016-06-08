<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Site;
use App\Aboutus;

class TemplateController extends Controller
{
    //
    public function Show(Request $request)
    {
    	# code...
    	$url = $request->path();
    	$arrayurl = explode("/", $url);
        $services = DB::table('services')->where('site_id',$arrayurl[2])->get();
        $crusals = DB::table('crusals')->where('site_id',$arrayurl[2])->get();
        $news = DB::table('news_promotions')->where('site_id',$arrayurl[2])->where('type','news')->get();
        $promotions = DB::table('news_promotions')->where('site_id',$arrayurl[2])->where('type','promotion')->get();
        $site_id=$arrayurl[2];
        $aboutus=Aboutus::where('site_id', '=', $site_id)->first();

        return view('temp1/show_en' , compact('services' , 'crusals' , 'news' , 'promotions','aboutus'));
    }


}
