<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FooterController extends Controller
{
    
	public function index(){

		return  view ('footer.index');
     }

     public function show($id){

        return  view ('footer.show');
     }

     public function create(){

        return  view ('footer.create');
     }

     public function store(){

		return  redirect ('/footer');
     }



     public function edit($id){

		return  view ('footer.edit');
     }


     public function update($id){

		// return  redirect ('/footer');
     }



     public function destroy($id){

        // return  view ('footer.index');
     }


}
