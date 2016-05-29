<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    
	public function index(){

		return  view ('page.index');
     }

     public function show($id){

        return  view ('page.show');
     }

     public function create(){

        return  view ('page.create');
     }

     public function store(){

		return  redirect ('/page');
     }



     public function edit($id){

		return  view ('page.edit');
     }


     public function update($id){

		// return  redirect ('/page');
     }



     public function destroy($id){

        // return  view ('page.index');
     }

}
