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

    public function AllowAbility($ability)
    {

        if (is_string($ability)) {
            $ability = Ability::whereName($ability)->firstOrFail();
        }

        $this->abilities()->sync($ability,false);
    }

}
