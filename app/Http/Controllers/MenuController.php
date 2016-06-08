<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Menu;
use App\Page;
use DB;
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
            ->select('menus.id as menu_id','menus.title as menu_title','parent.id as parent_id', 'parent.title as parent_title', 'pages.id as page_id', 'pages.title as page_title')
            ->orderBy('parent.title')
            ->get();

        return  view ('menu.index',['rows'=>$rows]);
        // var_dump($rows);
     }

     public function show($id){

        return  view ('menu.show');
     }

     public function create(){
     	$menus=Menu::pluck('title','id');
     	$pages=Page::pluck('title','id');
        return  view ('menu.create',['menus'=>$menus,'pages'=>$pages]);
     }

     public function store(Request $request){
		$this->validate($request, [
            'title' => 'required|max:300',
            'parent_id' => 'integer',
            'route' => 'required|integer',   
        ]); 
        $new_row=new Menu;
        $new_row->title=trim($request->input('title'));
        if (trim($request->input('parent_id'))!='')
        	$new_row->parent_id=trim($request->input('parent_id'));
        $new_row->route=trim($request->input('route'));
        $new_row->site_id=Auth::user()->site->id;
		$is_saved=$new_row->save();
        if($is_saved)
        {
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
        $menus=Menu::pluck('title','id');
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
            'title' => 'required|max:300',
            'parent_id' => 'integer',
            'route' => 'required|integer',   
        ]);
        $row->title=trim($request->input('title'));
        if (trim($request->input('parent_id'))!='')
        	$row->parent_id=trim($request->input('parent_id'));
        $row->route=trim($request->input('route'));
        $is_saved=$row->save();
        if($is_saved)
            return redirect()->action('MenuController@index');
        else
            abort(500);
     }


	private function ch($id,&$arr)
	{
		// $arr=collect();
		$row=Menu::findOrFail($id)->children;
		foreach ($row as $key => $item) {
			$arr->push($item->id);
			MenuController::ch($item->id,$arr);
		 	$item->delete();
		}
	 //    $arr->push($row->each(function ($item, $key) {
  //       	// $arr=collect();
  //       	// $arr->push($item->id);
		//     MenuController::ch($item->id,$arr);
		//     $item->delete();
		//     return $item->id;
		// }));
		return $arr;
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
      //   $affectedRows  =$row->delete();
      //   if($affectedRows)
      //       return 'true';
      //   else
      //       abort(500);
        $arr=collect();
 
  //       $arr=$row->children->each(function ($item, $key) {
  //       	$arr=collect();
  //       	$arr->push($item->id);
		//     MenuController::ch($item->id,$arr);
		//     $item->delete();
		//     return $arr;
		// });

		foreach ($row->children as $key => $item) {
			$arr->push($item->id);
			MenuController::ch($item->id,$arr);
		    $item->delete();
		}
		// $arr->push($row->id);
		$row->delete();
  //       echo "<pre>";
		// var_dump($arr);
		// echo "</pre>";
		return $arr->toJson();
     }
}

