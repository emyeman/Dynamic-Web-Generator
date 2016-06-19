<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages=Message::all();
        return view('message.index',['messages'=>$messages]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|string',
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'content' => 'required|max:65500',
        ]);

        $new_message=new Message;
        $new_message->name=trim($request->input('name'));
        $new_message->email=trim($request->input('email'));
        $new_message->subject=trim($request->input('subject'));
        $new_message->content=trim($request->input('content'));
        $new_message->site_id=1;
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
    	$message->is_seen=true;
    	$message->save();
    	return view('message.show',['message'=>$message]);
    }

    public function destroy($id)
    {
        try
            {$row=Message::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        // $user=Auth::user();
        // if ($user->cannot('access-news_promotions', $row)) {
        //     abort(403);
        // }
        $affectedRows  =$row->delete();
        if($affectedRows)
            return 'true';
        else
            abort(500);
    }

    public function unseen()
    {
    	$unseen_messages=Message::where('is_seen','=',false)->get();
    	$last3=$unseen_messages->take(3);
    	$count=$unseen_messages->count();
    	$data=[$last3,$count];
    	return json_encode($data);
    }
}
