<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\NewsPromotion;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Exceptions\Handler;

class NewsPromotionController extends Controller
{
    private function path_to_news_promotions_images_folder($image,$type)
    {
        $subdomain=Auth::user()->site->subdomain;
        $extension = $image->getClientOriginalExtension();
        if($type=='promotion')
        	return '/'.$subdomain.'/promotions/'.time().'.'.$extension; //path of image inside the storage dir & rename image
    	else
    		return '/'.$subdomain.'/news/'.time().'.'.$extension; //path of image inside the storage dir & rename image
    }

	public function index($type,Request $request){
        $type=trim($type);
        if( !($type == 'promotion' || $type == 'news')) //prevent sending wrong type, only 1 or 0 are acceptable
            abort(500);

        $site_id=Auth::user()->site->id; // site_id == user_id , becuase of the 1:1 relationship
        $rows=NewsPromotion::where('site_id', $site_id)
                            ->where('type',$type)
                            ->get();
        return  view ('news_promotion.index',['rows'=>$rows,'type'=>$type]);

     }

     public function show($id){
        return  view ('news_promotion.show');
     }

     public function create($type){
        $type=trim($type);
        if( !($type == 'promotion' || $type == 'news')) //prevent sending wrong type, only 1 or 0 are acceptable
            abort(500);

        return  view ('news_promotion.create',['type'=>$type]);
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
        $type=trim($request->input('type'));
        $image = Input::file('image',$type);
        $file_name=NewsPromotionController::path_to_news_promotions_images_folder($image,$type);
        $new_row=new NewsPromotion;
        $new_row->title=trim($request->input('title'));
        $new_row->description=trim($request->input('description'));
        $new_row->image=$file_name;
        $new_row->start_date=$request->input('start_date');
        $new_row->end_date=$request->input('end_date');
        $new_row->type=$type;
        $new_row->site_id=$request->user()->site->id;
		$is_saved=$new_row->save();
        if($is_saved)
        {
            //upload image
            Storage::disk('local')->put($file_name, File::get($image));
            return redirect()->action('NewsPromotionController@create',[$type]);
            // return redirect()->route('promotion.create',['type'=>trim($request->input('type'))]);
        }
        else
        {
            abort(500);
        }
        
     }

     public function edit($id,Request $request){
        try
        {
            $row=NewsPromotion::findOrFail($id);
        }
        catch(Exception $e)
        {
            throw new ModelNotFoundException($e->getMassege());
            
        }
        $user=Auth::user();
        if ($user->cannot('access-news_promotions', $row)) {
            abort(403);
        }
		return  view ('news_promotion.edit',['row'=>$row]);
     }


     public function update($id,Request $request){
        try
            {$row=NewsPromotion::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}

        $user=Auth::user();
        if ($user->cannot('access-news_promotions', $row)) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required|max:300',
            'description' => 'required|max:2000',
            'image' => 'image', // ????? what is the required max size
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        $type=trim($request->input('type'));
        $old_imag_name=$row->image;
        if (Input::hasFile('image'))// if the user didn't update the image the old image remain the same
        {
            $image = Input::file('image');
            $file_name=NewsPromotionController::path_to_news_promotions_images_folder($image,$type);
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
        
		return redirect()->route('news_promotion.index',['type'=>$type]);
     }



     public function destroy($id)
     {
        try
            {$row=NewsPromotion::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        $image_path=$row->image;
        $user=Auth::user();
        if ($user->cannot('access-news_promotions', $row)) {
            abort(403);
        }
        $affectedRows  =$row->delete();
        if($affectedRows)
            return 'true';
        else
            abort(500);
        
     }
}
