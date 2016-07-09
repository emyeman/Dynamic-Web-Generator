<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Header;

class Header extends Model
{
    //
    
    protected $fillable = ['id', 'company_name', 'logo', 'slogan'];
    public function site()
    {
    	return $this->belongsTo(Site::class);
    }

    public function addHeader(Header $header)
    {
    	return $header->save();
    }
}
