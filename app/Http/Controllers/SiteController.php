<?php

namespace App\Http\Controllers;

use Auth;

use Session;

use Illuminate\Http\Request;
use App\Site;
use App\Http\Requests;

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
        return  view('site.create');
     }

     public function store(Request $request)
     {

        $site = new Site($request->all());
        $site->id = Auth::user()->id;
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

     public function update()
     {
         # code...
        return true;
     }


}
