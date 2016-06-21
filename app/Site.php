<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Http\Request;

class Site extends Model
{
    //
    protected $fillable = [
        'user_id ','template_id ','subdomain', 'slogan_color','text_color', 'primary_color','secondry_color','body_type','background_image',
    ];

    public function domain()
    {
        return $this->hasOne(Domain::class);
    }


    public function owner()
    {
    	return $this->belongsTo(User::class);
    }

    public function header()
    {
    	return $this->hasOne(Header::class);
    }

    public function categories()
    {
    	return $this->hasMany(Category::class);
    }

    public function newsPromotions()
    {
        return $this->hasMany(NewsPromotion::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function crusals()
    {
        return $this->hasMany(Crusal::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function aboutus()
    {
        return $this->hasOne(Aboutus::class,'id');
    }
    
    public function addSite(Site $site)
    {
        return $site->save();
    }

    public function googlemaps()
    {
        return $this->hasOne(GoogleMap::class);
    }
    
}
