<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service;
use App\Http\Requests;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Auth;
use Config;


class ServiceController extends Controller
{
    public function index(){
        if(Auth::user()->status == 'reseller')
        {
            $services = DB::table('services')->where('site_id',Session::get('user_id'))->get();
        }
        else
        {
            $services = DB::table('services')->where('site_id',Auth::user()->id)->get();
        }
        
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
            'ar_title' => 'required|max:255',
            'icon' => 'required',
            'description' => 'required',
            'ar_description' => 'required',
        ]);
       if($service->update($request->all()))
       {        
            Session::flash('update_success', 'the service item has been updated successfully');
            return redirect('/service');
       }else{
            abort(500);
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
        'ar_title' => 'required|max:255',
        'icon' => 'required',
        'description' => 'required',
        'ar_description' => 'required',
        ]);
     	$service = new Service($request->all());

        if(Auth::user()->status == 'reseller')
        {
            
           $service->site_id = Session::get('user_id');
        }
        else
        {
            $service->site_id = Auth::user()->id;
        }

        

     	if( $service->addService($service))
        {
            Session::flash('insert_success', 'A new service has been added successfully');
            return redirect('/service/create');
        }else{
            abort(500);
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
