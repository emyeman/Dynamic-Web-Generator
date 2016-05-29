<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BrandingController extends Controller
{
    
	public function index(){

		return  view ('branding.index');
     }

     public function show($id){

        return  view ('branding.show');
     }

     public function create(){

        return  view ('branding.create');
     }

     public function store(){

		return  redirect ('/branding');
     }



     public function edit($id){

		return  view ('branding.edit');
     }


     public function update($id){

		// return  redirect ('/branding');
     }



     public function destroy($id){

        // return  view ('branding.index');
     }


}


