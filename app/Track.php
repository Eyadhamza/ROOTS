<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded=[];
    public function getImageAttribute($value)
    {

        return "storage/". $value;
    }
    public function committees()
    {
        return $this->hasMany(Committee::class);
    }
}
