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
        $site = Site::find(Auth::user()->id);
        if($site == null)
        {
            return view('site.create');    
        }
        else
        {
            return view('home');       
        } 
     }


     public function store(Request $request)
     {
        $this->validate($request, [
            'subdomain' => 'required|max:255',
            'color' => 'required',
            'primary_color' => 'required',
            'secondry_color' => 'required',
            'body_type' => 'required',
            'background_image' => 'min:100'
        ]);
        $site = new Site($request->all());
        $site->id = Auth::user()->id;
        $site->user_id = Auth::user()->id;
        $site->template_id = 1;
        $imagePath='';
        if(Input::hasFile('background_image')){  
                $file = Input::file('background_image');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$site->subdomain.'/backgrounds/',time().$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$site->subdomain.'/backgrounds/'.time().$extension;
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
            'subdomain' => 'required|max:255',
            'color' => 'required',
            'primary_color' => 'required',
            'secondry_color' => 'required',
            'body_type' => 'required',
            'background_image' => 'min:100'
        ]);
        $old_imag_name = $site['attributes']['background_image'];

        $imagePath='';
        if(Input::hasFile('background_image')){  
                $file = Input::file('background_image');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$site->subdomain.'/backgrounds/',time().'.'.$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$site->subdomain.'/backgrounds/'.time().'.'.$extension;
        }
        // dd($imagePath);
       if($site->update([
            'subdomain'=>$request->all()['subdomain'],
            'color' => $request->all()['color'],
           'primary_color' => $request->all()['primary_color'],
            'secondry_color' => $request->all()['secondry_color'],
            'body_type' => $request->all()['body_type'],
            'background_image' => $imagePath,
        ]))
       {
            unlink(public_path().$old_imag_name);    
            return redirect('/dashboard');
       }
       return back();
     }
}
