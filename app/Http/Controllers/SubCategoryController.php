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
use File;
use Session;


class SubCategoryController extends Controller
{
	public function index(){
        if (Auth::user()){
            //select all categories have category_id==NULL
            if(Auth::user()->status == 'reseller')
            {
                $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->whereNull('category_id')->get();
                //select all categories have category_id
                 $subcategories = DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
                // for make compare for delete subcategory or not
            }
            else
            {  
                 $categories = DB::table('categories')->where('site_id',Auth::user()->id)->whereNull('category_id')->get();
                //select all categories have category_id
                 $subcategories = DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
                // for make compare for delete subcategory or not
            }
            
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
            // $subcategories=Category::All();
            if(Auth::user()->status == 'reseller')
            {
                //select all categories have category_id
                 $subcategories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                // for make compare for delete subcategory or not
            }
            else
            {  
                //select all categories have category_id
                 $subcategories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                // for make compare for delete subcategory or not
            }
            return  view ('subcategory.create',compact('subcategories'));
        }else{
            return  redirect ('/login');   
        }
     }

     public function ajaxexite_subcategory($title,Request $request){
        if (Auth::user()){
            if ($request->ajax()){
            //select all sub categories of site and check
            $exit = DB::table('categories')->where('site_id',Auth::user()->id)->where('name',$title)->whereNotNull('category_id')->first();
            if($exit){
                $is_exit='true';
                // var_dump($is_exit);die();
            }else{
                $is_exit='false';
                // var_dump($is_exit);die();
            }
            return $is_exit;
          } 
        }else{
            return  redirect ('/login');   
        }
     }

     public function store(Request $request){
        if (Auth::user()){
            
             $this->validate($request, [
                'category_id' => 'required|max:255',
                'title_subcategory' => 'required|max:255',
                'subdescription' => 'required',
                'ar_title_subcategory' => 'required|max:255',
                'ar_subdescription' => 'required',
                'image_subcategory' => 'required',                 
            ]);

            $subcategory= new Category;
            $subcategory->name=trim($request->input('title_subcategory'));
            $subcategory->description=trim($request->input('subdescription'));
            $subcategory->ar_name=trim($request->input('ar_title_subcategory'));
            $subcategory->ar_description=trim($request->input('ar_subdescription'));            
            // for uploadimage
            if(Input::file('image_subcategory')){
                // echo "image_subcategory";die();
                $imagefile = Input::file('image_subcategory');
                // for obtain domain name for save image
                if(Auth::user()->status == 'reseller')
                {
                    $user_site = DB::table('sites')->where('id',Session::get('user_id'))->get();
                     $subdomain = $user_site[0]->subdomain;
                }
                else
                {
                    $subdomain=Auth::user()->site->subdomain;
                }

                $extention=time().$imagefile->getClientOriginalName();
                // echo $extention;die();
                $imagefile->move('assets/images/'.$subdomain.'/subcategory',$extention);
                // echo $subdomain;die();
                $subcategory->image=$subdomain.'/subcategory/'.$extention; 
            }

            if(Auth::user()->status == 'reseller')
            {
                $subcategory->site_id=Session::get('user_id');
            }
            else
            {
                $subcategory->site_id=Auth::user()->id;    
            }
            
            $subcategory->category_id=$request->input('category_id');
            $is_saved=$subcategory->save();
            if($is_saved){
                Session::flash('insert_success', 'A new subcategory has been added successfully');
                return  redirect ('/subcategory/create');
            }else{
                abort(500);
            }
            
        } else{
            return  redirect ('/login');   
        }

     }



     public function edit($id){
        if (Auth::user()){
            try
            {
                $subcategory=Category::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            $category=Category::find($subcategory->category_id);
            $categories=Category::All();
            return  view ('subcategory.edit',compact('subcategory','category','categories'));
        } else{
            return  redirect ('/login');   
        } 
     }


     public function update($id,Request $request){
	    if (Auth::user()){
            try
            {
                $subcategory=Category::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }

            $this->validate($request, [
                'category_id' => 'required|max:255',
                'title_subcategory' => 'required|max:255',
                'subdescription' => 'required',
                'ar_title_subcategory' => 'required|max:255',
                'ar_subdescription' => 'required',
                // 'image_subcategory' => 'required',                 
            ]);

            $subcategory->name=trim($request->input('title_subcategory'));
            $subcategory->description=trim($request->input('subdescription'));
            $subcategory->ar_name=trim($request->input('ar_title_subcategory'));
            $subcategory->ar_description=trim($request->input('ar_subdescription'));
            $old_image=$subcategory->image;
            if(Input::file('image_subcategory')){
                // echo "image_subcategory";die();
                $imagefile = Input::file('image_subcategory');
                // for obtain domain name for save image
                 if(Auth::user()->status == 'reseller')
                {
                    $user_site = DB::table('sites')->where('id',Session::get('user_id'))->get();
                     $subdomain = $user_site[0]->subdomain;
                }
                else
                {
                    $subdomain=Auth::user()->site->subdomain;
                }

                $extention=time().$imagefile->getClientOriginalName();
                $imagefile->move('assets/images/'.$subdomain.'/subcategory',$extention);
                // echo $subdomain;die();
                $subcategory->image=$subdomain.'/subcategory/'.$extention; 

                File::delete('assets/images/'.$old_image); //for delete file image from folder
            }
            
            if(Auth::user()->status == 'reseller')
            {
                $subcategory->site_id=Session::get('user_id');
            }
            else
            {
                $subcategory->site_id=Auth::user()->id;    
            }

            $subcategory->category_id=$request->input('category_id');
            $is_saved=$subcategory->save();
            if($is_saved){
                Session::flash('update_success', 'the subcategory item has been updated successfully');
                return  redirect ('/subcategory');
            }else{
                abort(500);
            }   
        } else{
            return  redirect ('/login');   
        }
     }



     public function destroy($id){
        if (Auth::user()){
            try
            {
                $subcategory=Category::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            // $subcategory=Category::find($id);
            // $subcategory->delete();
            // return  redirect ('/subcategory');
            // return  view ('subcategory.index');
            // ****************************************************
            // // for use ajax for remove
            $old_image=$subcategory->image;
            $del_subcategories =$subcategory->delete();
            File::delete('assets/images/'.$old_image); //for delete file image from folder
            return json_encode( $del_subcategories );
        } else{
            return  redirect ('/login');   
        }
     }




}