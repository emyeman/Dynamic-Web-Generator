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
use File;
use Session;


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

     // for use ajax for display element subcategory
      public function ajaxcreate($id,Request $request){
        if (Auth::user()){
          if ($request->ajax()){
            //select all categories 
            $subcategories = DB::table('categories')->where('site_id',Auth::user()->id)->where('category_id',$id)->get();
            // $subcategories='emmmmm';
            // var_dump($subcategories);die();
            return $subcategories;
          } 
        }else{
            return  redirect ('/login');   
        }
     }


     public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'category_id' => 'required|max:255',
                'subcategory_id' => 'required|max:255',
                'title_product' => 'required|max:255',
                'description' => 'required',
                'image_product' => 'required',
                
            ]);

            $product= new Product;
            $product->name=trim($request->input('title_product'));
            $product->description=trim($request->input('description'));
            $product->price=$request->input('price_product');

            if(Input::file('image_product')){
                // echo "image_product";die();
                $imagefile = Input::file('image_product');
                // for obtain domain name for save image
                $subdomain=Auth::user()->site->subdomain;
                $extention=time().$imagefile->getClientOriginalName();
                $imagefile->move('assets/images/'.$subdomain.'/product',$extention);
                // echo $subdomain;die();
                $product->image=$subdomain.'/product/'.$extention; 
            }
            $product->category_id=$request->input('subcategory_id');
            $product->save();
            Session::flash('insert_success', 'A new product has been added successfully');
            return  redirect ('/product/create');
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
            $categories = DB::table('categories')->where('site_id',Auth::user()->id)->whereNull('category_id')->get();
              //select all subcategories have category_id
            $subcategories = DB::table('categories')->where('site_id',Auth::user()->id)->where('category_id',$subcategory->category_id)->get();
             // var_dump($category);die();
            return  view ('product.edit',compact('category','subcategory','product','categories','subcategories'));
        } else{
            return  redirect ('/login');   
        } 
     }


     public function update($id,Request $request){
        if (Auth::user()){

            $this->validate($request, [
                'category_id' => 'required|max:255',
                'subcategory_id' => 'required|max:255',
                'title_product' => 'required|max:255',
                'description' => 'required',
                // 'image_product' => 'required',
                
            ]);

            $product=Product::find($id);
            $product->name=trim($request->input('title_product'));
            $product->description=trim($request->input('description'));
            $product->price=$request->input('price_product');
            $old_image=$product->image;
            if(Input::file('image_product')){
                // echo "image_product";die();
                $imagefile = Input::file('image_product');
                // for obtain domain name for save image
                $subdomain=Auth::user()->site->subdomain;
                $extention=time().$imagefile->getClientOriginalName();
                $imagefile->move('assets/images/'.$subdomain.'/product',$extention);
                // echo $subdomain;die();
                $product->image=$subdomain.'/product/'.$extention;

                File::delete('assets/images/'.$old_image); //for delete file image from folder 
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
            $old_image=$product->image;
            $del_products =$product->delete();
            File::delete('assets/images/'.$old_image); //for delete file image from folder
            return json_encode( $del_products );
        } else{
            return  redirect ('/login');   
        }
     }

}
