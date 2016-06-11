<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Input;
use Auth;

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
    	 $imagePath=$old_imag_name;
       $has_new_file = 0;
       if(Input::hasFile('image')){
                $has_new_file = 1;
                $file = Input::file('image');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/images/profile/',time().'.'.$extension);
                // $user->image = $file->getRealPath();

                $imagePath = '/images/profile/'.time().'.'.$extension;
        }
      	if($user->update([
          'name'=>$request->all()['name'],
      		'email' => $request->all()['email'],
          'mobile' => $request->all()['mobile'],
      	  'image' => $imagePath,
      		]))
       	{
          if($has_new_file == 1 && $old_imag_name != '/default.jpg')
          {
                try
                {
                    unlink(public_path().$old_imag_name);    
                }
                catch (\Exception $e) {
                }
          }
          
            return redirect('/');
       	}
       	else
       	{
       		return back();
       	}
    }
}
