<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use App\Page;
use Auth;
use DB;

class MessageController extends Controller
{
    public function index()
    {

        $user=Auth::user();
        $site_id=$user->site->id;
        $messages=Message::where('site_id','=',$site_id)->get();
        $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
        $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
        
        // $pages=Page::where('site_id', $site_id)->get();
        $pages = DB::table('pages')->where('site_id',$site_id)->get();

        $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
        $count_message=count($unseen_messages);

        return view('message.index',['messages'=>$messages,'categories'=>$categories,'subcategories'=>$subcategories,'pages'=>$pages,'count_message'=>$count_message]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|string',
            // 'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'content' => 'required',
            // 'site_id'=> 'exists:sites,id',

        ]);

        $new_message=new Message;
        $new_message->name=trim($request->input('name'));
        $new_message->email=trim($request->input('email'));
        $new_message->subject=trim($request->input('subject'));
        $new_message->content=trim($request->input('content'));
        $new_message->site_id=trim($request->input('site_id'));
		$is_saved=$new_message->save();
        if($is_saved)
        {
            return  back();
        }
        else
        {
            abort(500);
        }
        
    }

    public function show($id,Request $request)
    {
    	try
            {$message=Message::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        $user=Auth::user();
        if ($user->cannot('access-messages', $message)) {
            abort(403);
        }
        
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

    	$message->is_seen=true;
    	$message->save();
        $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
        $count_message=count($unseen_messages);

    	return view('message.show',['message'=>$message,'categories'=>$categories,'subcategories'=>$subcategories,'pages'=>$pages,'count_message'=>$count_message]);
    }

    public function destroy($id)
    {
        try
            {$message=Message::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        $user=Auth::user();
        if ($user->cannot('access-messages', $message)) {
            abort(403);
        }
        $affectedRows  =$message->delete();
        if($affectedRows)
            return 'true';
        else
            abort(500);
    }

    public function unseen(){
        $site_id=Auth::user()->site->id;
    	$unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();

    	$last3=$unseen_messages->take(3);
    	$count=$unseen_messages->count();
    	$data=[$last3,$count];
    	return json_encode($data);
    }


    public function dashboard(){
        if(Auth::user()){
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
                
            return view('DashboardIndex',compact('categories','subcategories','pages','count_message'));
        }else{
            return  redirect ('/login');   
        }    
    }


}
