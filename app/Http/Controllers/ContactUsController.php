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


class ContactUsController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            // select contact us of this only site;
            $contacts=DB::table('contacts')->where('id',Auth::user()->id)->get();

            return  view ('contactus.index',compact('contacts'));
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
            $contacts=DB::table('contacts')->where('id',Auth::user()->id)->get();

            return  view ('contactus.create',compact('contacts'));
        }else{
            return  redirect ('/login');   
        }
     }

     public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'address' => 'max:300',
                'lat_lon' => 'max:300',
                'phone' => 'max:300',
                'mobile' => 'max:300',
                'email' => 'max:300',
                'fax' => 'max:300',
                'facebook' => 'max:300', 
                'google_plus' => 'max:300', 
                'instagram' => 'max:300', 
                'pinterest' => 'max:300',   
                'linkedin' => 'max:300', 
                'youtube' => 'max:300',          
            ]);

            $contact= new Contact;
            $contact->id=Auth::user()->id;   //becaues id of contactus is same as id of site that equal id of user
            $contact->address=$request->input('address');
            // data from google map
            $lat=$request->input('latitude');
            $lon=$request->input('longitude');
            $contact->lat_lon=$lat.','.$lon;

            $contact->phone=$request->input('phone');
            $contact->mobile=$request->input('mobile');
            $contact->email=$request->input('email');
            $contact->fax=$request->input('fax');
            $contact->facebook=$request->input('facebook');
            $contact->google_plus=$request->input('google_plus');
            $contact->instagram=$request->input('instagram');
            $contact->pinterest=$request->input('pinterest');
            $contact->linkedin=$request->input('linkedin');
            $contact->youtube=$request->input('youtube');
            $contact->save();
            return  redirect ('/contactus');
        } else{
            return  redirect ('/login');   
        } 
     }



     public function edit($id){
        if (Auth::user()){
            $contact=Contact::find($id);
            return  view ('contactus.edit',compact('contact'));
        } else{
            return  redirect ('/login');   
        }
     }


     public function update($id,Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'address' => 'max:500',
                'lat_lon' => 'max:300',
                'phone' => 'max:200',
                'mobile' => 'max:200',
                'email' => 'max:200',
                'fax' => 'max:200',
                'facebook' => 'max:200', 
                'google_plus' => 'max:200', 
                'instagram' => 'max:200', 
                'pinterest' => 'max:200',   
                'linkedin' => 'max:200', 
                'youtube' => 'max:200',          
            ]);

            $contact=Contact::find($id);
            $contact->id=Auth::user()->id;   //becaues id of contactus is same as id of site that equal id of user
            $contact->address=$request->input('address');

            // data from google map
            $lat=$request->input('latitude');
            $lon=$request->input('longitude');
            if (!(empty($lat) and empty($lat))){
                $contact->lat_lon=$lat.','.$lon;
            }
            
            $contact->phone=$request->input('phone');
            $contact->mobile=$request->input('mobile');
            $contact->email=$request->input('email');
            $contact->fax=$request->input('fax');
            $contact->facebook=$request->input('facebook');
            $contact->google_plus=$request->input('google_plus');
            $contact->instagram=$request->input('instagram');
            $contact->pinterest=$request->input('pinterest');
            $contact->linkedin=$request->input('linkedin');
            $contact->youtube=$request->input('youtube');
            $contact->save();
            return  redirect ('/contactus');
        } else{
            return  redirect ('/login');   
        } 
     }



     public function destroy($id){
        if (Auth::user()){
            $contact=Contact::find($id);
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