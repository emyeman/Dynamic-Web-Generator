<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Contact;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use Session;


class ContactUsController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            // select contact us of this only site;
            $contacts=DB::table('contacts')->where('site_id',Auth::user()->id)->get();
            if($contacts){
                return  view ('contactus.index',compact('contacts'));
            }else{
                // return  view ('contactus.create',compact('contacts'));
                return  redirect ('/contactus/create');
            }    
       } else{
            return  redirect ('/login');   
       }
     }

     public function show($id){
        if (Auth::user()){
            return  view ('contactus.show');
        } else{
            return  redirect ('/login');   
        }
     }

     public function create(){
        if (Auth::user()){
            // select contact us of this only site;
            $contacts=DB::table('contacts')->where('site_id',Auth::user()->id)->get();

            return  view ('contactus.create',compact('contacts'));
        }else{
            return  redirect ('/login');   
        }
     }

     public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'address' => 'max:255',
                'lat' => 'max:255',
                'lng' => 'max:255',
                'phone' => 'max:255',
                'mobile' => 'max:255',
                'email' => 'max:255',
                'fax' => 'max:255',
                'facebook' => 'max:255', 
                'google_plus' => 'max:255', 
                'instagram' => 'max:255', 
                'pinterest' => 'max:255',   
                'linkedin' => 'max:255', 
                'youtube' => 'max:255',          
            ]);

            $contact= new Contact;
            $contact->site_id=Auth::user()->id;   //becaues site_id of contactus is same as id of user 
            $contact->address=trim($request->input('address'));
            // data from google map

            $contact->lat=trim($request->input('latitude'));
            $contact->lng=trim($request->input('longitude'));
            $contact->phone=trim($request->input('phone'));
            $contact->mobile=trim($request->input('mobile'));
            $contact->email=trim($request->input('email'));
            $contact->fax=trim($request->input('fax'));
            $contact->facebook=trim($request->input('facebook'));
            $contact->google_plus=trim($request->input('google_plus'));
            $contact->instagram=trim($request->input('instagram'));
            $contact->pinterest=trim($request->input('pinterest'));
            $contact->linkedin=trim($request->input('linkedin'));
            $contact->youtube=trim($request->input('youtube'));
            $is_saved=$contact->save();
           if($is_saved){
                Session::flash('insert_success', 'A new contact us has been added successfully');
                return  redirect ('/contactus');
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
                $contact=Contact::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            
            return  view ('contactus.edit',compact('contact'));
        } else{
            return  redirect ('/login');   
        }
     }


     public function update($id,Request $request){
        if (Auth::user()){
            try
            {
                $contact=Contact::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }

            $this->validate($request, [
                'address' => 'max:255',
                'lat' => 'max:255',
                'lng' => 'max:255',
                'phone' => 'max:255',
                'mobile' => 'max:255',
                'email' => 'max:255',
                'fax' => 'max:255',
                'facebook' => 'max:255', 
                'google_plus' => 'max:255', 
                'instagram' => 'max:255', 
                'pinterest' => 'max:255',   
                'linkedin' => 'max:255', 
                'youtube' => 'max:255',          
            ]);

            $contact->id=Auth::user()->id;   //becaues id of contactus is same as id of site that equal id of user
            $contact->address=trim($request->input('address'));

            // data from google map
            $lat=trim($request->input('latitude'));
            $lng=trim($request->input('longitude'));
            if (!(empty($lat) and empty($lng))){
                $contact->lat=trim($request->input('latitude'));
                $contact->lng=trim($request->input('longitude'));
            }
            
            $contact->phone=trim($request->input('phone'));
            $contact->mobile=trim($request->input('mobile'));
            $contact->email=trim($request->input('email'));
            $contact->fax=trim($request->input('fax'));
            $contact->facebook=trim($request->input('facebook'));
            $contact->google_plus=trim($request->input('google_plus'));
            $contact->instagram=trim($request->input('instagram'));
            $contact->pinterest=trim($request->input('pinterest'));
            $contact->linkedin=trim($request->input('linkedin'));
            $contact->youtube=trim($request->input('youtube'));
            $is_saved=$contact->save();
           if($is_saved){
                Session::flash('update_success', 'the contact us item has been updated successfully');
                return  redirect ('/contactus');
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
                $contact=Contact::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            // $contact=Contact::find($id);
            // for use redirect
            // $contact->delete();
            // return  redirect ('/contactus');
            // return  view ('contactus.index');
            // ****************************************************
            // // for use ajax for remove

            $del_contacts =$contact->delete();
            return json_encode( $del_contacts );
        } else{
            return  redirect ('/login');   
         } 
     }

}