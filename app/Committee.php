<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
