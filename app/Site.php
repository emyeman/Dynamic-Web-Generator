<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
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
}

