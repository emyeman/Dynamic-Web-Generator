<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CrusalController extends Controller
{
    

	public function index(){

		return  view ('crusal.index');
     }

     public function show($id){

        return  view ('crusal.show');
     }

     public function create(){

        return  view ('crusal.create');
     }

     public function store(){

		return  redirect ('/crusal');
     }



     public function edit($id){

		return  view ('crusal.edit');
     }


     public function update($id){

		// return  redirect ('/crusal');
     }



     public function destroy($id){

        // return  view ('crusal.index');
     }


}
