<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	public function site()
    {
    	return $this->belongsTo(Site::class);
    }
    
    public function menuItem()
    {
    	return $this->hasOne(MenuItem::class);
    }
}
