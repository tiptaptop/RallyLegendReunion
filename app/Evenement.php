<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = "evenement";
    //public timestamps = true; 

    public function photo()
    {
        return $this->hasMany('Photo');
    }

    public function users()
    {
        return $this->hasMany('User');
    }
}
