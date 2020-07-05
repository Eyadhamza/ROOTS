<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded=[];

    public function abilities()
    {
        return $this->belongsToMany(Ability::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function all_users()
    {
        return $this->users->pluck('name')->unique();
    }
    public function instructors()
    {
        return $this->where('name','Instructor')->with('users')->get()->unique();
    }

    public function AllowAbility($ability)
    {

        if (is_string($ability)) {
            $ability = Ability::whereName($ability)->firstOrFail();
        }

        $this->abilities()->sync($ability,false);
    }

}
