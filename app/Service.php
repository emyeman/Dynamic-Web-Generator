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
    	return $service->save();
    }
}
