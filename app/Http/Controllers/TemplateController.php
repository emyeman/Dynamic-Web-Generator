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

    	// $arrayurl[0];   //for obtain on subdomain
        // $arrayurl[1];  //for obtain on (ar or en)
        // echo $arrayurl[1];die();
        $subdomain=$arrayurl[0];
        $mysite = DB::table('sites')->where('subdomain',$arrayurl[0])->get();
        // var_dump($mysite);
        foreach ($mysite as $site) {
            $site_id=$site->id;
        }
        // die($site_id);  //for obtain on site_id
 // ***************** for pages and navbar ***************************
        $menus = DB::table('menus')->where('site_id',$site_id)->get();
        $pages = DB::table('pages')->where('site_id',$site_id)->get();
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
        $contacts = DB::table('contacts')->where('site_id',$site_id)->get();       

// ***************** for category and subcategory and product ***************************
        $categories = DB::table('categories')->where('site_id',$site_id)->whereNull('category_id')->get(); 

// ***************** for services ***************************
        $services = DB::table('services')->where('site_id',$site_id)->get();
        $crusals = DB::table('crusals')->where('site_id',$site_id)->get();
        $news = DB::table('news_promotions')->where('site_id',$site_id)->where('type','news')->get();
        $promotions = DB::table('news_promotions')->where('site_id',$site_id)->where('type','promotion')->get();


        $aboutus=Aboutus::where('site_id', '=', $site_id)->first();
        $header=Header::where('site_id', '=', $site_id)->first();


// ***************** return  ar r en***************************
        if ($arrayurl[1]=='en') {
            return view('temp1/en',compact('subdomain','menupages','urlpages','contacts','categories','services' , 'crusals' , 'news' , 'promotions','aboutus','header'));
        }elseif ($arrayurl[1]=='ar') {
            return view('temp1/ar',compact('subdomain','menupages','urlpages','contacts','categories','services' , 'crusals' , 'news' , 'promotions','aboutus','header'));
        }
    }

}




        