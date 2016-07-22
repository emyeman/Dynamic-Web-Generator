<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Menu;
use App\Page;
use DB;
use Session;
class MenuController extends Controller
{
    public function index(){
    	$site_id=Auth::user()->site->id;
     //    $rows=Menu::where('site_id', $site_id)->get();
     //    // $rows=$rows[0]->page;
     //    var_dump($rows[0]->page);
        // return  view ('menu.index',['rows'=>$rows]);

        $rows = DB::table('menus')
            ->leftJoin('pages', 'menus.route', '=', 'pages.id')
            ->leftJoin('menus as parent', 'parent.id', '=', 'menus.parent_id')
            ->where('menus.site_id', $site_id)
            ->where('menus.deleted_at', null)
            ->select('menus.id as menu_id','menus.title as menu_title','menus.ar_title as menu_ar_title','parent.id as parent_id', 'parent.title as parent_title', 'pages.id as page_id', 'pages.title as page_title')
            ->orderBy('parent.title')
            ->get();
// var_dump($rows);die();
        return  view ('menu.index',['rows'=>$rows]);
        // var_dump($rows);
     }

     public function show($id){

        return  view ('menu.show');
     }

     public function create(){
     	// $menus=Menu::pluck('title','id');
     	// $pages=Page::pluck('title','id');
        $menus=DB::table('menus')->where('site_id',Auth::user()->id)->get();
        $pages=DB::table('pages')->where('site_id',Auth::user()->id)->get();
        
        $site_id=Auth::user()->site->id;
        $rows = DB::table('menus')
            ->leftJoin('pages', 'menus.route', '=', 'pages.id')
            ->leftJoin('menus as parent', 'parent.id', '=', 'menus.parent_id')
            ->where('menus.site_id', $site_id)
            ->where('menus.deleted_at', null)
            ->select('menus.id as menu_id','menus.title as menu_title','menus.ar_title as menu_ar_title','parent.id as parent_id', 'parent.title as parent_title', 'pages.id as page_id', 'pages.title as page_title')
            ->orderBy('parent.title')
            ->get();


        // var_dump($menus);die();
        return  view ('menu.create',['menus'=>$menus,'pages'=>$pages,'rows'=>$rows]);
     }

    public function ajaxexite_menu($title,Request $request){
        if (Auth::user()){
            if ($request->ajax()){
            //select all menus of site and check
            $exit = DB::table('menus')->where('site_id',Auth::user()->id)->where('title',$title)->first();
            if($exit){
                $is_exit='true';
                // var_dump($is_exit);die();
            }else{
                $is_exit='false';
                // var_dump($is_exit);die();
            }
            return $is_exit;
          } 
        }else{
            return  redirect ('/login');   
        }
     }


     public function store(Request $request){
		$this->validate($request, [
            'title' => 'required|unique:menus,title,NULL,id,site_id,'.Auth::user()->site->id,
            'parent_id' => 'integer',
            'route' => 'required|integer',   
        ]); 
        $new_row=new Menu;
        $new_row->title=trim($request->input('title'));
        $new_row->ar_title=trim($request->input('ar_title'));
        if (trim($request->input('parent_id'))!='')
        	$new_row->parent_id=trim($request->input('parent_id'));
        $new_row->route=trim($request->input('route'));
        $new_row->site_id=Auth::user()->site->id;
		$is_saved=$new_row->save();
        if($is_saved)
        {
            Session::flash('insert_success', 'A new menu item has been added successfully');
            return redirect()->action('MenuController@create');
        }
        else
        {
            abort(500);
        }
     }



     public function edit($id){
     	try
        {
            $row=Menu::findOrFail($id);
        }
        catch(Exception $e)
        {
            throw new ModelNotFoundException($e->getMassege());
            
        }
        $menus=Menu::where('id','!=', $id)->pluck('title','id'); // to not add a menu as a parent to itself
     	$pages=Page::pluck('title','id');
        $user=Auth::user();
        if ($user->cannot('access-menus', $row)) {
            abort(403);
        }
		return  view ('menu.edit',['row'=>$row,'menus'=>$menus,'pages'=>$pages]);
     }


     public function update($id,Request $request){
     	try
            {$row=Menu::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}

        $user=Auth::user();
        if ($user->cannot('access-menus', $row)) {
            abort(403);
        }
        $this->validate($request, [
            'title' => 'required|unique:menus,title,'.$id,
            'parent_id' => 'integer',
            'route' => 'required|integer',   
        ]);
        $row->title=trim($request->input('title'));
        $row->ar_title=trim($request->input('ar_title'));
        if (trim($request->input('parent_id'))!='')
        	$row->parent_id=trim($request->input('parent_id'));
        $row->route=trim($request->input('route'));
        $is_saved=$row->save();
        if($is_saved)
        {
            Session::flash('update_success', 'the menu item has been updated successfully');
            return redirect()->action('MenuController@index');
        }
        else
            abort(500);
     }


	private function getChildren($id,&$menus_to_delete_arr)
	{
		$row=Menu::findOrFail($id)->children;
		foreach ($row as $key => $item) {
			$menus_to_delete_arr->push($item->id);
			MenuController::getChildren($item->id,$menus_to_delete_arr);
		 	$item->delete();
		}
	}

     public function destroy($id){
     	try
            {$row=Menu::findOrFail($id);}
        catch(Exception $e)
            {throw new ModelNotFoundException($e->getMassege());}
        $user=Auth::user();
        if ($user->cannot('access-menus', $row)) {
            abort(403);
        }

        $menus_to_delete_arr=collect();

		foreach ($row->children as $key => $item) {
			$menus_to_delete_arr->push($item->id);
			MenuController::getChildren($item->id,$menus_to_delete_arr);
		    $item->delete();
		}

		$row->delete();

		return $menus_to_delete_arr->toJson();
     }

     private function updateMenus($parent_id, $menus)
     {
        foreach ($menus as $menu) {
            $id=$menu['id'];
            $m=Menu::findOrFail($id);
            $m->parent_id=$parent_id;
            $m->save();
            if(isset($menu['children']))
                return MenuController::updateMenus($id,$menu['children']);
        }
        return 'kk' ;
     }

     public function updateAll(Request $request)
     {
        $menus=$request->input('data');
        foreach ($menus as $menu) {
            // return $menu['children'];
            $id=$menu['id'];
            $m=Menu::findOrFail($id);
            $m->parent_id= NULL;
            $m->save();
            if(isset($menu['children']))
                MenuController::updateMenus($id,$menu['children']);
        }
        return 'yes';
        // echo "<pre>";
        // return($request->input('data'));
        // echo "</pre>";
     }
}


