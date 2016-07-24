<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Ticket;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use File;
use Session;

class TicketController extends Controller
{
    
	public function reseller_index(){
        if (Auth::user()){
        	$tickets=DB::table('tickets')->where('reseller_id',Auth::user()->id)->get();
            $users=DB::table('users')->where('user_id',Auth::user()->id)->get();
            $reseller=DB::table('users')->where('id',Auth::user()->id)->first();
            return  view ('ticket.reseller_index',compact('tickets','users','reseller'));
       } else{
            return  redirect ('/login');   
       }
     }

     public function index(){
        if (Auth::user()){
            $tickets=DB::table('tickets')->where('site_id',Auth::user()->id)->get();
            $user=DB::table('users')->where('id',Auth::user()->id)->first();
            $reseller=DB::table('users')->where('id',$user->user_id)->first();
            return  view ('ticket.index',compact('tickets','user','reseller'));
       } else{
            return  redirect ('/login');   
       }
     }


     public function show($id,Request $request){
        if (Auth::user()){
            try
                {$ticket=Ticket::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
            $user=DB::table('users')->where('id',Auth::user()->id)->first();
            $reseller=DB::table('users')->where('id',$user->user_id)->first();          
            $ticket->is_solved=true;
            $ticket->save();
            return view('ticket.show',compact('ticket','user','reseller'));
        } else{
            return  redirect ('/login');   
        }    
    }


     public function create(){
        if (Auth::user()){
            $user=DB::table('users')->where('id',Auth::user()->id)->first();
            $reseller=DB::table('users')->where('id',$user->user_id)->first();
            return  view ('ticket.create',compact('user','reseller'));
        }else{
            return  redirect ('/login');   
        }
     }

    public function ajaxexite_ticket($title,Request $request){
        if (Auth::user()){
            if ($request->ajax()){
            //select all tickets of site and check
            $exit = DB::table('tickets')->where('site_id',Auth::user()->id)->where('subject',$title)->first();
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
                'subject' => 'required|max:255',
                'message' => 'required'
            ]);
            $ticket= new Ticket;
            $ticket->subject=trim($request->input('subject'));
            $ticket->message=trim($request->input('message'));
            $ticket->reseller_id=$request->input('reseller_id');
            $ticket->site_id=Auth::user()->id;
            $ticket->is_solved=0; 

            $is_saved=$ticket->save();
            if($is_saved){
                Session::flash('insert_success', 'A new Ticket has been added successfully');
                return  redirect ('/ticket/create');
            }else{
                abort(500);
            }
            
        } else{
            return  redirect ('/login');   
        }  
     }



     /*public function edit($id){
        if (Auth::user()){
            try
            {
                $ticket=Ticket::findOrFail($id);
            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            
            return  view ('ticket.edit',compact('ticket'));
        } else{
            return  redirect ('/login');   
        }    
     }


     public function update($id,Request $request){
        if (Auth::user()){
            try
            {
                $Ticket=Ticket::findOrFail($id);
            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            $this->validate($request, [
                'subject' => 'required|max:255',
                'message' => 'required'
            ]);

            $Ticket->subject=trim($request->input('subject'));
            $Ticket->message=trim($request->input('message'));
            $Ticket->reseller_id=$request->input('reseller_id');
            $Ticket->site_id=Auth::user()->id;
            $Ticket->is_solved=0; 
            
            
           $is_saved=$ticket->save();
            if($is_saved){
                Session::flash('update_success', 'The ticket item has been updated successfully');
                // return  redirect ('Tickets/'.$id);
        		return  redirect ('/ticket');
            }else{
                abort(500);
            }

         } else{
            return  redirect ('/login');   
         }   
     }

*/

     public function destroy($id){
        if (Auth::user()){
            try
            {
                $ticket=Ticket::findOrFail($id);
            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            // $ticket=Ticket::find($id);
            // for use redirect
            // $Ticket->delete();
            // return  redirect ('/Ticket');
            // return  view ('Ticket.index');
            // ****************************************************
            // // for use ajax for remove
            $del_ticket =$ticket->delete();
            return json_encode( $del_ticket );
        } else{
            return  redirect ('/login');   
         } 
     }




}
