<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Domain;
use Session;
use DB;
use Illuminate\Mail\Mailer;
use Mail;
use View;

class DomainController extends Controller
{
	public function index()
    {
        if(Auth::user()->status == 'reseller')
        {
            $domain = DB::table('domains')->where('site_id',Session::get('user_id'))->first();
        }
        else
        {
            $domain = DB::table('domains')->where('site_id',Auth::user()->site->id)->first();
        }
        

		return  view('domain.index',compact('domain'));
    }


    public function reseller_index(){
        if(Auth::user()->status == 'reseller')
        {
            $reseller=DB::table('users')->where('id',Auth::user()->id)->first();
            if($reseller->id==1){
              $user_domains=DB::table('users')->where('user_id',null)->get();
            }else{
              $user_domains=DB::table('users')->where('user_id',$reseller->id)->get();
            }
            // var_dump($user_domains);die();
            $domains=[];
            $domain_unseens=[];
            foreach ($user_domains as $user_domain) {
               $domain=DB::table('domains')->where('site_id',$user_domain->id)->first();
               if(!empty($domain)){
                  array_push($domains,$domain);
              }

              $domain_unseen=DB::table('domains')->where('site_id',$user_domain->id)->where('is_seen',false)->first();
              if(!empty($domain_unseen)){
                array_push($domain_unseens,$domain_unseen);
              }
            }

            $domaincount_unseen=count($domain_unseens);
            // var_dump($domains);die();
            // for ticket that not seen
            $ticket_unseen=DB::table('tickets')->where('reseller_id',Auth::user()->id)->where('is_seen',false)->get();
            $count_unseen=count($ticket_unseen);
            // var_dump($count_unseen);die();
            return  view ('domain.reseller_index',compact('domains','user_domains','reseller','count_unseen','domaincount_unseen'));
       } else{
            return  redirect ('/login');   
       }

    }


  public function resellershow($id,Request $request){
        if (Auth::user()){
            try
                {$domain=Domain::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
            $user=DB::table('users')->where('id',$domain->site_id)->first();
            if($user->user_id==null){
               $reseller=DB::table('users')->where('id',1)->first();          
            }else{
               $reseller=DB::table('users')->where('id',$user->user_id)->first();          
            }

            $domain->is_seen=true;
            $domain->save();
            
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

            return view('domain.resellershow',compact('domain','user','reseller','count_unseen','domaincount_unseen'));
        } else{
            return  redirect ('/login');   
        }    
    }


    public function solve_resellerindex($id,Request $request){
         if (Auth::user()){
            try
                {$domain=Domain::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}
            $domain->is_solved=true;
            $domain->save();

            return  redirect ('/domain/reseller_index');
        } else{
            return  redirect ('/login');   
        }    
    }
    

    public function solve_resellershow($id,Request $request){
        if (Auth::user()){
            try
                {$domain=Domain::findOrFail($id);}
            catch(Exception $e)
                {throw new ModelNotFoundException($e->getMassege());}          
            
            $domain->is_seen=true;
            $domain->is_solved=true;
            $domain->save();

            return  redirect ('/domain/resellershow/'.$id);
            // return view('domain.resellershow',compact('domain','user','reseller','count_unseen'));
        } else{
            return  redirect ('/login');   
        }    
    }
    


    public function show($id){
      return  view('domain.show');
    }

  public function ajaxexite_domain($title,Request $request){
        if (Auth::user()){
            if ($request->ajax()){
            //select all domains of site and check
            $exit = DB::table('domains')->where('Domain_name',$title)->first();
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


     public function create(){

        return  view('domain.create');
     }


     public function store(Request $request){

        $this->validate($request, [
            'domain_name' => 'required|max:255|unique:domains|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);


        $domain = new Domain($request->all());

        if(Auth::user()->status == 'reseller')
        {
            $domain->site_id = Session::get('user_id');
        }
        else
        {
            $domain->site_id = Auth::user()->id;
        }
        
        
        if($domain->addDomain($domain))
        { 
            Session::flash('insert_success', 'A new domain has been added successfully,Send message to email of reseller for confirm');
            return  redirect('/domain');    
        }
        return back();
     }



     public function edit(Domain $domain){
		return  view('domain.edit',compact('domain'));
     }


     public function update(Request $request , Domain $domain){
        $this->validate($request, [
            'domain_name' => 'required|max:255|unique:domains|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        if($domain->update($request->all()))
        {
            Session::flash('update_success', 'the domain item has been updated successfully,Send message to email of reseller for confirm');
            return redirect('/domain');
        }
        return back();

		// return  redirect ('/domain');
     }



     public function destroy($id){

        // return  view ('domain.index');
     }



     // for make email when create and update domain

        // $id=$request->input('Domain_id');
        // $domain=Domain::findOrFail($id);
        // $domain->Domain_name=trim($request->input('Domain_name'));
        // $is_saved=$domain->save();
        // if($is_saved){
        
    //  // *********************************************************************************
    //     // for send message to email
    //         $domain_id=$request->input('domain_id');
    //         $domain = Domain::findOrFail($domain_id);
    //         $user = User::findOrFail($domain->site_id);
    //         $reseller = User::findOrFail($user->user_id);
            
    //         //Convert the view into a string
    //         $contents ="<b>This request domain from  : </b>".$user->email."<h3><b>subject : </b>( update my domain )</h3><p>".trim($request->input('domain_name'))."</p>";

    //         //Store the content on a file with .blad.php extension in the view/send_email folder
    //         $myfile = fopen("../resources/views/send_email.blade.php", "w") or die("Unable to open file!");
    //         fwrite($myfile, $contents);
    //         fclose($myfile);

    //         //Use the create file as view for Mail function and send the email
    //         Mail::send('send_email', ['reseller' => $reseller], function ($message) use ($reseller) {
    //             // $message->from($reseller->email, $reseller->name);
    //             $message->to($reseller->email, $reseller->name)->subject("update my domain");
    //              // dd(config('mail'));
    //             // var_dump($message);die();
    //         });
    // // *********************************************************************************


}
