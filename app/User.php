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
        return $this->belongsToMany(Committee::class);
    }
    public function all_committees()
    {
        return $this->committees->pluck('name')->unique();
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
    public function getAvatarAttribute($value)
    {
        if ($value)
        {
            return asset('storage/' . $value);

        }
        else
        {
            return asset('storage/' . 'images/default_avatar.png');
        }
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function all_roles()
    {
        return $this->roles->pluck('name')->unique();
    }

    public function AssignRole($role)
    {

        $this->roles()->sync($role,false);
    }
    public function AssignCommittee($committee)
    {

        $this->committees()->sync($committee,false);
    }
    public function abilities()
    {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }


}
