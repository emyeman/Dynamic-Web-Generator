<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function page()
    {
    	return $this->belongsTo(Page::class);
    }

    public function submenuItems()
    {
    	return $this->hasMany(MenuItem::class);
    }

   public function menuItem()
   {
   	return $this->belongsTo(MenuItem::class);
   }
}
