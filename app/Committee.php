<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany(User::class,'committee_user','user_id','committee_id');
    }
}
