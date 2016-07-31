<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Ticket;
use App\Comment;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use File;
use Session;

class CommentController extends Controller
{
    //
    public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'comment' => 'required'
            ]);
            
            $comment= new Comment;
            $comment->comment=trim($request->input('comment'));
            $comment->ticket_id=$request->input('ticket_id');
            $ticket_id=$request->input('ticket_id');
            $comment->user_id=Auth::user()->id;
// dd($ticket_id);
            $is_saved=$comment->save();
            // for redirect
           $redirect= trim($request->input('redirect_ticket'));


            if($is_saved){
                // Session::flash('insert_success', 'A new comment has been added successfully');
                if ($redirect=="reseller_ticket") {
                    return  redirect ('/ticket/resellershow/'.$ticket_id);
                }
                if ($redirect=="user_ticket") {
                   return  redirect ('/ticket/'.$ticket_id);
                }
            }else{
                abort(500);
            }
            
        } else{
            return  redirect ('/login');   
        }  
     }


     public function index(){ 
      dd('hit');
	}

}
