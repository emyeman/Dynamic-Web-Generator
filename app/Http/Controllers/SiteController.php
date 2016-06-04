<?php

namespace App\Http\Controllers;

use Auth;

use Session;
use Illuminate\Http\Request;
use App\Site;
use App\Http\Requests;
use Input;

class SiteController extends Controller
{
    //
     public function index(){
		return  view('site.index');
     }

     public function show($id){

        return  view('site.show');
     }

     public function create(){
        // dd(Auth::user()['attributes']);
        $site = Site::find(Auth::user()->id);
        if($site == null)
        {
            return  view('site.create');    
        }
        return view('home');
     }

     public function store(Request $request)
     {
        $this->validate($request, [
            'subdomain' => 'required|max:255',
            'color' => 'required',
            'primary_color' => 'required',
            'secondry_color' => 'required',
            'body_type' => 'required',
        ]);
        $site = new Site($request->all());
        $site->user_id = Auth::user()->id;
        $site->template_id = 1;

        $imagePath='';
        if(Input::hasFile('background_image')){  
                $file = Input::file('background_image');
                $filename = Input::file('background_image')->getClientOriginalName();
                
                $file = $file->move(public_path().'/assets/'.$site->subdomain.'/backgrounds/',$filename);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/'.$site->subdomain.'/backgrounds/'.$filename;
        }
        
        // dd($imagePath);
        $site->background_image = $imagePath;
        if($site->addSite($site)) 
        {
            Session::put('site_id', $site->id);
            return  redirect('/site');    
        }
        return redirect('site.create');
     }

     public function edit(Site $site)
     {
         # code...
        return view('site.edit',compact('site'));
     }

     public function update(Request $request , Site $site)
     {
        $this->validate($request, [
            'doman_name' => 'required|max:255',
            'doman_type' => 'required',
            'color' => 'required',
            'primary_color' => 'required',
            'secondry_color' => 'required',
            'body_type' => 'required',
        ]);
         # code...
        // return $request->all();
       if($site->update($request->all()))
       {
            return redirect('/dashboard');
       }
       return back();
     }


}
