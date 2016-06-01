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

class SubCategoryController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            //select all categories have category_id==NULL
            $categories = DB::table('categories')->whereNull('category_id')->get();
              //select all categories have category_id
            $subcategories = DB::table('categories')->whereNotNull('category_id')->get();
            // for make compare for delete subcategory or not
            $products = DB::table('products')->get();

            return  view ('subcategory.index',compact('categories','subcategories','products'));
        } else{
            return  redirect ('/login');   
        }
     }

     public function show($id){
        if (Auth::user()){
            return  view ('subcategory.show');
        } else{
            return  redirect ('/login');   
        }
     }

     public function create(){
        if (Auth::user()){
            $subcategories=Category::All();
            return  view ('subcategory.create',compact('subcategories'));
        }else{
            return  redirect ('/login');   
        }
     }

     public function store(Request $request){
        if (Auth::user()){

             $this->validate($request, [
                'category_id' => 'required|max:300',
                'title_subcategory' => 'required|max:300',
                'subdescription' => 'required|max:2000',
                'image_subcategory' => 'required|image',                 
            ]);

            $subcategory= new Category;
            $subcategory->name=$request->input('title_subcategory');
            $subcategory->description=$request->input('subdescription');
            // for uploadimage
            if(Input::file('image_subcategory')){
                // echo "image_subcategory";die();
                $imagefile = Input::file('image_subcategory');
                 $imagefile->move('assets/images',$imagefile->getClientOriginalName());
                 $subcategory->image=$imagefile->getClientOriginalName(); 
            }
            $subcategory->site_id=Auth::user()->id;
            $subcategory->category_id=$request->input('category_id');
            $subcategory->save();
            return  redirect ('/subcategory');
        } else{
            return  redirect ('/login');   
        }

     }



     public function edit($id){
        if (Auth::user()){
            $subcategory=Category::find($id);
            $category=Category::find($subcategory->category_id);
            $categories=Category::All();
            return  view ('subcategory.edit',compact('subcategory','category','categories'));
        } else{
            return  redirect ('/login');   
        } 
     }


     public function update($id,Request $request){
	    if (Auth::user()){

            $this->validate($request, [
                'category_id' => 'required|max:300',
                'title_subcategory' => 'required|max:300',
                'subdescription' => 'required|max:2000',
                // 'image_subcategory' => 'required|image',                 
            ]);

            $subcategory=Category::find($id);
            $subcategory->name=$request->input('title_subcategory');
            $subcategory->description=$request->input('subdescription');

            if(Input::file('image_subcategory')){
                // echo "image_subcategory";die();
                $imagefile = Input::file('image_subcategory');
                 $imagefile->move('assets/images',$imagefile->getClientOriginalName());
                 $subcategory->image=$imagefile->getClientOriginalName(); 
            }
            $subcategory->site_id=Auth::user()->id;
            $subcategory->category_id=$request->input('category_id');
            $subcategory->save();
            return  redirect ('/subcategory');
        } else{
            return  redirect ('/login');   
        }
     }



     public function destroy($id){
        if (Auth::user()){
            $subcategory=Category::find($id);
            $subcategory->delete();
            return  redirect ('/subcategory');
            // return  view ('subcategory.index');
        } else{
            return  redirect ('/login');   
        }
     }




}