<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactUsController extends Controller
{
    
	public function index(){

		return  view ('contactus.index');
     }

     public function show($id){

        return  view ('contactus.show');
     }

     public function create(){

        return  view ('contactus.create');
     }

     public function store(){

		return  redirect ('/contactus');
     }



     public function edit($id){

		return  view ('contactus.edit');
     }


     public function update($id){

		// return  redirect ('/contactus');
     }



     public function destroy($id){

        // return  view ('contactus.index');
     }

}