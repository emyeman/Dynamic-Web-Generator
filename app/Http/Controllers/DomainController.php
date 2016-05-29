<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DomainController extends Controller
{
    
	public function index(){

		return  view ('domain.index');
     }

     public function show($id){

        return  view ('domain.show');
     }

     public function create(){

        return  view ('domain.create');
     }

     public function store(){

		return  redirect ('/domain');
     }



     public function edit($id){

		return  view ('domain.edit');
     }


     public function update($id){

		// return  redirect ('/domain');
     }



     public function destroy($id){

        // return  view ('domain.index');
     }

}
