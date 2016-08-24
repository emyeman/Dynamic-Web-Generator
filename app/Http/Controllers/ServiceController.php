<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service;
use App\Message;
use App\Page;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Auth;
use Config;


class ServiceController extends Controller
{
    public function index(){
        if(Auth::user()->status == 'reseller')
        {
            $services = DB::table('services')->where('site_id',Session::get('user_id'))->get();
            $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
            $site_id=Session::get('user_id');
        }
        else
        {
            $services = DB::table('services')->where('site_id',Auth::user()->id)->get();
            $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
            $site_id=Auth::user()->site->id; 
        }
        
         // $pages=Page::where('site_id', $site_id)->get();
        $pages = DB::table('pages')->where('site_id',$site_id)->get();
         
        $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
        $count_message=count($unseen_messages);
     
		return  view('service.index' ,compact('categories','subcategories','pages','services','count_message'));
     }

     public function show($id){

        return  view('service.show');
     }

     public function edit(Service $service)
     {
        if(Auth::user()->status == 'reseller')
        {
            $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
            $site_id=Session::get('user_id');
        }
        else
        {
            $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
            $site_id=Auth::user()->site->id;    
        }

        // $pages=Page::where('site_id', $site_id)->get();
        $pages = DB::table('pages')->where('site_id',$site_id)->get();
        
        $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
        $count_message=count($unseen_messages);
     
        return view('service.edit',compact('categories','subcategories','pages','service','count_message'));
     }

     public function update(Request $request, Service $service)
     {
        # code...
        $this->validate($request, [
            'title' => 'required|max:255',
            'ar_title' => 'required|max:255',
            'icon' => 'required',
            'description' => 'required',
            'ar_description' => 'required',
        ]);
       if($service->update($request->all()))
       {        
            Session::flash('update_success', 'the service item has been updated successfully');
            return redirect('/service');
       }else{
            abort(500);
       }
       return redirect('service.edit');

     }

     public function create(){
        if(Auth::user()->status == 'reseller')
        {
            $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
            $site_id=Session::get('user_id');
        }
        else
        {
            $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
            $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
            $site_id=Auth::user()->site->id;    
        }

        // $pages=Page::where('site_id', $site_id)->get();
        $pages = DB::table('pages')->where('site_id',$site_id)->get();
        
        $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
        $count_message=count($unseen_messages);
        
        return  view('service.create',compact('categories','subcategories','pages','count_message'));
        // die('ssss');
     }

    public function ajaxexite_service($title,Request $request){
        if (Auth::user()){
            if ($request->ajax()){
            //select all services of site and check
            $exit = DB::table('services')->where('site_id',Auth::user()->id)->where('title',$title)->first();
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

     public function store(Request $request)
     {
        $this->validate($request, [
        'title' => 'required|max:255',
        'ar_title' => 'required|max:255',
        'icon' => 'required',
        'description' => 'required',
        'ar_description' => 'required',
        ]);
     	$service = new Service($request->all());

        if(Auth::user()->status == 'reseller')
        {
            
           $service->site_id = Session::get('user_id');
        }
        else
        {
            $service->site_id = Auth::user()->id;
        }

        

     	if( $service->addService($service))
        {
            Session::flash('insert_success', 'A new service has been added successfully');
            return redirect('/service/create');
        }else{
            abort(500);
        }
        return redirect('service.create');
     }


     public function delete(Service $service)
     {
         # code...
        $service->delete();
        return back();
     }
}
