<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Ticket;
use App\User;
use App\Domain;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use File;
use Session;
use Illuminate\Mail\Mailer;
use Mail;
use View;

class TicketController extends Controller
{
    
	public function reseller_index(){
        if (Auth::user()->status == 'reseller'){
        	$tickets=DB::table('tickets')->where('reseller_id',Auth::user()->id)->get();
            $users=DB::table('users')->where('user_id',Auth::user()->id)->get();
            $reseller=DB::table('users')->where('id',Auth::user()->id)->first();

            //  make count for domain and ticket 
            if($reseller->id==1){
              $user_domains=DB::table('users')->where('user_id',null)->get();
            }else{
              $user_domains=DB::table('users')->where('user_id',$reseller->id)->get();
            }
            // var_dump($user_domains);die();
            $domain_unseens=[];
            foreach ($user_domains as $user_domain) {
              $domain_unseen=DB::table('domains')->where('site_id',$user_domain->id)->where('is_seen',false)->first();
              if(!empty($domain_unseen)){
                array_push($domain_unseens,$domain_unseen);
              }
            }

            $domaincount_unseen=count($domain_unseens);
            // var_dump($domaincount_unseen);die();
            // for ticket that not seen
            $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
            $count_unseen=count($ticket_unseen);
            // var_dump($count_unseen);die();

            return  view ('ticket.reseller_index',compact('tickets','users','reseller','count_unseen','domaincount_unseen'));
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


     public function resellershow($id,Request $request){
        if (Auth::user()){
            try
                {$ticket=Ticket::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
            $user=DB::table('users')->where('id',$ticket->site_id)->first();
            $reseller=DB::table('users')->where('id',$ticket->reseller_id)->first();          
            $ticket->is_seen=true;
            $ticket->save();
            
            //  make count for domain and ticket 
            if($reseller->id==1){
              $user_domains=DB::table('users')->where('user_id',null)->get();
            }else{
              $user_domains=DB::table('users')->where('user_id',$reseller->id)->get();
            }
            // var_dump($user_domains);die();
            $domain_unseens=[];
            foreach ($user_domains as $user_domain) {
              $domain_unseen=DB::table('domains')->where('site_id',$user_domain->id)->where('is_seen',false)->first();
              if(!empty($domain_unseen)){
                array_push($domain_unseens,$domain_unseen);
              }
            }

            $domaincount_unseen=count($domain_unseens);
            // var_dump($domaincount_unseen);die();
            // for ticket that not seen
            $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
            $count_unseen=count($ticket_unseen);
            // var_dump($count_unseen);die();


            // for show comment on ticket
            $comments=DB::table('comments')->where('ticket_id',$id)->get();
            $user_comments=[];   
            foreach ($comments as $comment) {
                $user_comment=DB::table('users')->where('id',$comment->user_id)->first(); 
                array_push($user_comments, $user_comment);
            }
 // var_dump($user_comments);die(); 
            return view('ticket.resellershow',compact('ticket','user','reseller','count_unseen','comments','user_comments','domaincount_unseen'));
        } else{
            return  redirect ('/login');   
        }    
    }

    public function show($id,Request $request){
        if (Auth::user()){
            try{
                    // $ticket=Ticket::findOrFail($id);
                $ticket=DB::table('tickets')->where('id',$id)->first();}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
             
            $user=DB::table('users')->where('id',Auth::user()->id)->first();
            $reseller=DB::table('users')->where('id',$user->user_id)->first();          
            
            // for show comment on ticket
            $comments=DB::table('comments')->where('ticket_id',$id)->get();
            $user_comments=[];   
            foreach ($comments as $comment) {
                $user_comment=DB::table('users')->where('id',$comment->user_id)->first(); 
                array_push($user_comments, $user_comment);
            }
 // var_dump($user_comments);die();

            return view('ticket.show',compact('ticket','user','reseller','comments','user_comments'));
        } else{
            return  redirect ('/login');   
        }    
    }


    public function solve_resellerindex($id,Request $request){
         if (Auth::user()){
            try
                {$ticket=Ticket::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
            $ticket->is_solved=true;
            $ticket->save();

            return  redirect ('/ticket/reseller_index');
        } else{
            return  redirect ('/login');   
        }    
    }
    

    public function solve_resellershow($id,Request $request){
        if (Auth::user()){
            try
                {$ticket=Ticket::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}          
            
            $ticket->is_seen=true;
            $ticket->is_solved=true;
            $ticket->save();

            return  redirect ('/ticket/resellershow/'.$id);
            // return view('ticket.resellershow',compact('ticket','user','reseller','count_unseen'));
        } else{
            return  redirect ('/login');   
        }    
    }
    

    public function solve_index($id,Request $request){
         if (Auth::user()){
            try
                {$ticket=Ticket::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
            $ticket->is_solved=true;
            $ticket->save();
            
            return  redirect ('/ticket');
        } else{
            return  redirect ('/login');   
        }    
    }


    public function solve_show($id,Request $request){
        if (Auth::user()){
            try
                {$ticket=Ticket::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}         
            $ticket->is_solved=true;
            $ticket->save();
            return  redirect ('/ticket/'.$id);
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
// *********************************************************************************
        // for send message to email
            $reseller_id=$request->input('reseller_id');
            $reseller = User::findOrFail($reseller_id);
            $user = User::findOrFail(Auth::user()->id);

            //Make a Data Array
            $send_subject=trim($request->input('subject'));
            $subject="This ticket (".$send_subject.")";
            $last_ticket = array(
                'subject' => $subject,
            );
            //Convert the view into a string
            $contents ="<b>This ticket from  : </b>".$user->email."<h3><b>subject : </b>(".$send_subject.")</h3><p>".trim($request->input('message'))."</p>";

            //Store the content on a file with .blad.php extension in the view/send_email folder
            $myfile = fopen("../resources/views/send_email.blade.php", "w") or die("Unable to open file!");
            fwrite($myfile, $contents);
            fclose($myfile);

            //Use the create file as view for Mail function and send the email
            Mail::send('send_email', ['reseller' => $reseller,$last_ticket], function ($message) use ($reseller,$last_ticket) {
                // $message->from($reseller->email, $reseller->name);
                $message->to($reseller->email, $reseller->name)->subject($last_ticket['subject']);
                 // dd(config('mail'));
                // var_dump($message);die();
            });
// *********************************************************************************

            // for save in database
            $is_saved=$ticket->save();
            if($is_saved){
                Session::flash('insert_success', 'A new Ticket has been added successfully and send confirm to email of reseller _^_');
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
                $Ticket->subject=trim($request->input('subject'));
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
            try{
                $ticket=Ticket::findOrFail($id);
                // $ticket = DB::table('tickets')->where('site_id',Auth::user()->id)->where('id',$id)->get();
            }
            catch(Exception $e){
                throw new ModelNotFoundException($e->getMassege());               
            }

            // $ticket=Ticket::find($id);
            // var_dump($ticket);die();
            // for use redirect
            // if (!is_null($ticket)) {
            //     $ticket->delete();dd('hit');
            // }
            // return  redirect ('/ticket');
            // return  view ('Ticket.index');
            // ****************************************************
            // // for use ajax for remove
            $del_tickets =$ticket->delete();
            return json_encode( $del_tickets);
        } else{
            return  redirect ('/login');   
         } 
     }

// public function commentstore(Request $request){
//         if (Auth::user()){
//             $this->validate($request, [
//                 'comment' => 'required'
//             ]);
//             $comment= new Comment;
//             $comment->comment=trim($request->input('comment'));
//             $comment->ticker_id=$request->input('ticker_id');
//             $ticket_id=$request->input('ticker_id');
//             $comment->user_id=Auth::user()->id;

//             $is_saved=$comment->save();
//             if($is_saved){
//                 // Session::flash('insert_success', 'A new comment has been added successfully');
//                 return  redirect ('/ticket/'.$ticket_id);
//             }else{
//                 abort(500);
//             }
            
//         } else{
//             return  redirect ('/login');   
//         }  
//      }


}
