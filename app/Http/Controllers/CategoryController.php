<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Message;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use File;
use Session;

class CategoryController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            // select categories of this only site;

            if(Auth::user()->status == 'reseller')
            {
                 $categories=DB::table('categories')->where('site_id',Session::get('user_id'))->whereNull('category_id')->get();
                 $allcategories=DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
                 // dd($categories);
                  $site_id = Session::get('user_id');
            }
            else
            {
                 $categories=DB::table('categories')->where('site_id',Auth::user()->id)->whereNull('category_id')->get();
                 $allcategories=DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
                 $site_id=Auth::user()->site->id;
            }
        
        
        $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
        $count_message=count($unseen_messages);

            return  view ('category.index',compact('categories','allcategories','count_message'));
            
       } else{
            return  redirect ('/login');   
       }
     }

     public function show($id){
        if (Auth::user()){
            return  view ('category.show');
        } else{
            return  redirect ('/login');   
        }
     }


     public function create(){
        if (Auth::user()){
            if(Auth::user()->status == 'reseller')
        {
            $site_id = Session::get('user_id');
        }
        else
        {
            $site_id=Auth::user()->site->id;
        }
            $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);
            return  view ('category.create',compact('count_message'));
        }else{
            return  redirect ('/login');   
        }
     }

     public function ajaxexite_category($title,Request $request){
        if (Auth::user()){
            if ($request->ajax()){
            //select all categories of site and check
            $exit = DB::table('categories')->where('site_id',Auth::user()->id)->where('name',$title)->whereNull('category_id')->first();
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
                'title_category' => 'required|max:255',
                'description' => 'required',
                'ar_title_category' => 'required|max:255',
                'ar_description' => 'required',
                'image_category' => 'required',                 
            ]);

            $category= new Category;
            $category->name=trim($request->input('title_category'));
            $category->description=trim($request->input('description'));
            $category->ar_name=trim($request->input('ar_title_category'));
            $category->ar_description=trim($request->input('ar_description'));
            // for upload image
            if(Input::file('image_category')){
                // echo "image_category";die();
                $imagefile = Input::file('image_category');
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
                $imagefile->move('assets/images/'.$subdomain.'/category',$extention);
                // echo $subdomain;die();
                $category->image=$subdomain.'/category/'.$extention; 
            }

            if(Auth::user()->status == 'reseller')
            {
                $category->site_id=Session::get('user_id');
            }
            else
            {
                $category->site_id=Auth::user()->id;    
            }
            

            $is_saved=$category->save();
            if($is_saved){
                Session::flash('insert_success', 'A new category has been added successfully');
                return  redirect ('/category/create');
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
                $category=Category::findOrFail($id);
            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            if(Auth::user()->status == 'reseller')
        {
            $site_id = Session::get('user_id');
        }
        else
        {
            $site_id=Auth::user()->site->id;
        }
            $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);
            
            return  view ('category.edit',compact('category','count_message'));
        } else{
            return  redirect ('/login');   
        }    
     }


     public function update($id,Request $request){
        if (Auth::user()){
            try
            {
                $category=Category::findOrFail($id);
            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            $this->validate($request, [
                'title_category' => 'required|max:255',
                'description' => 'required',
                'ar_title_category' => 'required|max:255',
                'ar_description' => 'required',
                // 'image_category' => 'required',                 
            ]);

            $category->name=trim($request->input('title_category'));
            $category->description=trim($request->input('description'));
            $category->ar_name=trim($request->input('ar_title_category'));
            $category->ar_description=trim($request->input('ar_description'));
            // for upload image
            $old_image=$category->image; 
            if(Input::file('image_category')){
                // echo "image_category";die();
                $imagefile = Input::file('image_category');
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
                $imagefile->move('assets/images/'.$subdomain.'/category',$extention);
                // echo $subdomain;die();
                $category->image=$subdomain.'/category/'.$extention;
                
                File::delete('assets/images/'.$old_image); //for delete file image from folder   
            }
            if(Auth::user()->status == 'reseller')
            {
                $category->site_id=Session::get('user_id');    
            }
            else
            {
                $category->site_id=Auth::user()->id; 
            }
            
           $is_saved=$category->save();
            if($is_saved){
                Session::flash('update_success', 'the category item has been updated successfully');
                // return  redirect ('categorys/'.$id);
        		return  redirect ('/category');
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
                $category=Category::findOrFail($id);
            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            // $category=Category::find($id);
            // for use redirect
            // $category->delete();
            // return  redirect ('/category');
            // return  view ('category.index');
            // ****************************************************
            // // for use ajax for remove
            $old_image=$category->image;
            $del_categories =$category->delete();
            File::delete('assets/images/'.$old_image); //for delete file image from folder
            return json_encode( $del_categories );
        } else{
            return  redirect ('/login');   
         } 
     }




}
