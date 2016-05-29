<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NumberViewController extends Controller
{
    
	public function index(){

		return  view ('numberview.index');
     }

     public function show($id){

        return  view ('numberview.show');
     }

     public function create(){

        return  view ('numberview.create');
     }

     public function store(){

		return  redirect ('/numberview');
     }



     public function edit($id){

		return  view ('numberview.edit');
     }


     public function update($id){

		// return  redirect ('/numberview');
     }



     public function destroy($id){

        // return  view ('numberview.index');
     }

}
