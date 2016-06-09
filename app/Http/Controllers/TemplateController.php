<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Site;

class TemplateController extends Controller
{
    //
    public function Show(Request $request)
    {
    	# code...
    	$url = $request->path();
    	$arrayurl = explode("/", $url);

        $site = DB::table('sites')->where('subdomain',$arrayurl[1])->first();
        $services = DB::table('services')->where('site_id',$site->id)->get();
        $crusals = DB::table('crusals')->where('site_id',$site->id)->get();
        $news = DB::table('news_promotions')->where('site_id',$site->id)->where('type','news')->get();
        $promotions = DB::table('news_promotions')->where('site_id',$site->id)->where('type','promotion')->get();



        return view('temp1/show_en' , compact('services' , 'crusals' , 'news' , 'promotions'));
    }


}
