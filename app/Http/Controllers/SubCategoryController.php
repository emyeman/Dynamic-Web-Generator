<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubCategoryController extends Controller
{
    
	public function index(){

		return  view ('subcategory.index');
     }

     public function show($id){

        return  view ('subcategory.show');
     }

     public function create(){

        return  view ('subcategory.create');
     }

     public function store(){

		return  redirect ('/subcategory');
     }



     public function edit($id){

		return  view ('subcategory.edit');
     }


     public function update($id){

		// return  redirect ('/subcategory');
     }



     public function destroy($id){

        // return  view ('subcategory.index');
     }

}