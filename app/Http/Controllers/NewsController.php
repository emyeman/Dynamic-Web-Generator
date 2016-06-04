<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    
	public function index(){

		return  view ('news.index');
     }

     public function show($id){

        return  view ('news.show');
     }

     public function create(){

        return  view ('news.create');
     }

     public function store(){

		return  redirect ('/news');
     }



     public function edit($id){

		return  view ('news.edit');
     }


     public function update($id){

		// return  redirect ('/news');
     }

     public function destroy($id){

        // return  view ('news.index');
     }


}
