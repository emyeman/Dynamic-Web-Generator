<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
use App\Http\Requests;
use Auth;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Session;
class AboutUsController extends Controller
{
	private function path_to_aboutus_image($image)
    {
        $doman_name=Auth::user()->site()->first()['attributes']['subdomain'];
        $extension = $image->getClientOriginalExtension();
        return '/'.$doman_name.'/about/'.time().'.'.$extension; //path of image inside the storage dir & rename image
    }


    public function show($id){
    	try //the requested row is exists
            {
            	$row=Aboutus::findOrFail($id);
            	return  view ('aboutus.show',['row'=>$row]);
            }
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
    }


    public function create(){
    	$aboutus_id = Session::get('site_id'); // user_id == aboutus_id --> 1:1 relationship
    	$is_exists=Aboutus::where('site_id', '=',$aboutus_id)->first();
		if($is_exists===null)
			return  view ('aboutus.create');
		// return view('aboutus.edit'); 
		return redirect()->action('AboutUsController@show',[$is_exists['attributes']['id']]);      
    }


    public function store(Request $request)
     {
         $this->validate($request, [
            'description' => 'required|max:64000',
            'image' => 'required|image' // ????? what is the required max size
        ]);
        $image = Input::file('image');
        $file_name=AboutUsController::path_to_aboutus_image($image);
        $new_row=new Aboutus;
        $new_row->description=trim($request->input('description'));
        $new_row->image=$file_name;
        $new_row->site_id=Session::get('site_id');
		$is_saved=$new_row->save();
        if($is_saved)
        {
            //upload image
            Storage::disk('local')->put($file_name, File::get($image));
            return redirect()->action('AboutUsController@show',[$new_row->id]);
        }
        else
        {
            abort(500);
        }
    }


    public function edit($id,Request $request){
        try
        {
            $row=Aboutus::findOrFail($id);
            $user=Auth::user();
	        if (Auth::user()->cannot('access-aboutus', $row)) {
	            abort(403);
        	}
			return  view ('aboutus.edit',['row'=>$row]);
        }
        catch(Exception $e)
        {
            throw new ModelNotFoundException($e->getMassege());   
        }
     }
      


     public function update($id,Request $request){
        try    //the requested row is exists
            {$row=Aboutus::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}

        $user=Auth::user();
        if ($user->cannot('access-aboutus', $row)) {
            abort(403);
        }
        $this->validate($request, [
            'description' => 'required|max:64000',
            'image' => 'image', // ????? what is the required max size
        ]);
        $old_imag_name=$row->image;
        if (Input::hasFile('image'))// if the user didn't update the image the old image remain the same
        {
            $image = Input::file('image');
            $file_name=AboutUsController::path_to_aboutus_image($image);
            $row->image=$file_name;
        }

        $row->description=trim($request->input('description'));
        $is_saved=$row->save();
        if($is_saved && Input::hasFile('image'))
        {
            //replace the old image with the new one in case a new image sent
            unlink(public_path('assets/images/').$old_imag_name); 
            Storage::disk('local')->put($file_name, File::get($image));
        }
		return redirect()->route('aboutus.show',['id'=>$row->id]);
     }
	        
}
