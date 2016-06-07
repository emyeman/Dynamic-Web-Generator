<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
	use SoftDeletes;
    public function page()
    {
    	return $this->belongsTo(Page::class,'route');
    }

    public function children()
    {
    	return $this->hasMany(Menu::class,'parent_id');
    }

   public function parent()
   {
   	return $this->belongsTo(Menu::class,'parent_id');
   }
}
