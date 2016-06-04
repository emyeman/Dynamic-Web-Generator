<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Header;

class BrandingController extends Controller {

    private $branding = Null;

    public function __construct(Request $request) {
        $this->branding = $request->user()->site->header;
    }

    private function upload_image($image) {
        $domain_name = $request->user()->site->doman_name;

        $directory = "/$domain_name/branding/";
        if (Input::file('image')->move(public_path() . $directory, $image)) {
            return $directory . $image;
        }
        return FALSE;
    }

    public function index(Request $request) {
//        $branding = $request->user()->site->header;
        if ($this->branding) {
            return view('branding.index')->withBranding($branding);
        } else {
            return redirect('branding/create');
        }
    }

    public function show($id) {

        return view('branding.show');
    }

    public function create() {

        return view('branding.create');
    }

    public function store(Request $request) {
        $image = Input::file('image')->getClientOriginalName();

        if ($logo = $this->upload_image($image)) {
            $brand['id'] = $request->user()->id;
            $brand['company_name'] = $request->input('companyname');
            $brand['logo'] = $logo;
            $brand['slogan'] = $request->input('slogan');
            if (Header::create($brand)) {
                return redirect('/branding');
            }
        }
        return redirect('/branding/create')->withErrors('Something Error');
    }

    public function edit(Request $request) {
        if ($this->branding) {
            return view('branding.edit')->withBranding($branding);
        } else {
            return view('branding.index')->withErrors('Something Error');
        }
    }

    public function update($id) {
        $image = Input::file('image')->getClientOriginalName();

        if ($logo = $this->upload_image($image) && $brand = $this->branding->id) {
            $brand['company_name'] = $request->input('companyname');
            $brand['logo'] = $logo;
            $brand['slogan'] = $request->input('slogan');
            if ($brand->save()) {
                return redirect('/branding');
            }
        }
        return redirect('/branding')->withErrors('Something Error');
    }

    public function destroy(Request $request) {
        if ($this->branding) {
            Header::destroy($this->branding->id);
            return redirect('branding/create');
        } else {
            return view('branding.index')->withErrors('Something Error');
        }
    }

}
