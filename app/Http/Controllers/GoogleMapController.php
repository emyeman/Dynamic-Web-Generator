<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\GoogleMap;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;


class GoogleMapController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            // select googlemaps of this only site;
            $googlemaps=DB::table('google_maps')->where('id',Auth::user()->id)->get();

            return  view ('googlemap.index',compact('googlemaps'));
       } else{
            return  redirect ('/login');   
       }
     }

     public function show($id){
        if (Auth::user()){
            return  view ('googlemap.show');
        } else{
            return  redirect ('/login');   
        }
     }

     public function create(){
        if (Auth::user()){
            return  view ('googlemap.create');
        }else{
            return  redirect ('/login');   
        }
     }

     // for use ajax for display element subcategory
      public function ajaxstore($XYlocation,Request $request){
        if (Auth::user()){
          if ($request->ajax()){
            //select all googlemaps 
            $googlemaps = DB::table('google_maps')->where('id',Auth::user()->id)->get();
            // $subgooglemaps='emmmmm';
            // var_dump($subgooglemaps);die();
            return True;
          } 
        }else{
            return  redirect ('/login');   
        }
     }


     public function store(Request $request){
        if (Auth::user()){

            $googlemap= new GoogleMap;
            $googlemap->id=Auth::user()->id;
            $googlemap->latitude=$request->input('latitude');
            $googlemap->longitude=$request->input('longitude');
           
            $googlemap->save();
    		return  redirect ('/googlemap');
        } else{
            return  redirect ('/login');   
        }  
     }



     public function edit($id){
        if (Auth::user()){
            $googlemap=GoogleMap::find($id);
            return  view ('googlemap.edit',compact('googlemap'));
        } else{
            return  redirect ('/login');   
        }    
     }


     public function update($id,Request $request){
        if (Auth::user()){

            $googlemap=GoogleMap::find($id);
            // var_dump($googlemap);die();
            $googlemap->id=Auth::user()->id;
            $googlemap->latitude=$request->input('latitude');
            $googlemap->longitude=$request->input('longitude');
           
            $googlemap->save();
    		return  redirect ('/googlemap');
         } else{
            return  redirect ('/login');   
         }   
     }



     public function destroy($id){
        if (Auth::user()){
            $googlemap=GoogleMap::find($id);
            // for use redirect
            // $googlemap->delete();
            // return  redirect ('/googlemap');
            // return  view ('googlemap.index');
            // ****************************************************
            // // for use ajax for remove

            $del_googlemaps =$googlemap->delete();
            return json_encode( $del_googlemaps );
        } else{
            return  redirect ('/login');   
         } 
     }




}

