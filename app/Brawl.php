<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brawl extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
