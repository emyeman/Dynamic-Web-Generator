<?php

namespace App\Http\Controllers;

use Auth;

use Session;
use Illuminate\Http\Request;
use App\Site;
use App\Http\Requests;
use Input;
use DB;

class SiteController extends Controller
{
    //
    private function getDefaultTemplate()
    {
        $DefaultTemplate = DB::table('templates')->first();
        return $DefaultTemplate->id ;
    }

    public function activetemp($id){
        $site_id=Auth::user()->site->id;
        $row=Site::find($site_id);
        $row->template_id=$id;
        $row->save();
        return redirect('/');


    }

     public function index(){
		return  view('site.index');
     }


     public function show($id){
        return  view('site.show');
     }


     public function create()
     {
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
            'subdomain' => 'required|max:255|unique:sites',
            'slogan_color' => 'required',
            'text_color' => 'required',
            'primary_color' => 'required',
            'secondry_color' => 'required',
            'body_type' => 'required',
            'background_image' => 'min:100'
        ]);
        $site = new Site($request->all());
        if(Auth::user()->status == 'reseller')
        {
            $site->id = $request->all()['site_id'];
            $site->user_id = $request->all()['site_id'];
        }
        else
        {
            $site->id =Auth::user()->id;
            $site->user_id = Auth::user()->id;
        }
        
        
        $site->template_id =SiteController::getDefaultTemplate();; 
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
            if(Auth::user()->status == 'reseller')
            {
                return redirect()->action('ResellerController@index');    
            }
            else
            {
                return redirect()->action('TemplateController@index');       
            }
            
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
            'slogan_color' => 'required',
            'text_color' => 'required',
            'primary_color' => 'required',
            'secondry_color' => 'required',
            'body_type' => 'required',
            'background_image' => 'min:100'
        ]);
        $old_imag_name = $site['attributes']['background_image'];

        $imagePath=$old_imag_name;
        $has_new_file = 0;
        if(Input::hasFile('background_image')){  
                 $has_new_file = 1;
                $file = Input::file('background_image');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$site->subdomain.'/backgrounds/',time().'.'.$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$site->subdomain.'/backgrounds/'.time().'.'.$extension;
        }
        // dd($imagePath);
       if($site->update([
            'subdomain'=>$request->all()['subdomain'],
            'slogan_color' => $request->all()['slogan_color'],
            'text_color' => $request->all()['text_color'],
           'primary_color' => $request->all()['primary_color'],
            'secondry_color' => $request->all()['secondry_color'],
            'body_type' => $request->all()['body_type'],
            'background_image' => $imagePath,

        ]))
       {
        if($has_new_file == 1)
        {
                try {
                    unlink(public_path().$old_imag_name);    
                }
                catch (\Exception $e) {
                }
        }
            return redirect('/dashboard');
       }
       return back();
     }
}
