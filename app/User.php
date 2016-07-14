<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email' , 'user_id' ,'password','mobile','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function site()
    {
        return $this->hasOne(Site::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function addUser(User $user)
    {
        # code...
        return $user->save();
    }

}
