<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function site()
    {
    	return $this->belongsTo(Site::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function subcategories()
    {
    	return $this->hasMany(Category::class);
    }

   public function category()
   {
   	return $this->belongsTo(Category::class);
   }
}
