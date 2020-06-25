<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
    public function committees()
    {
        return $this->belongsToMany(Committee::class,'committee_user','user_id','committee_id');
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

}
