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
            'email' => 'required',
            'mobile' => 'required|regex:/^[0-9]{10}/',
        ]);

       $old_imag_name = $user['attributes']['image'];
    	 $imagePath=$user->image;
       if(Input::hasFile('image')){
                $file = Input::file('image');
                $filename = Input::file('image')->getClientOriginalName(); 
                $file = $file->move(public_path().'/images/profile/',$filename);
                // $user->image = $file->getRealPath();

                $imagePath = '/images/profile/'.$filename;
        }
      	if($user->update([
          'name'=>$request->all()['name'],
      		'email' => $request->all()['email'],
          'mobile' => $request->all()['mobile'],
      	  'image' => $imagePath,
      		]))
       	{
            unlink(public_path().$old_imag_name);
            return redirect('/dashboard');
       	}
       	else
       	{
       		return back();
       	}
    }
}
