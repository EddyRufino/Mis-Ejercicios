<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brawl extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
