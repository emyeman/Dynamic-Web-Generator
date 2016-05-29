<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    
	public function index(){

		return  view ('category.index');
     }

     public function show($id){

        return  view ('category.show');
     }

     public function create(){

        return  view ('category.create');
     }

     public function store(){

		return  redirect ('/category');
     }



     public function edit($id){

		return  view ('category.edit');
     }


     public function update($id){

		// return  redirect ('/category');
     }



     public function destroy($id){

        // return  view ('category.index');
     }

}
