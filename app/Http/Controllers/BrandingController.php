<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Header;

class BrandingController extends Controller {

    public function index(Request $request) {
        $site = $request->user()->site->header;
        if ($site) {
//            $branding = $site->header();

            return view('branding.index')->withBranding($site);
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
        $doman_name = $request->user()->site->doman_name;
        $logo = Input::file('image')->getClientOriginalName();

        $directory = "/$doman_name/branding/";
        
        Input::file('image')->move(public_path().$directory, $logo);

        $brand['id'] = $request->user()->id;
        $brand['company_name'] = $request->input('companyname');
        $brand['logo'] = $directory.$logo;
        $brand['slogan'] = $request->input('slogan');
        if (Header::create($brand)) {
            return redirect('/branding');
        }
        else{
            return redirect('/branding/create')->withErrors('Something Error');
        }
    }

    public function edit($id) {

        return view('branding.edit');
    }

    public function update($id) {

        // return  redirect ('/branding');
    }

    public function destroy($id) {

        // return  view ('branding.index');
    }

}
