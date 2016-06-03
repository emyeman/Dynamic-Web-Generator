<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    //
    public function edit(User $user)
    {
    	# code...
    	return view('user.edit',compact('user'));
    }

    public function update(Request $request , User $user)
    {
    	# code...
       $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'image' => 'required',
        ]);

    	$imagePath='';
        if(Input::hasFile('image')){
                $file = Input::file('image');
                $filename = Input::file('image')->getClientOriginalName(); 
                $file = $file->move(public_path().'/images/profile/',$filename);
                // $user->image = $file->getRealPath();
                $imagePath = '/images/profile/'.$filename;
        }
      	if($user->update(['name'=>$request->all()['name'],
      		'email' => $request->all()['email'],
      	    'image' => $imagePath,
      		]))
       	{
       	    return redirect('/dashboard');
       	}
       	else
       	{
       		return back();
       	}
    }
}
