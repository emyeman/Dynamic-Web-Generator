<?php

namespace App\Http\Controllers;

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

    public function store() {
        $image = Input::file('image')->getClientOriginalName();

        if ($this->site && $logo = $this->upload_image($image)) {
            $brand = new Header;
            $brand->site_id = $this->site->id;
            $brand->company_name = $this->request->input('companyname');
            $brand->logo = $logo;
            $brand->slogan = $this->request->input('slogan');
            // die(print_r($brand));
            if ($brand->save()) {
                return redirect('/branding');
            }
        }
        return redirect('/branding/create')->withErrors('Something error');
    }

    public function edit() {
        if ($this->site->header) {
            return view('branding.edit')->withBranding($this->site->header);
        }
        return view('branding.index')->withErrors('Something Error');
    }

    public function update($id) {
        $image = Input::file('image')->getClientOriginalName();

        if ($id == $this->site->header->id && $logo = $this->upload_image($image)) {
            $brand = Header::find($id);
            $brand->company_name = $this->request->input('companyname');
            $brand->logo = $logo;
            $brand->slogan = $this->request->input('slogan');
            if ($brand->save()) {
                return redirect('/branding')->withBranding($brand);
            }
        }
        return redirect('/branding')->withErrors('Something Error');
    }

    public function destroy() {
        if ($this->branding) {
            Header::destroy($this->site->header->id);
            return redirect('branding/create');
        }
        return view('branding.index')->withErrors('Something Error'); 
    }

}
