<?php

namespace App\Http\Controllers;

use Auth;

use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Header;
 

class BrandingController extends Controller {

    private $site;
    private $request;
    public function __construct(Request $request) {
        $this->request = $request;
        if($this->request->user()->site){
            $this->site = $this->request->user()->site;
        }
    }

    private function upload_image($image) {
        $domain_name = $this->request->user()->site['subdomain'];

        $directory = "/assets/images/$domain_name/branding/";
        if (Input::file('image')->move(public_path() . $directory, $image)) {
            return $directory . $image;
        }
        return FALSE;
    }

    public function index() {
//        $branding = $request->user()->site->header;
        if ($this->site->header) {
            return view('branding.index')->withBranding($this->site->header);
        }
        return redirect('branding/create');
    }

    public function show($id) {

        return view('branding.show');
    }

    public function create() {
        if($this->site->header)
        {
            return redirect('branding/edit');
        }
        return view('branding.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'company_name' => 'required|max:255',
            'slogan' => 'required',
            'logo' => 'max:10',
        ]);
        $header = new Header($request->all());
        $header->site_id = Auth::user()->id;

        // get the subdomain
        $domain_name = $this->request->user()->site['subdomain'];

        $imagePath='';
        if(Input::hasFile('logo')){  
                $file = Input::file('logo');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$domain_name.'/branding/',time().$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$domain_name.'/branding/'.time().$extension;
        }
        $header->logo = $imagePath;

        if($header->addHeader($header)) 
        {
            return redirect('/branding');
        }
        return redirect('/branding/create')->withErrors('Something error');
    }


    public function edit(Header $header) {
        return view('branding.edit',compact('header'));
    }

    public function update(Request $request, Header $header) {
        $this->validate($request, [
            'company_name' => 'required|max:255',
            'slogan' => 'required',
            'logo' => 'max:10',
        ]);
        $domain_name = $this->request->user()->site['subdomain'];
        $old_imag_name = $header['attributes']['logo'];
        $imagePath=$old_imag_name;
        $has_new_file = 0;
        if(Input::hasFile('logo')){  
                $has_new_file = 1;
                $file = Input::file('logo');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$domain_name.'/branding/',time().'.'.$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$domain_name.'/branding/'.time().'.'.$extension;
        }

        if($header->update([
            'company_name'=>$request->all()['company_name'],
            'slogan' => $request->all()['slogan'],
            'logo' => $imagePath,
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

            return redirect('/branding');
       }
       dd('hit');
       return back();
    }

    public function destroy() {
        if ($this->branding) {
            Header::destroy($this->site->header->id);
            return redirect('branding/create');
        }
        return view('branding.index')->withErrors('Something Error'); 
    }

}
