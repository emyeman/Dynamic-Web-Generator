<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsPromotion extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function site()
    {
    	return $this->belongsTo(Site::class);
    }
}
