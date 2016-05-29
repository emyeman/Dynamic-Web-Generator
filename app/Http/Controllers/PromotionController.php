<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PromotionController extends Controller
{
   
	public function index(){

		return  view ('promotion.index');
     }

     public function show($id){

        return  view ('promotion.show');
     }

     public function create(){

        return  view ('promotion.create');
     }

     public function store(){

		return  redirect ('/promotion');
     }



     public function edit($id){

		return  view ('promotion.edit');
     }


     public function update($id){

		// return  redirect ('/promotion');
     }



     public function destroy($id){

        // return  view ('promotion.index');
     }

}
