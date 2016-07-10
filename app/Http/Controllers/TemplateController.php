<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;

use App\Category;
use App\Site;
use App\Aboutus;
use App\Header;
use App\Template;
use App;

class TemplateController extends Controller{

    private function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    
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
        // var_dump($mysite);die();
        foreach ($mysite as $site) {
            $site_id=$site->id;
            $template_id=$site->template_id;
        }
        // die($template_id);  
        $mytemplate = DB::table('templates')->where('id',$template_id)->get();
        foreach ($mytemplate as $templat) {
            $templat_name=$templat->development_name;
        }
        
        // die($templat_name);
 // ***************** for pages and navbar ***************************
        $menus = DB::table('menus')->where('site_id',$site_id)->get();
        $pages = DB::table('pages')->where('site_id',$site_id)->get();
        $en_menupages = array();
        $ar_menupages = array();
        $urlpages = array();
        // var_dump($menus);die();
        foreach ($menus as $menu) {
        	foreach ($pages as $page) {
        		if ($menu->route==$page->id) {
        			array_push($en_menupages, $menu->title);
                    array_push($ar_menupages, $menu->ar_title);
        			array_push($urlpages,$page->title);
        		}
        	}
        }
 // var_dump($en_menupages);
 // var_dump($ar_menupages);die();
 // ***************** for staticpage ***************************
        $staticpages=[];
        $containpages=[];
        foreach ($pages as $page) {
            if ($page->content) {
                array_push($staticpages, $page->title);
                array_push($containpages, $page->content);
            }
        }

       
  // ***************** for contact us ***************************
        $contacts = DB::table('contacts')->where('site_id',$site_id)->get();       

// ***************** for category and subcategory and product ***************************
        $cats_and_subcats=[];
        $categories = DB::table('categories')->where('site_id',$site_id)->whereNull('category_id')->get(); 
        foreach ($categories as $category) {
            # code...
            $category->subcategories = DB::table('categories')->where('site_id',$site_id)->where('category_id',$category->id)->get(); 
            foreach ($category->subcategories as $subcategory) {
                $subcategory->products = DB::table('products')->where('category_id',$subcategory->id)->get();
            }
            array_push($cats_and_subcats, $category) ;
        }

        $subcategories = DB::table('categories')->where('site_id',$site_id)->whereNotNull('category_id')->get();
        $products= DB::table('products')->orderBy('created_at', 'desc')->get();
        // for make randam for display product
        $cat_id_product=[];
        $image_product=[];        
        $en_name_product=[];
        $en_description_product=[];
        $en_price_product=[];
        $ar_name_product=[];
        $ar_description_product=[];
        $ar_price_product=[];
        foreach ($subcategories as $subcategory) {
            foreach($products as $product){
                if($subcategory->id == $product->category_id){
                    array_push($cat_id_product, $product->category_id);
                    array_push($image_product, $product->image);
                    array_push($en_name_product, $product->name);
                    array_push($en_description_product, $product->description);
                    array_push($en_price_product, $product->price);
                    array_push($ar_name_product, $product->ar_name);
                    array_push($ar_description_product, $product->ar_description);
                    array_push($ar_price_product, $product->ar_price);
                }
            }
        }  
        $rand_product=[];
        $leng=0;
        if(count($en_name_product)< 12){
            $leng=count($en_name_product);
        }else{
            $leng=12;
        }  
        $rand_product=TemplateController::UniqueRandomNumbersWithinRange(1,count($en_name_product),$leng);
        // print_r($name_product);print_r($rand_product);die();
// ***************** for services ***************************
        $services = DB::table('services')->where('site_id',$site_id)->get();
        $crusals = DB::table('crusals')->where('site_id',$site_id)->get();
        $news = DB::table('news_promotions')->where('site_id',$site_id)->where('type','news')->where('end_date', '>=', date('Y-m-d'))->where('start_date', '<=', date('Y-m-d'))->get();
        $promotions = DB::table('news_promotions')->where('site_id',$site_id)->where('type','promotion')->where('end_date', '>=', date('Y-m-d'))->where('start_date', '<=', date('Y-m-d'))->get();
        // $q->where('end_date', '>=', date('Y-m-d'));

        // dd(date('Y-m-d'));

        $aboutus=Aboutus::where('site_id', '=', $site_id)->first();
        $header=Header::where('site_id', '=', $site_id)->first();

// ***************** return  ar or en***************************
        if ($arrayurl[1]=='en') {
            App::setLocale('en');
            return view($templat_name.'/en',compact('mysite','subdomain','en_menupages','urlpages','staticpages','containpages','contacts','categories','subcategories','cat_id_product','en_name_product','image_product','en_description_product','en_price_product','rand_product','cats_and_subcats','services' , 'crusals' , 'news' , 'promotions','aboutus','header','site_id'));
        }elseif ($arrayurl[1]=='ar') {
            App::setLocale('ar');
            return view($templat_name.'/ar',compact('mysite','subdomain','ar_menupages','urlpages','staticpages','containpages','contacts','categories','subcategories','cat_id_product','ar_name_product','image_product','ar_description_product','ar_price_product','rand_product','cats_and_subcats','services' , 'crusals' , 'news' , 'promotions','aboutus','header','site_id'));

        }
    }

}




        