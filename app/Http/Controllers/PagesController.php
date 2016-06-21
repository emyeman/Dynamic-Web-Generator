<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use Auth;
use Session;

class PagesController extends Controller
{
    
	public function index(){
        $site_id=Auth::user()->site->id;
        $rows=Page::where('site_id', $site_id)->get();
        return  view ('page.index',['rows'=>$rows]);
     }

     public function show($id){

        return  view ('page.show');
     }

     public function create(){

        return  view ('page.create');
     }

     public function store(Request $request){
        $site_id=Auth::user()->site->id;
        $this->validate($request, [
            'title' => 'max:255|unique:pages,title,NULL,id,site_id,'.$site_id,
            // 'content' => 'required',
        ]);
        $new_row=new Page;

        $newtitle =trim($request->input('title'));
        $findtitle=trim($request->input('findtitle'));
        if (!empty($newtitle)) {
            $new_row->title=$newtitle;
        }else{
            $new_row->title=$findtitle;
        }
        
        $new_row->content=$request->input('content');
        $new_row->site_id=$site_id;
        $is_saved=$new_row->save();
        if($is_saved)
        {
            Session::flash('insert_success', 'A new page has been added successfully');
            return redirect()->action('PagesController@create');
        }
        else
        {
            abort(500);
        }
     }

     public function edit($id){
        try
        {
            $row=Page::findOrFail($id);
        }
        catch(Exception $e)
        {
            throw new ModelNotFoundException($e->getMassege());
            
        }
        $user=Auth::user();
        if ($user->cannot('access-pages', $row->site)) {
            abort(403);
        }
        return  view ('page.edit',['row'=>$row]);
     }

     public function update($id,Request $request){
		try
            {$row=Page::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}

        $user=Auth::user();
        if ($user->cannot('access-pages', $row->site)) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required|max:255|unique:pages,title,'.$id,
            // 'content' => 'required',
        ]);
        $newtitle =trim($request->input('title'));
        $findtitle=trim($request->input('findtitle'));
        if (!empty($newtitle)) {
            $row->title=$newtitle;
        }else{
            $row->title=$findtitle;
        }

        $row->content=trim($request->input('content'));
        $is_saved=$row->save();
        Session::flash('update_success', 'the page has been updated successfully');
        return redirect()->route('page.index');
     }

     public function destroy($id){
        try
            {$row=Page::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        $user=Auth::user();
        if ($user->cannot('access-pages', $row->site)) {
            abort(403);
        }
        $affectedRows  =$row->delete();
        if($affectedRows)
            return 'true';
        else
            abort(500);
        
     }

}
