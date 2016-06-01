<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;


class ProductController extends Controller
{
 
   
	public function index(){
        if (Auth::user()){

            //select all categories 
            $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();

              //select all subcategories have category_id
             $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();

            //select all products 
            $allproducts = DB::table('products')->get();
            // for select only product of this only site
            $products = array();
            foreach ($subcategories as $subcategory) {
              foreach ($allproducts as $product) {
                  if ($subcategory->id ==$product->category_id) {
                      array_push($products, $product);
                  } 
              }
            }
       

            return  view ('product.index',compact('categories','subcategories','products'));
        }else{
            return  redirect ('/login');   
        }
     }

     public function show($id){

        return  view ('product.show');
     }

     public function create(){
        if (Auth::user()){
            //select all categories have category_id==NULL
            $categories = DB::table('categories')->whereNull('category_id')->get();
              //select all subcategories have category_id
            $subcategories = DB::table('categories')->whereNotNull('category_id')->get();

           return  view ('product.create',compact('categories','subcategories'));
        }else{
            return  redirect ('/login');   
        }    
     }

     // for use ajax for display sub category
      public function ajaxcreate(Request $request){
        if (Auth::user()){
          if ($request->ajax()){
            //select all products 
            $subcategories = DB::table('categories')->get();
            // $subcategories='emmmmm';
            return json_encode($subcategories);
          } 
        }else{
            return  redirect ('/login');   
        }
     }


     public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'category_id' => 'required|max:300',
                'subcategory_id' => 'required|max:300',
                'title_product' => 'required|max:300',
                'description' => 'required|max:2000',
                'image_product' => 'required|image',
                
            ]);

            $product= new Product;
            $product->name=$request->input('title_product');
            $product->description=$request->input('description');

            if(Input::file('image_product')){
                // echo "image_product";die();
                $imagefile = Input::file('image_product');
                 $imagefile->move('assets/images',$imagefile->getClientOriginalName());
                 $product->image=$imagefile->getClientOriginalName(); 
            }
            $product->category_id=$request->input('subcategory_id');
            $product->save();
            return  redirect ('/product');
        } else{
            return  redirect ('/login');   
        }
     }



     public function edit($id){
        if (Auth::user()){
            $product=Product::find($id);
            $subcategory=Category::find($product->category_id);
            $category=Category::find($subcategory->category_id);

            //select all categories have category_id==NULL
            $categories = DB::table('categories')->whereNull('category_id')->get();
              //select all subcategories have category_id
            $subcategories = DB::table('categories')->whereNotNull('category_id')->get();
             // var_dump($category);die();
            return  view ('product.edit',compact('category','subcategory','product','categories','subcategories'));
        } else{
            return  redirect ('/login');   
        } 
     }


     public function update($id,Request $request){
        if (Auth::user()){

            $this->validate($request, [
                'category_id' => 'required|max:300',
                'subcategory_id' => 'required|max:300',
                'title_product' => 'required|max:300',
                'description' => 'required|max:2000',
                // 'image_product' => 'required|image',
                
            ]);

            $product=Product::find($id);
            $product->name=$request->input('title_product');
            $product->description=$request->input('description');

            if(Input::file('image_product')){
                // echo "image_product";die();
                $imagefile = Input::file('image_product');
                 $imagefile->move('assets/images',$imagefile->getClientOriginalName());
                 $product->image=$imagefile->getClientOriginalName(); 
            }
            $product->category_id=$request->input('subcategory_id');
            $product->save();
            return  redirect ('/product');
        } else{
            return  redirect ('/login');   
        }
     }



     public function destroy($id){
        if (Auth::user()){
            $product=Product::find($id);
            // $product->delete();
            // return  redirect ('/product');
            // return  view ('product.index');
            // ****************************************************
            // // for use ajax for remove

            $del_products =$product->delete();
            return json_encode( $del_products );
        } else{
            return  redirect ('/login');   
        }
     }

}
