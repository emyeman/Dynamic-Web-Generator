<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    //
    protected $fillable = [
       'domain_name','site_id',
    ];

    public function addDomain(Domain $domain)
    {
    	# code...
    	return $domain->save();
    }
}
