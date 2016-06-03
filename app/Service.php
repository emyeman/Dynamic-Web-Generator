<?php

namespace App;
use Session;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'icon',
    ];
    public function addService(Service $service)
    {
    	# code...
    	$service->site_id = Session::get('site_id');
    	return $service->save();
    }
}
