<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Domain;
use Session;
use DB;

class DomainController extends Controller
{
	public function index()
    {
        $domain = DB::table('domains')->where('site_id',Session::get('site_id'))->first();
		return  view('domain.index',compact('domain'));
    }

    public function show($id){
      return  view ('domain.show');
    }

     public function create(){

        return  view ('domain.create');
     }

     public function store(Request $request){

        $this->validate($request, [
            'domain_name' => 'required|max:255|unique:domains|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        $domain = new Domain($request->all());
        $domain->site_id = Auth::user()->id;
        
        if($domain->addDomain($domain))
        {
            return  redirect ('/domain');    
        }
        return back();
     }



     public function edit(Domain $domain){
		return  view ('domain.edit',compact('domain'));
     }


     public function update(Request $request , Domain $domain){
        $this->validate($request, [
            'domain_name' => 'required|max:255|unique:domains|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        ]);

        if($domain->update($request->all()))
        {
            return redirect('/dashboard');
        }
        return back();

		// return  redirect ('/domain');
     }



     public function destroy($id){

        // return  view ('domain.index');
     }

}
