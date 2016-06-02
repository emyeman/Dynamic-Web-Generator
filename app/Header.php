<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    //
    
    protected $fillable = ['id', 'company_name', 'logo', 'slogan'];
    public function site()
    {
    	return $this->belongsTo(Site::class);
    }
}
