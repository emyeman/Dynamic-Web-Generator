<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Auth;

class ServiceController extends Controller
{
    public function index(){

        $services = DB::table('services')->where('site_id',Auth::user()->id)->get();
		return  view('service.index' ,compact('services'));
     }

     public function show($id){

        return  view('service.show');
     }

     public function edit(Service $service)
     {
        # code...
        return view('service.edit',compact('service'));
     }

     public function update(Request $request, Service $service)
     {
        # code...
        $this->validate($request, [
            'title' => 'required|max:255',
            'icon' => 'required',
            'description' => 'required',
        ]);
       if($service->update($request->all()))
       {
            return redirect('/service');
       }
       return redirect('service.edit');

     }

     public function create(){
        return  view('service.create');
        // die('ssss');
     }


     public function store(Request $request)
     {
        $this->validate($request, [
        'title' => 'required|max:255',
        'icon' => 'required',
        'description' => 'required',
        ]);
     	$service = new Service($request->all());
        $service->site_id = Auth::user()->id;
     	if( $service->addService($service))
        {
            return redirect('/service');
        }
        return redirect('service.create');
     }


     public function delete(Service $service)
     {
         # code...
        $service->delete();
        return back();
     }
}
