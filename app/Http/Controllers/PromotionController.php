<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\NewsPromotion;

use Auth;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
   
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
        //image upload
         $this->validate($request, [
            'title' => 'required|max:300',
            'description' => 'required|max:2000',
            'image' => 'required|image', // ????? what is the required max size
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $new_row=new NewsPromotion;
        $new_row->title=$request->input('title');
        $new_row->description=$request->input('description');
        $new_row->image=$request->input('image');
        $new_row->start_date=$request->input('start_date');
        $new_row->end_date=$request->input('end_date');
        $new_row->type=true;
        $new_row->site_id=$request->user()->id;
		$new_row->save();
        return  view('promotion.create');
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
            'image' => 'required|image', // ????? what is the required max size
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $row->title=$request->input('title');
        $row->description=$request->input('description');
        $row->image=$request->input('image');
        $row->start_date=$request->input('start_date');
        $row->end_date=$request->input('end_date');
        $row->save();
		return  redirect ('promotion');
     }



     public function destroy($id)
     {
        $row=NewsPromotion::find($id);
        if ($request->user()->cannot('access-dashboard', $row)) {
            abort(403);
        }
        $affectedRows  =$row->delete();
        return json_encode( $affectedRows );
     }

}
