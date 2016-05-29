<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NavbarController extends Controller
{
    
	public function index(){

		return  view ('navbar.index');
     }

     public function show($id){

        return  view ('navbar.show');
     }

     public function create(){

        return  view ('navbar.create');
     }

     public function store(){

		return  redirect ('/navbar');
     }



     public function edit($id){

		return  view ('navbar.edit');
     }


     public function update($id){

		// return  redirect ('/navbar');
     }



     public function destroy($id){

        // return  view ('navbar.index');
     }

}
