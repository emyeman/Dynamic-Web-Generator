<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crusal extends Model
{
	use SoftDeletes;

    public function site()
    {
    	return $this->belongsTo(Site::class);
    }
}
