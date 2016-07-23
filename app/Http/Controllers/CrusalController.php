<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Crusal;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;
use DB;

class CrusalController extends Controller
{

    private function path_to_crusal_images($image)
    {
        if(Auth::user()->status == 'reseller')
        {
            $site = DB::table('sites')->where('id',Session::get('user_id'))->get();
            $doman_name = $site[0]->subdomain;
        }
        else
        {
            $doman_name=Auth::user()->site()->first()['attributes']['subdomain'];
        }
        $extension = $image->getClientOriginalExtension();
        return '/'.$doman_name.'/crusal/'.time().'.'.$extension; //path of image inside the storage dir & rename image
    }

	public function index(){

        if(Auth::user()->status == 'reseller')
        {
            $site_id = Session::get('user_id');
        }
        else
        {
            $site_id=Auth::user()->site->id;
        }
        
        $rows=Crusal::where('site_id', $site_id)->get();
        return  view ('crusal.index',['rows'=>$rows]);
     }

     public function show($id){

        return  view ('crusal.show');
     }

     public function create(){

        return  view ('crusal.create');
     }


     public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|max:700'
        ]);
        $image = Input::file('image');
        $file_name=CrusalController::path_to_crusal_images($image);
        $new_row=new Crusal;
        $new_row->title=trim($request->input('title'));
        $new_row->ar_title=trim($request->input('ar_title'));

        $new_row->description=trim($request->input('description'));
        $new_row->ar_description=trim($request->input('ar_description'));

        $new_row->image=$file_name;

        if(Auth::user()->status == 'reseller')
        {
            $new_row->site_id = Session::get('user_id');
        }
        else
        {
            $new_row->site_id=Auth::user()->site->id;
        }
        
        

        $is_saved=$new_row->save();
        if($is_saved)
        {
            //upload image
            Storage::disk('local')->put($file_name, File::get($image));
            Session::flash('insert_success', 'A new crusal image has been added successfully');
            return redirect()->route('crusal.create');
        }
        else
        {
            abort(500);
        }
     }


     public function edit($id){
        try
        {
            $row=Crusal::findOrFail($id);
            $user=Auth::user();
            if ($user->cannot('access-crusal', $row)) {
                abort(403);
            }
            return  view ('crusal.edit',['row'=>$row]);
        }
        catch(Exception $e)
        {
            throw new ModelNotFoundException($e->getMassege());   
        }
     }


     public function update($id,Request $request){
		try
            {$row=Crusal::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}

        $user=Auth::user();
        if ($user->cannot('access-crusal', $row)) {
            abort(403);
        }
        $this->validate($request, [
            'image' => 'image|max:700'
        ]);
        $old_imag_name=$row->image;
        if (Input::hasFile('image'))// if the user didn't update the image the old image remain the same
        {
            $image = Input::file('image');
            $file_name=CrusalController::path_to_crusal_images($image);
            $row->image=$file_name;
        }
        $row->title=trim($request->input('title'));
        $row->ar_title=trim($request->input('ar_title'));

        $row->description=trim($request->input('description'));
        $row->ar_description=trim($request->input('ar_description'));

        $is_saved=$row->save();
        if($is_saved && Input::hasFile('image'))
        {
            //replace the old image with the new one in case a new image sent
            unlink(public_path('assets/images/').$old_imag_name); 
            Storage::disk('local')->put($file_name, File::get($image));
        }
        if($is_saved)
        {
            Session::flash('update_success', 'the crusal image has been updated successfully');
        }
        else
            Session::flash('update_failed', '<strong>ERROR!!</strong> the crusal image has not been updated, please try again.');
        return redirect()->route('crusal.index');
     }



     public function destroy($id){
        try
            {$row=Crusal::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        $image_path=$row->image;
        $user=Auth::user();
        if ($user->cannot('access-crusal', $row)) {
            abort(403);
        }
        $affectedRows  =$row->delete();
        if($affectedRows)
            return 'true';
        else
            abort(500);
     }


}
