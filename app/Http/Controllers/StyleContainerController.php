<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StyleContainerController extends Controller
{
   
	public function index(){

		return  view ('stylecontainer.index');
     }

     public function show($id){

        return  view ('stylecontainer.show');
     }

     public function create(){

        return  view ('stylecontainer.create');
     }

     public function store(){

		return  redirect ('/stylecontainer');
     }



     public function edit($id){

		return  view ('stylecontainer.edit');
     }


     public function update($id){

		// return  redirect ('/stylecontainer');
     }



     public function destroy($id){

        // return  view ('stylecontainer.index');
     }

}
