<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\NewsPromotion;

use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class PromotionController extends Controller
{
   
    private function path_to_promotions_images_folder($image)
    {
        $doman_name=Auth::user()->site->doman_name;
        $extension = $image->getClientOriginalExtension();
        return '/'.$doman_name.'/promotions/'.time().'.'.$extension; //path of image inside the storage dir & rename image
    }

	public function index(Request $request){
        $site_id=Auth::user()->id; // site_id == user_id , becuase of the 1:1 relationship
        $rows=NewsPromotion::where('site_id', $site_id)->get();
		return  view ('promotion.index',['rows'=>$rows]);
     }

     public function show($id){

        return  view ('promotion.show');
     }

     public function create(){

        return  view ('promotion.create');
     }

     public function store(Request $request)
     {
         $this->validate($request, [
            'title' => 'required|max:300',
            'description' => 'required|max:2000',
            'image' => 'required|image', // ????? what is the required max size
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        $image = Input::file('image');
        $file_name=PromotionController::path_to_promotions_images_folder($image);
        $new_row=new NewsPromotion;
        $new_row->title=trim($request->input('title'));
        $new_row->description=trim($request->input('description'));
        $new_row->image=$file_name;
        $new_row->start_date=$request->input('start_date');
        $new_row->end_date=$request->input('end_date');
        $new_row->type=true;
        $new_row->site_id=$request->user()->id;
		$is_saved=$new_row->save();
        if($is_saved)
        {
            //upload image
            Storage::disk('local')->put($file_name, File::get($image));
            return redirect()->action('PromotionController@create');
        }
        else
        {
            abort(500);
        }
        
     }



     public function edit($id,Request $request){
        $row=NewsPromotion::find($id);
        $user=Auth::user();
        if ($user->cannot('access-dashboard', $row)) {
            abort(403);
        }
		return  view ('promotion.edit',['row'=>$row]);
     }


     public function update($id,Request $request){
        $row=NewsPromotion::find($id);
        $user=Auth::user();
        if ($user->cannot('access-dashboard', $row)) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required|max:300',
            'description' => 'required|max:2000',
            'image' => 'image', // ????? what is the required max size
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        $old_imag_name=$row->image;
        if (Input::hasFile('image'))// if the user didn't update the image the old image remain the same
        {
            $image = Input::file('image');
            $file_name=PromotionController::path_to_promotions_images_folder($image);
            $row->image=$file_name;
        }
        $row->title=trim($request->input('title'));
        $row->description=trim($request->input('description'));
        $row->start_date=$request->input('start_date');
        $row->end_date=$request->input('end_date');
        $is_saved=$row->save();
        if($is_saved && Input::hasFile('image'))
        {
            //replace the old image with the new one in case a new image sent
            unlink(public_path('assets/images/').$old_imag_name); 
            Storage::disk('local')->put($file_name, File::get($image));
        }
		return  redirect ('promotion');
     }



     public function destroy($id)
     {
        $row=NewsPromotion::find($id);
        $image_path=$row->image;
        $user=Auth::user();
        if ($user->cannot('access-dashboard', $row)) {
            abort(403);
        }
        $affectedRows  =$row->delete();
        if($affectedRows)
            return 'true';
        else
            abort(500);
        
     }

}
