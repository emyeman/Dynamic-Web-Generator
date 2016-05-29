<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
   
	public function index(){

		return  view ('product.index');
     }

     public function show($id){

        return  view ('product.show');
     }

     public function create(){

        return  view ('product.create');
     }

     public function store(){

		return  redirect ('/product');
     }



     public function edit($id){

		return  view ('product.edit');
     }


     public function update($id){

		// return  redirect ('/product');
     }



     public function destroy($id){

        // return  view ('product.index');
     }

}
