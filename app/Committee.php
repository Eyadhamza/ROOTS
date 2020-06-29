<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function getImageAttribute($value)
    {

        return "storage/". $value;
    }

}
