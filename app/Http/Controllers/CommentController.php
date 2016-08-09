<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Ticket;
use App\Comment;
use App\User;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use File;
use Session;
// use App\Http\Controllers\mail;
use Illuminate\Mail\Mailer;
use Mail;
use View;


// Mail::send('emails.paypal', [$raw_post_data], function($message)



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

         // for save in database
            if($is_saved){
                // Session::flash('insert_success', 'A new comment has been added successfully');
                if ($redirect=="reseller_ticket") {
                        // *********************************************************************************
                            // for send message to email when comment from reseller to user

                                $reseller = User::findOrFail(Auth::user()->id);

                                //Make a Data Array
                                $ticket_id=$request->input('ticket_id');
                                $ticket = Ticket::findOrFail($ticket_id);
                                $user = User::findOrFail($ticket->site_id);

                                $send_subject=$ticket->subject;

                                $subject="This reply on ticket (".$send_subject.")";
                                $last_ticket = array(
                                    'subject' => $subject,
                                );
                                //Convert the view into a string
                                $contents ="<h3><b>This reply on ticket : </b> (".$send_subject.")</h3><b>from  : </b>".$reseller->email."<p>".trim($request->input('comment'))."</p>";

                                //Store the content on a file with .blad.php extension in the view/send_email folder
                                $myfile = fopen("../resources/views/send_email.blade.php", "w") or die("Unable to open file!");
                                fwrite($myfile, $contents);
                                fclose($myfile);

                                //Use the create file as view for Mail function and send the email
                                Mail::send('send_email', ['user' => $user,$last_ticket], function ($message) use ($user,$last_ticket) {
                                    // $message->from($user->email, $user->name);
                                    $message->to($user->email, $user->name)->subject($last_ticket['subject']);
                                     // dd(config('mail'));
                                });
                        // *********************************************************************************
                            
                    return  redirect ('/ticket/resellershow/'.$ticket_id);
                }
                if ($redirect=="user_ticket") {
                // *********************************************************************************
                        // for send message to email when comment from user to reseller

                            $user = User::findOrFail(Auth::user()->id);
                            if($user->user_id != null){
                                $reseller = User::findOrFail($user->user_id);
                             }else{
                                $reseller = User::findOrFail(1);
                             }   

                            //Make a Data Array
                            $ticket_id=$request->input('ticket_id');
                            $ticket = Ticket::findOrFail($ticket_id);
                            $send_subject=$ticket->subject;

                            $subject="This reply on ticket (".$send_subject.")";
                            $last_ticket = array(
                                'subject' => $subject,
                            );
                            //Convert the view into a string
                            $contents ="<h3><b>This reply on ticket : </b> (".$send_subject.")</h3><b>from  : </b>".$user->email."<p>".trim($request->input('comment'))."</p>";

                            //Store the content on a file with .blad.php extension in the view/send_email folder
                            $myfile = fopen("../resources/views/send_email.blade.php", "w") or die("Unable to open file!");
                            fwrite($myfile, $contents);
                            fclose($myfile);

                            //Use the create file as view for Mail function and send the email
                            Mail::send('send_email', ['reseller' => $reseller,$last_ticket], function ($message) use ($reseller,$last_ticket) {
                                // $message->from($reseller->email, $reseller->name);
                                $message->to($reseller->email, $reseller->name)->subject($last_ticket['subject']);
                                 // dd(config('mail'));
                            });
                    // *********************************************************************************
                        
                   return  redirect ('/ticket/'.$ticket_id);
                }
            }else{
                abort(500);
            }
            
        } else{
            return  redirect ('/login');   
        }  
     }




// test only for send message to mail not found in project 
    // public function email(Request $request ) {
    //     if (Auth::user()){
    //         $user = User::findOrFail(3);
    //         $last_ticket= DB::table('tickets')->where('site_id',3)->orderBy('created_at', 'desc')->first();


    //         //Convert the view into a string
    //         $contents =  $last_ticket->message;

    //         //Store the content on a file with .blad.php extension in the view/email folder
    //         $myfile = fopen("../resources/views/send_email.blade.php", "w") or die("Unable to open file!");
    //         fwrite($myfile, $contents);
    //         fclose($myfile);

    //         //Use the create file as view for Mail function and send the email
    //         Mail::send('send_email', ['user' => $user,'last_ticket' => $last_ticket], function ($message) use ($user,$last_ticket) {
    //             // $message->from($user->email, $user->name);
    //             $message->to($user->email, $user->name)->subject($last_ticket->subject);
    //              // dd(config('mail'));
    //             // var_dump($message);die();
    //         });

    // //        return view();

    //           return "success fully mail send ";
    //     } else{
    //         return  redirect ('/login');   
    //     }  
    //  }




}
