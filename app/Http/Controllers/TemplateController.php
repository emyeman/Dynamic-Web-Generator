<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Category;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;

use App\Site;
use App\Aboutus;
use App\Header;
use App\Template;

class TemplateController extends Controller
{
    
    public function index(){

        $temps=Template::all();

        return view('activetemp',compact('temps'));
        
        
    }
   public function Show(Request $request){
    	$url=$request->path();
    	$arrayurl = explode("/", $url);
    	// $arrayurl[1];   //for obtain on subdomain
    	// $arrayurl[2];     //for obtain on site_id

 // ***************** for pages and navbar ***************************
        $menus = DB::table('menus')->where('site_id',$arrayurl[2])->get();
        $pages = DB::table('pages')->where('site_id',$arrayurl[2])->get();
        $menupages = array();
        $urlpages = array();
        // var_dump($menus);die();
        foreach ($menus as $menu) {
        	foreach ($pages as $page) {
        		if ($menu->route==$page->id) {
        			array_push($menupages, $menu->title);
        			array_push($urlpages,$page->title);
        		}
        	}
        }
 
  // ***************** for contact us ***************************
        $contacts = DB::table('contacts')->where('site_id',$arrayurl[2])->get();       

// ***************** for category and subcategory and product ***************************
        $categories = DB::table('categories')->where('site_id',$arrayurl[2])->whereNull('category_id')->get(); 

// ***************** for services ***************************
        $services = DB::table('services')->where('site_id',$arrayurl[2])->get();
        $crusals = DB::table('crusals')->where('site_id',$arrayurl[2])->get();
        $news = DB::table('news_promotions')->where('site_id',$arrayurl[2])->where('type','news')->get();
        $promotions = DB::table('news_promotions')->where('site_id',$arrayurl[2])->where('type','promotion')->get();
        $site_id=$arrayurl[2];
        $aboutus=Aboutus::where('site_id', '=', $site_id)->first();
        $header=Header::where('site_id', '=', $site_id)->first();

// ***************** return ***************************
    	return view('temp1/show_en',compact('menupages','urlpages','contacts','categories','services' , 'crusals' , 'news' , 'promotions','aboutus','header'));
     }



}
